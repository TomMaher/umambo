/*	SWFFix 0.3 <http://code.google.com/p/swffix/>
	Copyright (c) 2007 Geoff Stearns, Michael Williams, and Bobby van der Sluis
	This software is released under the MIT License <http://www.opensource.org/licenses/mit-license.php>
*/

var SWFFix = function() {
	
	var domLoadFnArr = [main];
	var regObjArr = [];
	var timer = null;
	var storedAltContent = null;
	var isDomLoaded = false;
	var isIEFixed = false;
	var isOperaFixed = false;
	var isExpressInstall = false;
		
	var ua = function() {
		var d = null;
		var i = null;
		var w3cdom = typeof document.getElementById != "undefined" && typeof document.getElementsByTagName != "undefined" && typeof document.createElement != "undefined";
		var u = navigator.userAgent.toLowerCase();
		var	win = /win/.test(u);
		var	mac = /mac/.test(u);
		var	opera = /opera/.test(u);
		var	operaVersion = opera ? parseFloat(u.replace(/^.*opera ?\/?(\d+(\.\d+)?).*$/, "$1")) : 0;
		var	ie = !opera && /msie/.test(u);
		var ieVersion = ie ? parseFloat(u.replace(/^.*msie (\d+\.\d+).*$/, "$1")) : 0;
		var	webkit = /webkit/.test(u);
		var	webkitVersion = webkit ? parseFloat(u.replace(/^.*webkit\/(\d+(\.\d+)?).*$/, "$1")) : 0;
		var playerVersion = [0,0,0];
		if (navigator.plugins && typeof navigator.plugins["Shockwave Flash"] == "object") {
			d = navigator.plugins["Shockwave Flash"].description;
			if (typeof d != "undefined") {
				d = d.replace(/^.*\s+(\S+\s+\S+$)/, "$1");
				playerVersion[0] = parseInt(d.replace(/^(.*)\..*$/, "$1"), 10);
				playerVersion[1] = parseInt(d.replace(/^.*\.(.*)\s.*$/, "$1"), 10);
				playerVersion[2] = /r/.test(d) ? parseInt(d.replace(/^.*r(.*)$/, "$1"), 10) : 0;
			}
		}
		else if (window.ActiveXObject) {
			var fp6Crash = false;
			try { a = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.7"); }
			catch(e) {
				try { 
					a = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.6");
					playerVersion = [6,0,21];
					a.AllowScriptAccess = "always";
				}
				catch(e) {
					if (playerVersion[0] == 6) { fp6Crash = true; }
				}
				if (!fp6Crash) {
					try { a = new ActiveXObject("ShockwaveFlash.ShockwaveFlash"); }
					catch(e) {}
				}
			}
			if (!fp6Crash && typeof a == "object") {
				d = a.GetVariable("$version");
				if (typeof d != "undefined") {
					d = d.split(" ")[1].split(",");
					playerVersion = [parseInt(d[0], 10), parseInt(d[1], 10), parseInt(d[2], 10)];
				}
			}
		}
		return { w3cdom:w3cdom, win:win, mac:mac, opera:opera, operaVersion:operaVersion, ie:ie, ieVersion:ieVersion, webkit:webkit, webkitVersion:webkitVersion, playerVersion:playerVersion };
	}();
		
	var onDomLoad = function() {
		if (!ua.w3cdom) { return; }
		if (ua.ie && ua.win) {
			document.write("<script id=__ie_ondomload defer=true src=//:></script>");
			document.getElementById("__ie_ondomload").onreadystatechange = function() {
				if (this.readyState == "complete") { 
					this.parentNode.removeChild(this);
					callDomLoadFunctions();
				}
			};
		}
		if (ua.webkit) {
			timer = setInterval(function() { if (/loaded|complete/.test(document.readyState)) callDomLoadFunctions(); }, 10);
		}
		if (typeof document.addEventListener != "undefined") {
			document.addEventListener("DOMContentLoaded", callDomLoadFunctions, null);
		}
		addLoadEvent(callDomLoadFunctions);
	}();
	
	function callDomLoadFunctions() {
		if (isDomLoaded) { return; }
		isDomLoaded = true;
		if (timer) {
			clearInterval(timer);
			timer = null;
		}
		var dl = domLoadFnArr.length;
		for (var i = 0; i < dl; i++) {
			domLoadFnArr[i]();
		}
	}
	
	function addDomLoadEvent(fn) {
		domLoadFnArr[domLoadFnArr.length] = fn;
	}
	
	function addLoadEvent(fn) {
		if (typeof window.addEventListener != "undefined") { window.addEventListener("load", fn, false); }
		else if (typeof document.addEventListener != "undefined") { document.addEventListener("load", fn, false); }
		else if (typeof window.attachEvent != "undefined") { window.attachEvent("onload", fn); }
		else if (typeof window.onload == "function") {
			var fnOld = window.onload;
			window.onload = function() {
				fnOld();
				fn();
			};
		}
		else { window.onload = fn; }
	}
	
	function main() {
		var rl = regObjArr.length;
		for (var i = 0; i < rl; i++) {
			var id = regObjArr[i].id;
			var obj = document.getElementById(id);
			if (hasPlayerVersion(regObjArr[i].swfVersion)) {
				if (ua.webkit && ua.webkitVersion < 312) {
					fixParams(obj);
				}
				else {
					if (!isIEFixed && ua.win && ua.ie && ua.ieVersion >= 6) {
						isIEFixed = true;
						if (document.readyState == "complete") { fixIEActiveContent(); }
						else { window.attachEvent("onload", fixIEActiveContent); }
						window.attachEvent("onbeforeunload", fixOutOfMemoryError);
						window.attachEvent("onunload", fixObjectLeaks);
					}
					else if (!isOperaFixed && ua.opera && ua.operaVersion >= 9) {
						isOperaFixed = true;
						addLoadEvent(fixActiveContent);
					}
				}
			}
			else if (hasPlayerVersion([1,0,0])) {
				if (!isExpressInstall && regObjArr[i].expressInstall && (ua.win || ua.mac) && hasPlayerVersion([6,0,65])) {
					displayExpressInstallDialog(regObjArr[i]);
				}
				else {
					displayAltContent(obj);
				}
			}
			createCSS("#" + id, "visibility:visible");
		}
	}

	function getTargetVersion(obj) {
		var c = obj.childNodes;
		var cl = c.length;
		for (var i = 0; i < cl; i++) {
			if (c[i].nodeType == 1 && c[i].nodeName.toLowerCase() == "object") {
			    c = c[i].childNodes;
			    cl = c.length;
			    i = 0;
			}     
			if (c[i].nodeType == 1 && c[i].nodeName.toLowerCase() == "param" && c[i].getAttribute("name") == "swfversion") {
			   return c[i].getAttribute("value"); 
			}
		}
		return 0;
	}
    
	function getExpressInstall(obj) {
		var c = obj.childNodes;
		var cl = c.length;
		for (var i = 0; i < cl; i++) {
			if (c[i].nodeType == 1 && c[i].nodeName.toLowerCase() == "object") {
			    c = c[i].childNodes;
			    cl = c.length;
			    i = 0;
			}     
			if (c[i].nodeType == 1 && c[i].nodeName.toLowerCase() == "param" && c[i].getAttribute("name") == "expressinstall") { 
			    return c[i].getAttribute("value"); 
			}	       
		}
		return "";
	}
    
	function fixParams(obj) {
		var nestedObj = obj.getElementsByTagName("object")[0];
		if (typeof nestedObj != "undefined") {
			var e = document.createElement("embed");
			var a = nestedObj.attributes;
			var al = a.length;
			for (var i = 0; i < al; i++) {
				if (a[i].nodeName.toLowerCase() == "data") { e.setAttribute("src", a[i].nodeValue); }
				else { e.setAttribute(a[i].nodeName, a[i].nodeValue); }
			}
			var c = nestedObj.childNodes;
			var cl = c.length;
			for (i = 0; i < cl; i++) {
				if (c[i].nodeType == 1 && c[i].nodeName.toLowerCase() == "param") { e.setAttribute(c[i].getAttribute("name"), c[i].getAttribute("value")); }
			}
			obj.parentNode.replaceChild(e, obj);
		}
	}
	
	function fixIEActiveContent() {
		var o = document.getElementsByTagName("object");
		var ol = o.length;
		for (var i = 0; i < ol; i++) {
			var c = o[i].childNodes;
			var cl = c.length;
			var paramHTML = "";
			for (var j = 0; j < cl; j++) {
				if (c[j].nodeType == 1 && c[j].nodeName.toLowerCase() == "param") { paramHTML += c[j].outerHTML; }	       
			}
			o[i].outerHTML = o[i].outerHTML.split(">")[0] + ">" + paramHTML + o[i].innerHTML + "</object>";
		}
	}
	
	function fixOutOfMemoryError() {
		__flash_unloadHandler = function() {};
		__flash_savedUnloadHandler = function() {};
	}
	
	function fixObjectLeaks() {
		var o = document.getElementsByTagName("object");
		var ol = o.length
		for (var i = 0; i < ol; i++) {
			o[i].style.display = "none";
			for (var x in o[i]) {
				if (typeof o[i][x] == "function") o[i][x] = function() {};
			}
		}
	}
	
	function fixActiveContent() {
		var o = document.getElementsByTagName("object");
		var ol = o.length;
		for (var i = 0; i < ol; i++) {
			if(o[i].getAttribute("type") == "application/x-shockwave-flash") {
				var c = o[i].cloneNode(true);
				o[i].parentNode.replaceChild(c, o[i]);
			}
		}
	}
	
	function displayExpressInstallDialog(regObj) {
		isExpressInstall = true;
		var obj = document.getElementById(regObj.id);
		storedAltContent = regObj.altContent ? document.getElementById(regObj.altContent) : abstractAltContent(obj);
		var w = regObj.width ? regObj.width : obj.getAttribute("width");
		if (parseInt(w, 10) < 310) { w = "310"; }
		var h = regObj.height ? regObj.height : obj.getAttribute("height");
		if (parseInt(h, 10) < 137) { h = "137"; }
		var pt = ua.ie && ua.win ? "ActiveX" : "PlugIn";
		var dt = document.title = document.title.slice(0, 47) + " - Flash Player Installation";
		var fv = "MMredirectURL=" + window.location + "&MMplayerType=" + pt + "&MMdoctitle=" + dt;
		var el = obj;
		if (ua.win && ua.ie && obj.readyState != 4) {
			el = document.createElement("div");
			obj.parentNode.insertBefore(el, obj);
			obj.style.display = "none";
			window.attachEvent("onload", function() { obj.parentNode.removeChild(obj); });
		}
		createSWF({ data:regObj.expressInstall, id:"SWFFixEID", width:w, height:h }, { flashvars:fv }, el);
	}

	function displayAltContent(obj) {
		obj.parentNode.replaceChild(abstractAltContent(obj), obj);
	}	

	function abstractAltContent(obj) {
		var ac = document.createElement("div");
		if (ua.win && ua.ie) { ac.innerHTML = obj.innerHTML; }
		else {
			var nestedObj = obj.getElementsByTagName("object")[0];
			if (typeof nestedObj != "undefined") {
				var c = nestedObj.childNodes;
				var cl = c.length;
				for (var i = 0; i < cl; i++) {
					if (!(c[i].nodeType == 1 && c[i].nodeName.toLowerCase() == "param") && !(c[i].nodeType == 8)) { ac.appendChild(c[i].cloneNode(true)); }
				}
			}
		}
		return ac;
	}
	
	function createSWF(attObj, parObj, el) {
		var o = null;
		if (ua.ie && ua.win) {
			var att = "";
			for (i in attObj) { 
				if (i == "data") { parObj.movie = attObj[i]; }
				else if (i != "classid") { att += ' ' + i + '="' + attObj[i] + '"'; } 
			}
			var par = "";
			for (i in parObj) { par += '<param name="' + i + '" value="' + parObj[i] + '" />'; }
			el.outerHTML = '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"' + att + '>' + par + '</object>';
		}
		else if (ua.webkit && ua.webkitVersion < 312) {
			o = document.createElement("embed");
			o.setAttribute("type", "application/x-shockwave-flash");
			for (i in attObj) {
				if (i == "data") { o.setAttribute("src", attObj[i]); }
				else if (i != "classid") { o.setAttribute(i, attObj[i]); }
			}
			for (i in parObj) {
				if (i != "movie") { o.setAttribute(i, parObj[i]); }
			}
			el.parentNode.replaceChild(o, el);
		}
		else {
			o = document.createElement("object");
			o.setAttribute("type", "application/x-shockwave-flash");
			for (i in attObj) {
				if (i != "classid") { o.setAttribute(i, attObj[i]); }
			}
			for (i in parObj) {
				if (i != "movie") { createObjParam(o, i, parObj[i]); }
			}	
			el.parentNode.replaceChild(o, el);
		}
	}

	function createObjParam(el, pName, pValue) {
		var p = document.createElement("param");
		p.setAttribute("name", pName);	
		p.setAttribute("value", pValue);
		el.appendChild(p);
	}
	
	function hasPlayerVersion(rv) {
		return (ua.playerVersion[0] > rv[0] || (ua.playerVersion[0] == rv[0] && ua.playerVersion[1] > rv[1]) || (ua.playerVersion[0] == rv[0] && ua.playerVersion[1] == rv[1] && ua.playerVersion[2] >= rv[2])) ? true : false;
	}
		
	function createCSS(sel, decl) {
		if (ua.ie && ua.mac) { return; }
		var h = document.getElementsByTagName("head")[0]; 
		var s = document.createElement("style");
		s.setAttribute("type", "text/css");
		s.setAttribute("media", "screen");
		if (!(ua.ie && ua.win)) { s.appendChild(document.createTextNode(sel + " {" + decl + "}")); }
		h.appendChild(s);
		if (ua.ie && ua.win && document.styleSheets && document.styleSheets.length > 0) {
			var ls = document.styleSheets[document.styleSheets.length - 1];
			if (typeof ls.addRule == "object") { ls.addRule(sel, decl); }
		}
	}
	
	return {
		// public API
		registerObject: function(objectIdStr, swfVersionStr, xiSwfUrlStr) {
			if (!ua.w3cdom || !objectIdStr) { return; }
			var v = null;
			var obj = document.getElementById(objectIdStr);
			var xi = getExpressInstall(obj);
			var regObj = {};
			regObj.id = objectIdStr;
			createCSS("#" + objectIdStr, "visibility:hidden");
			if (swfVersionStr) {
				v = swfVersionStr.split(".");
				regObj.swfVersion = [parseInt(v[0], 10), parseInt(v[1], 10), parseInt(v[2], 10)];
			}
			else {
				var version = getTargetVersion(obj);
				if (version) {
					v = version.split(".");
					regObj.swfVersion = [parseInt(v[0], 10), parseInt(v[1], 10), parseInt(v[2], 10)];
				}
				else
					regObj.swfVersion = [0,0,0];
			}
			regObj.expressInstall = xiSwfUrlStr ? xiSwfUrlStr : ((xi != "") ? xi : false);
			regObjArr[regObjArr.length] = regObj;
		},
		
		embedSWF: function(swfUrlStr, replaceElemIdStr, widthStr, heightStr, swfVersionStr, xiSwfUrlStr, flashvarsObj, parObj, attObj) {
			if (!ua.w3cdom || !swfUrlStr || !replaceElemIdStr || !widthStr || !heightStr || !swfVersionStr) { return; }
			if (hasPlayerVersion(swfVersionStr.split("."))) {
				createCSS("#" + replaceElemIdStr, "visibility:hidden");
				var att = (typeof attObj == "object") ? attObj : {};
				att.data = swfUrlStr;
				att.width = widthStr;
				att.height = heightStr;
				var par = (typeof parObj == "object") ? parObj : {};
				if (typeof flashvarsObj == "object") {
					for (var i in flashvarsObj) {
						if (typeof par.flashvars != "undefined") {
							par.flashvars += "&" + i + "=" + flashvarsObj[i];
						}
						else {
							par.flashvars = i + "=" + flashvarsObj[i];
						}
					}
				}
				addDomLoadEvent(function() {
					createSWF(att, par, document.getElementById(replaceElemIdStr));
					createCSS("#" + replaceElemIdStr, "visibility:visible");
				});
			}
			else if (xiSwfUrlStr && !isExpressInstall && (ua.win || ua.mac) && hasPlayerVersion([6,0,65])) {
				createCSS("#" + replaceElemIdStr, "visibility:hidden");
				addDomLoadEvent(function() {
					var regObj = {};
					regObj.id = regObj.altContent = replaceElemIdStr;
					regObj.width = widthStr;
					regObj.height = heightStr;
					regObj.expressInstall = xiSwfUrlStr;
					displayExpressInstallDialog(regObj);
					createCSS("#" + replaceElemIdStr, "visibility:visible");
				});
			}
		},
		
		getFlashPlayerVersion: function() {
			return { major:ua.playerVersion[0], minor:ua.playerVersion[1], release:ua.playerVersion[2] };
		},
		
		hasFlashPlayerVersion: function(versionStr) {
			return hasPlayerVersion(versionStr.split("."));
		},
		
		expressInstallCallback: function() {
			if (isExpressInstall && document.getElementById("SWFFixEID") && storedAltContent) {
				var obj = document.getElementById("SWFFixEID");
				obj.parentNode.replaceChild(storedAltContent, obj);
				storedAltContent = null;
				isExpressInstall = false;
			} 
		}	
	};
	
}();

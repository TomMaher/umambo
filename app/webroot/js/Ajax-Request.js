var rootdomain="http://"+window.location.hostname
var xmlHttp;

function ajaxRequest(post, url, id){
// JavaScript Document

xmlHttp=GetXmlHttpObject()
if (xmlHttp==null){ alert ("Browser does not support HTTP Request"); return } 

xmlHttp.onreadystatechange=function(){
stateChanged(id);
}
xmlHttp.open("POST",url,true)
xmlHttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

//Si la variable post contiene informacion mandarla por medio del post, sino no!
post != null ? xmlHttp.send(post) : xmlHttp.send(null);	
} 

function stateChanged(id){ 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
	
if(xmlHttp.responseText.replace(new RegExp(/^\s+/),"") == 'error'){
alert('The script has an error, Please check the code');	
	
}else if(xmlHttp.responseText.replace(new RegExp(/^\s+/),"") == 'delete'){
var value = document.getElementById(id);
var parent = value.parentNode;
value.parentNode.parentNode.removeChild(parent); 
alert('Deleted Successfully');
}else{
document.getElementById(id).innerHTML = xmlHttp.responseText+document.getElementById(id).innerHTML; 
}
}
}

function GetXmlHttpObject()
{
var xmlHttp=null;
try
 {
 // Firefox, Opera 8.0+, Safari
 xmlHttp=new XMLHttpRequest();
 }
catch (e)
 {
 // Internet Explorer
 try
  {
  xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
  }
 catch (e)
  {
  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
 }
return xmlHttp;
}
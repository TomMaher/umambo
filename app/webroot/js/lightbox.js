
function lightbox()
{
	
	lightbox.prototype.initialize = function(a,b){
		this.content = a;// URl
		this.container = b;// CONTAINER
		this.overlay = 'overlay';
		this.popup = 'popup_box';
	}
	
	
	/* Activate and Load the Lightbox*/
    lightbox.prototype.activate = function(){
	  lb.addLightboxMarkup(); 
      document.getElementById(this.overlay).style.display = 'block';
	  document.getElementById(this.popup).style.display = 'block';
      loadPopup(this.content,this.container);
	  //Display Lightbox	
	}

    /* Create the overlay and box div for the lightbox to load*/
	lightbox.prototype.addLightboxMarkup = function(){
	bod 				= document.getElementsByTagName('body')[0];
	overlay 			= document.createElement('div');
	popup 		     	= document.createElement('div');
	overlay.id			= this.overlay;	
	popup.id			= this.popup;
	bod.appendChild(popup);
	bod.appendChild(overlay);
	}
	
     /* Close Lightbox*/
	lightbox.prototype.desactivate = function(){
	var popup = document.getElementById(this.popup);
	var overlay = document.getElementById(this.overlay);
	popup.parentNode.removeChild(popup); 
	overlay.parentNode.removeChild(overlay); 
	}
}


/*-----------------------------------------------------------------------------------------------*/

function run_lightbox(a,b){
       lb = new lightbox();
	   lb.initialize(a,b);  
	  if(a == 'close'){ lb.desactivate();
	  }else{ lb.activate();}
			   
}


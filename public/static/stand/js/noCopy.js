$(document).ready(function(e) {
	$(document).bind("contextmenu",function(){return false;});
	$(document).bind("selectstart",function(){return false;});
	$(document).keydown(function(){return key(arguments[0])}); 
});


function key(e){
	var keynum;
	if(window.event) // IE
	  {
		keynum = e.keyCode;
	  }
	else if(e.which) // Netscape/Firefox/Opera
	  {
		keynum = e.which;
	  }
	if(keynum == 17){ return false;}
}
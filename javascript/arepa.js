//arepa
var $arepa = new Object();

//Constants
$arepa.DETACHED_PARENT = "detachedParent";
$arepa.PLACEHOLDER_ELEMENT = "placeholderElement";

//Creates a placeholder for an HTML element
//Detaches the original element
//Returns true if succeeds, false otherwise
//Only works for position:relative/static, display:block elements
$arepa.detachElement = function(element){
	if (element.hasOwnProperty($arepa.DETACHED_PARENT) || element.hasOwnProperty($arepa.PLACEHOLDER_ELEMENT)){
		//Already detached
		return false;
	}
	
	//Creating DETACHED_PARENT and PLACEHOLDER_ELEMENT properties
	element[$arepa.DETACHED_PARENT] = element.parentNode;
	var placeholder = document.createElement("div");
	element[$arepa.PLACEHOLDER_ELEMENT] = placeholder;
	
	//Obtaining height
	var height = $(element).outerHeight();
	
	//Editing placeholder style
	$(placeholder).addClass("arepa-block");
	$(placeholder).css("height",height);
	
	//Replacing with placeholder
	$(element).replaceWith(placeholder);
	
	//TODO: 
	
	
	return true;
	
}

//Maximizes an HTML element
$arepa.maximizeElement = function(element){
	if (element.hasOwnProperty($arepa.DETACHED_PARENT)){
		//Already maximized.
		return $arepa;
	}
	element[$arepa.DETACHED_PARENT] = element.parentNode;
	$('html, body').animate({
        scrollTop: $(element).offset().top
    }, 2000);
}
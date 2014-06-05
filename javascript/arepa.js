//arepa
var $arepa = new Object();

//Constants
$arepa.DETACHED_PARENT = "detachedParent";
$arepa.PLACEHOLDER_ELEMENT = "placeholderElement";
$arepa.ORIGINAL_BG_COLOR = "originalBackgroundColor";

$arepa.MAXIMIZE_STATUS = "maximizeStatus";
$arepa.MAXIMIZE_STATUS_STARTED = 1;
$arepa.MAXIMIZE_STATUS_ANIMATING = 2;
$arepa.MAXIMIZE_STATUS_FINISHING = 3;
$arepa.MAXIMIZE_STATUS_MAXIMIZED = 4;

//List of all maximized elements
$arepa.maximizedElements = new Array();

//Creates a placeholder for an HTML element
//Detaches the original element and places it absolutely in the body
//Returns the element's vertical offset in the document
//Only works for position:relative/static, display:block elements
//with no border/padding/margin
//Maximizes an HTML element
//Body must be static for this to work
$arepa.maximizeElement = function(element){
	var offsetTop= $(element).offset().top;
	if (element.hasOwnProperty($arepa.MAXIMIZE_STATUS)){
		//Already detached.
		return false;
	}
	if ($arepa.maximizedElements.length>0){
		if ($(element).closest($arepa.maximizedElements[$arepa.maximizedElements.length-1]).length == 0){
			//Not a descendant of latest maximized element
			return false;
		}
	}
	element[$arepa.MAXIMIZE_STATUS] = $arepa.MAXIMIZE_STATUS_STARTED;
	$arepa.maximizedElements.push(element);
	
	//Creating DETACHED_PARENT and PLACEHOLDER_ELEMENT properties
	element[$arepa.DETACHED_PARENT] = element.parentNode;
	var placeholder = document.createElement("div");
	element[$arepa.PLACEHOLDER_ELEMENT] = placeholder;
	element[$arepa.ORIGINAL_BG_COLOR] = element.style.backgroundColor; 
	
	var parentElement = element;
	var color = $(parentElement).css("background-color");
	
	while(color == null || color == "" || color.length==0 || (color.indexOf("rgba") === 0 && (color.match(", 0\\)$")==", 0)" || color.match(",0\\)$")==",0)")) || color=="transparent" || color=="inherit" || color=="initial"){
		var parentElement = parentElement.parentNode;
		if (parentElement==null || parentElement==undefined || parentElement.style==null || parentElement.style==undefined){
			break;
		}
		color = $(parentElement).css("background-color");
		//console.log("evaluating with color: "+color+" of element "+parentElement);
	}
	
	//console.log("color is: "+typeof(color));
	
	//Obtaining height
	var height = $(element).outerHeight();
	
	//Editing placeholder style
	$(placeholder).addClass("arepa-block");
	$(placeholder).css("height",height);
	
	//Replacing with placeholder
	$(element).replaceWith(placeholder);
	
	//Making the element absolutely positioned and placing it
	$(element).addClass("arepa-detached");
	//Setting other css
	$(element).css("background-color",color);
	$(element).css("top",offsetTop);
	$(element).css("height",height);
	var originalOverflow = $(element).css("overflow");
	$(element).css("overflow","hidden");
	$(element).addClass("arepa-animate-detached");
	
	//Making body animated
	$("body").addClass("arepa-animate-margin-top");
	
	//Appending element to body
	$("body").append(element);
	
	element[$arepa.MAXIMIZE_STATUS] = $arepa.MAXIMIZE_STATUS_ANIMATING;
	
	$('html, body').animate({
    	scrollTop: 0
 	}, 2000);
	
	window.setTimeout(function(){
		$("body").css("margin-top",-offsetTop);
		$(element).css("top",0);
		$(element).css("min-height",$(window).height());
		
		$(element).bind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd", function(){
			if (element[$arepa.MAXIMIZE_STATUS] == $arepa.MAXIMIZE_STATUS_ANIMATING){
				element[$arepa.MAXIMIZE_STATUS] = $arepa.MAXIMIZE_STATUS_FINISHING;
				
				$("body").removeClass("arepa-animate-margin-top");
				$(element).removeClass("arepa-animate-detached");
				$(element).css("overflow",originalOverflow);
				
				$("body").css("margin-top",0);
				
				$("body").children().each(function () {
    				if (this != element){
    					$(this).addClass("arepa-hidden");
    				}
				});
				
				element[$arepa.MAXIMIZE_STATUS] = $arepa.MAXIMIZE_STATUS_FINISHING;
			}
		});
		
		
	},100);
	
}

$arepa.isElementMaximized = function(element){
	return element.hasOwnProperty($arepa.MAXIMIZE_STATUS);
}
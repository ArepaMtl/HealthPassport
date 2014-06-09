//arepa
var $arepa = new Object();

//Constants
$arepa.DETACHED_PARENT = "detachedParent";
$arepa.PLACEHOLDER_ELEMENT = "placeholderElement";
$arepa.ORIGINAL_BG_COLOR = "originalBackgroundColor";
$arepa.ORIGINAL_BODY_BG_COLOR = "originalBodyBackgroundColor";
$arepa.MAXIMIZE_TIMER = "maximizeTimer";
$arepa.ORIGINAL_OVERFLOW = "originalOverflow";
$arepa.ORIGINAL_OFFSET_TOP = "originalOffsetTop";
$arepa.ORIGINAL_HEIGHT = "originalHeight";
$arepa.ORIGINAL_SCROLL_TOP = "originalScrollTop";
$arepa.MAXIMIZE_TIMER_COUNT = "maximizeTimerCount";
$arepa.NON_HIDDEN_SIBLINGS = "nonHiddenSiblings";

$arepa.IS_MAXIMIZED = "isMaximized";

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
	if (element[$arepa.IS_MAXIMIZED]){
		//Already maximized.
		return false;
	}
	if ($arepa.maximizedElements.length>0){
		if ($(element).closest($arepa.maximizedElements[$arepa.maximizedElements.length-1]).length == 0){
			//Not a descendant of latest maximized element
			return false;
		}
	}
	element[$arepa.IS_MAXIMIZED] = true;
	$arepa.maximizedElements.push(element);
	
	//Values
	var scrollTop = $(document).scrollTop();
	var offsetTop= $(element).offset().top;
	var height = $(element).outerHeight();
	
	var color = $arepa.getClosestBackgroundColor(element);
	
	
	
	//Reminders
	$arepa.setIfNull(element,$arepa.DETACHED_PARENT,element.parentNode);
	$arepa.setIfNull(element,$arepa.PLACEHOLDER_ELEMENT,$arepa.getPlaceholderWithHeight(height));
	$arepa.setIfNull(element,$arepa.ORIGINAL_BG_COLOR,$(element).css("background-color"));
	$arepa.setIfNull(element,$arepa.ORIGINAL_BODY_BG_COLOR,$("body").css("background-color"));
	$arepa.setIfNull(element,$arepa.ORIGINAL_OVERFLOW,$(element).css("overflow"));
	$arepa.setIfNull(element,$arepa.ORIGINAL_OFFSET_TOP,offsetTop);
	$arepa.setIfNull(element,$arepa.ORIGINAL_SCROLL_TOP,scrollTop);
	$arepa.setIfNull(element,$arepa.ORIGINAL_HEIGHT,height);
	$arepa.setIfNull(element,$arepa.NON_HIDDEN_SIBLINGS,$arepa.nonHiddenSiblings(element));
	
	//Do not revert this one
	$arepa.setIfNull(element,$arepa.MAXIMIZE_TIMER_COUNT,0);
	
	//Replacing with placeholder and appending to body
	$(element).replaceWith(element[$arepa.PLACEHOLDER_ELEMENT]);
	$("body").append(element);
	
	//Setting detached class and animation class.
	$(element).addClass("arepa-detached");
	$(element).addClass("arepa-animate-detached");
	
	//Setting other css
	$(element).css("background-color",color);
	$(element).css("top",offsetTop);
	$(element).css("height",height);
	$(element).css("overflow","hidden");
	
	//Making body animated
	$("body").addClass("arepa-animate-margin-top");
	
	//Scrolling to top.
	$('html, body').animate({
    	scrollTop: 0
 	}, 2000);
	
	element[$arepa.MAXIMIZE_TIMER_COUNT] += 1;
	
	var currentMaximizeCounter = element[$arepa.MAXIMIZE_TIMER_COUNT];
	
	window.setTimeout(function(){
		//Stop if stopped being maximized
		if (!element[$arepa.IS_MAXIMIZED]){
			return;
		}
		//Stop if another animation was performed in the same context
		if (element[$arepa.MAXIMIZE_TIMER_COUNT] != currentMaximizeCounter){
			return;
		}
		
		$("body").css("margin-top",-element[$arepa.ORIGINAL_OFFSET_TOP]);
		$(element).css("top",0);
		$(element).css("min-height",$(window).height());
		
		element[$arepa.MAXIMIZE_TIMER_COUNT] += 1;
		
		currentMaximizeCounter = element[$arepa.MAXIMIZE_TIMER_COUNT];
		
		$(element).bind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd", function(){
			//Stop if stopped being maximized
			if (!element[$arepa.IS_MAXIMIZED]){
				return;
			}
			//Stop if another animation was performed in the same context
			if (element[$arepa.MAXIMIZE_TIMER_COUNT] != currentMaximizeCounter){
				return;
			}
		
			$("body").removeClass("arepa-animate-margin-top");
			$(element).removeClass("arepa-animate-detached");
			$(element).css("overflow",element[$arepa.ORIGINAL_OVERFLOW]);
				
			$("body").css("margin-top",0);
				
			console.log("body color: "+color);
				
			$("body").css("background-color",color);
				
			$("body").children().each(function () {
    			if (this != element){
    					$(this).addClass("arepa-hidden");
    			}
			});
		});
		
	},100);
	
	return true;
	
};

$arepa.minimizeElement = function(element){
	if (!element[$arepa.IS_MAXIMIZED]){
		//Already minimized.
		return false;
	}
	if ($arepa.maximizedElements[$arepa.maximizedElements.length-1] != element){
		//Not the latest maximized element.
		return false;
	}
	element[$arepa.IS_MAXIMIZED] = false;
	$arepa.maximizedElements.pop();
	
	var siblings = element[$arepa.NON_HIDDEN_SIBLINGS];
	
	for (var i=1;i<siblings.count;i+=1){
		$(siblings[i]).removeClass("arepa-hidden");
	}
	
	//This should happen only if it previously got to be maximized
	//In particular the margin top should not be offset if not needed
	//Is there a easy way to keep track at which stage it is of the previous step so that no extra steps
	//are performed?
	//Start by making all animation into completion blocks.
	//Maybe make it possible to revert any sequence of completion blocks by knowing the stages
	//Hmm interesting!
	//Also make sure to unbind!!!!!
	$("body").css("background-color",element[$arepa.ORIGINAL_BODY_BG_COLOR]);
	$(element).css("overflow","hidden");
	$(element).addClass("arepa-animate-detached");
	$("body").addClass("arepa-animate-margin-top");
	$("body").css("margin-top",-element[$arepa.ORIGINAL_OFFSET_TOP]);
	
	
	
	
};

$arepa.getClosestBackgroundColor = function(element){
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
	
	return color;
};

$arepa.getPlaceholderWithHeight = function(height){
	var placeholder = document.createElement("div");
	$(placeholder).addClass("arepa-block");
	$(placeholder).css("height",height);
	return placeholder;
};

$arepa.setIfNull = function(element,key,value){
	if (element[key]==null){
		element[key] = value;
	}
};

$arepa.nonHiddenSiblings = function(element){
	var array = new Array();
	$("body").children().each(function () {
    	if (this != element && !$(this).hasClass("arepa-hidden")){
    		array.push(this);
    	}
	});
	return array;
};

$ArepaSimpleAnimation = function(before,wait,after){
	this.before = before;
	this.after = after;
	this.wait = wait;
	this.performWithBlocks = function(before0,before1,after0,after1){
		if (before0 != null && !before0()){
			return;
		}
	};
	this.perform = function(){
		this.performWithBlocks(null,null,null,null);
	};
};

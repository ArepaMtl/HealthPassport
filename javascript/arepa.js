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
	
	//return;
	
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
		
		$(element).on("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd", function(){
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

//Helpers

$arepa.isNull = function(){
	for (var i=0;i<arguments.length;i+=1){
		if (arguments[i] === null || arguments[i] === undefined){
			return true;
		}
	}
	return false;
};

//Constructors

$arepa.TimedAction = function(before,wait,after){
	this.before = before;
	this.after = after;
	this.wait = wait;
	this.isCancelled = function(){
		return false;
	};
	this.cancel = function(){
		this.isCancelled = function(){
			return true;
		};
	};
	var _isDone = false;
	var _action = this;
	var _status = 0;
	this.isDone = function(){
		return _isDone;
	};
	this.status = function(){
		return _status;
	};
	this.perform = function(){
		var performArguments = Array.prototype.slice.call(arguments);
		if (_isDone){
			return false;
		}
		
		if (_action.isCancelled()){
			_isDone = true;
			return false;
		}
		
		_status = 1;
		
		if (!$arepa.isNull(before)){
			before.apply(_action,performArguments);
		}
		
		_status = 2;
		
		var afterBlock = function(){
			
			if (_isDone){
				return false;
			}
			
			if (_action.isCancelled()){
				_isDone = true;
				return false;
			}
			
			_status = 3;
			
			if (!$arepa.isNull(after)){
				after.apply(_action,performArguments);
			}
			
			_status = 4;
			
			_isDone = true;
		};
		if (typeof(wait) === "number"){
			window.setTimeout(function(){
				afterBlock();
			},wait);
			return true;
		}else if (typeof(wait) === "object"){
			var element = wait.element;
			var eventName = wait.eventName;
			var timeout = wait.timeout;
			if ($arepa.isNull(element,eventName,timeout)){
				_isDone = true;
				return false;
			}
			$(wait.element).on(wait.eventName, function(){
				afterBlock();
				var callee = arguments.callee;
				$(wait.element).off(wait.eventName,callee);
			});
			window.setTimeout(function(){
				afterBlock();
			},wait.timeout);
			return true;
		}else{
			_isDone = true;
			return false;
		}
	};
};

$arepa.ActionSequence = function(blockArray,waitArray){
	this.blockArray = blockArray;
	this.waitArray = waitArray;
	
	var numBlocks = blockArray.length;
	var numWaits = waitArray.length;
	
	if (numBlocks<2){
		return;
	}
	
	if (numWaits<numBlocks-1){
		for (var i=numWaits;i<numBlocks-1;i+=1){
			this.waitArray.push(1);
		}
		numWaits = numBlocks - 1;
	}
	
	var _action = new $arepa.TimedAction(blockArray[numBlocks-2],waitArray[numBlocks-2],blockArray[numBlocks-1]);
	var _cancelled = false;
	
	this.isCancelled = function(){
		return _cancelled;
	};
	
	this.actions = [_action];
	_action.isCancelled = this.isCancelled;
	
	for (var i=numBlocks-3;i>=0;i-=1){
		var nextAction = (function(f_i,f_action){
			return (new $arepa.TimedAction(blockArray[f_i],waitArray[f_i],function(){
				var performArguments = Array.prototype.slice.call(arguments);
				f_action.perform.apply(f_action,performArguments);
			}));
		})(i,_action);
		
		this.actions.unshift(nextAction);
		
		nextAction.isCancelled = this.isCancelled;
		_action = nextAction;
	}
	
	this.cancel = function(){
		_cancelled = true;
		return this.status();
	};
	
	this.status = function(){
		//var statusArray = [];
		var i;
		var last_status = 0;
		for (i=0;i<this.actions.length;i+=1){
			last_status = this.actions[i].status();
			//statusArray.push(last_status);
			if (last_status==4){
				last_status=2;
			}else{
				break;
			}
		}
		return i+Math.floor(last_status/2+0.5);
	};
	
	this.perform = function(){
		var performArguments = Array.prototype.slice.call(arguments);
		return _action.perform.apply(_action,performArguments);
	};
	
};

$arepa.ActionSwitch = function(onBlockArray,onWaitArray,offBlockArray,offWaitArray){
	this.onBlockArray = onBlockArray;
	this.onWaitArray = onWaitArray;
	this.offBlockArray = offBlockArray;
	this.offWaitArray = offWaitArray;
	
	_numBlocks = onBlockArray.length;
	_actionArray = [];
	
	this.status = function(key){
		if (!(key in _actionArray)){
			_actionArray[key] = {"action":null,"isOn":false,"offset":0};
		}
		var actionObject = _actionArray[key];
		if (actionObject.action==null){
			if (actionObject.isOn){
				return _numBlocks;
			}else{
				return -_numBlocks;
			}
		}else{
			if (actionObject.isOn){
				return actionObject.action.status()+actionObject.offset;
			}else{
				return -(actionObject.action.status()+actionObject.offset);
			}
		}
	};
	
	this.switchHow = function(){
		var functionArguments = Array.prototype.slice.call(arguments);
		var how = functionArguments.shift();
		var key = functionArgments.shift();
		var currentStatus = this.status(key);
		if ((currentStatus>=0 && how) || (currentStatus<=0 && !how)){
			return;
		}
		var actionObject = _actionArray[key];
		actionObject.action.cancel();
		var numBlocksDone = Math.abs(currentStatus);
		
		var actionSequence;
		
		if (how){
			actionSequence = new $arepa.ActionSequence(this.onBlockArray.slice(-numBlocksDone),this.onWaitArray.slice(-(numBlocksDone-1)));
		}else{
			actionSequence = new $arepa.ActionSequence(this.offBlockArray.slice(-numBlocksDone),this.offWaitArray.slice(-(numBlocksDone-1)));
		}
		
		_actionArray[key] = {"action":actionSequence,"isOn":how,"offset":_numBlocks-numBlocksDone};
		
		_actionArray[key].action.perform(functionArguments);
		
	};
	
	this.switchOn = function(){
		var functionArguments = Array.prototype.slice.call(arguments);
		functionArguments.unshift(true);
		this.switchHow.apply(this,functionArguments);
	};
	
	this.switchOff = function(){
		var functionArguments = Array.prototype.slice.call(arguments);
		functionArguments.unshift(false);
		this.switchHow.apply(this,functionArguments);
	};
};

/*Maximize:
   -sth           1            2               3
 (nothing)-- A --(Z)--> B --(Y-->Z)--> C --(X-->Y-->Z)
setup, add animation class --(wait)---> set final values --(listen)--> remove animation class, final setup

Inverse (minimize):
    +sth          -1           -2              -3
 (nothing)-- X --(A)--> Y --(B-->C)--> Z --(A-->B-->C)
un-setup, add adnimation class --(wait)---> set initial values --(listen)--> remove animation class, final un-setup

*/

var timedActionSequence = new $arepa.ActionSequence([function(){
	alert(1);
},function(){
	alert(2);
},function(){
	alert(3);
},function(){
	alert(4);
}],
[1000,1000,1000]);

// timedActionSequence.perform();
// 
// window.setTimeout(function(){
	// var status = timedActionSequence.cancel();
	// alert("cancel status: "+status);
// },3500);

// 
// function what(){
	// for (var a = 1;a<=3;a+=1){
		// var b = a;
		// window.setTimeout(function(){
			// alert(b);
		// },1000);
	// }
// }
// 
// what();


		//var b = a;
		//window.setTimeout(function(){
		//	alert(b);
		//},1);


// 
// 
// function alertLater(x){
	// window.setTimeout(function(){
		// alert(x);
	// },1000);
// }

//what();


//var timedAction = new $arepa.TimedAction(function(b,a){alert(b);},5000,function(b,a){alert(a);});
//timedAction.perform("this happens before","this happens after");
//window.setTimeout(function(){alert(timedAction.isItDone());},2500);
//window.setTimeout(function(){alert(timedAction.isItDone());},10000);


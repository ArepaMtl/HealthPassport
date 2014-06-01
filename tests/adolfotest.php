<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style type="text/css">
			body{height:2000px;}
			body,ul,li{margin:0px;padding:0px}
			li{position:relative;background-color:red;color:white;height:30px}
			li:nth-child(odd) {background: blue;}
			a{color:inherit;position:relative;height:100%;display:block}
			.hidden{display:none;}
			li>div{position:absolute;top:0px;left:0px;width:100%;height:100%}
			.lidiv{position:absolute;background-color:yellow;overflow:hidden;}
			.animated{-webkit-transition: max-height 1s linear;
						transition: max-height 1s linear;max-height:3000}
			.fixed-test
			{
				position:fixed;
				top:0px;
				left:0px;
				width:100%;
				height:300px;
				background:orange;
			}
		</style>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("ul>li>div>a").click(function(){
				
					$('html, body').animate({
						scrollTop: $(this.parentNode).offset().top
					},200);
				
					return;
				    var parent = this.parentNode;
					//alert(parent.parentNode.tagName);
				    if (parent.parentNode.tagName != "LI" && parent.parentNode.tagName != "li"){
				    	//$(parent).css("height","100%");
				    	return;
				    }
					var offset = $(parent).offset();
					var height = $(parent).outerHeight();
					parent.parentNode.removeChild(parent);
					$(parent).css("top",offset.top);
					$(parent).css("left",offset.left);
					$(parent).css("width","100%");
					$(parent).css("height",height);
					$("body").append($(parent));
					$(parent).addClass("lidiv");
					$(parent).addClass("animated");
					//$(parent).css("height","100%");
					var myVar = setInterval(function(){$(parent).css("height","100%");clearInterval(myVar)},1000);
				});
			});
		</script>
	</head>
	<body>
		Text at the top.
		<ul>
			<li><div><a>hello1</a>
				<div class="hidden">some content 1</div>
			</div></li>
			<li><div><a>hello2</a>
				<div class="hidden">some content 2</div>
			</div></li>
			<li><div><a>hello3</a>
				<div class="hidden">some content 3</div>
			</div></li>
			<li><div><a>hello3</a>
				<div class="hidden">some content 3</div>
			</div></li>
			<li><div><a>hello3</a>
				<div class="hidden">some content 3</div>
			</div></li>
			<li><div><a>hello3</a>
				<div class="hidden">some content 3</div>
			</div></li>
		</ul>
		<div class="fixed-test">fixed test</div>
	</body>
</html>
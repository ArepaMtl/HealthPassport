<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style type="text/css">
			body,ul,li{margin:0px;padding:0px}
			li{position:relative;background-color:red;color:white;height:30px}
			li:nth-child(odd) {background: blue;}
			a{color:inherit;}
			.section-content{display:none;}
			li>div{position:absolute;top:0px;left:0px;width:100%;height:100%}
		</style>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("ul>li>div>a").click(function(){
					$(this.parentNode).find("div").each(function(){
						alert(this);
					});
				});
			});
		</script>
	</head>
	<body>
		Text at the top.
		<ul>
			<li><div><a href="#">hello1</a>
				<div class="section-content">some content 1</div>
			</div></li>
			<li><div><a href="#">hello2</a>
				<div class="section-content">some content 2</div>
			</div></li>
			<li><div><a href="#">hello3</a>
				<div class="section-content">some content 3</div>
			</div></li>
			<li><div><a href="#">hello3</a>
				<div class="section-content">some content 3</div>
			</div></li>
			<li><div><a href="#">hello3</a>
				<div class="section-content">some content 3</div>
			</div></li>
			<li><div><a href="#">hello3</a>
				<div class="section-content">some content 3</div>
			</div></li>
		</ul>
	</body>
</html>
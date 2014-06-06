<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="../css/arepa.css">
		<style type="text/css">
			body,ul,li{margin:0px;padding:0px}
			li{position:relative;display:block;background-color:red;color:white;}
			li:nth-child(odd) {background-color: blue;}
			a{color:inherit;}
			.hidden{display:none;}
		</style>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="../javascript/arepa.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("ul>li>div>a").click(function(){
					$arepa.maximizeElement(this.parentNode);
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
			<li><div><a>hello4</a>
				<div class="hidden">some content 4</div>
			</div></li>
			<li><div><a>hello5</a>
				<div class="hidden">some content 5</div>
			</div></li>
			<li><div><a>hello6</a>
				<div class="hidden">some content 6</div>
			</div></li>
			<li><div><a>hello7</a>
				<div class="hidden">some content 7</div>
			</div></li>
			<li><div><a>hello8</a>
				<div class="hidden">some content 8</div>
			</div></li>
			<li><div><a>hello9</a>
				<div class="hidden">some content 9</div>
			</div></li>
			<li><div><a>hello10</a>
				<div class="hidden">some content 10</div>
			</div></li>
			<li><div><a>hello11</a>
				<div class="hidden">some content 11</div>
			</div></li>
			<li><div><a>hello12</a>
				<div class="hidden">some content 12</div>
			</div></li>
			<li><div><a>hello13</a>
				<div class="hidden">some content 13</div>
			</div></li>
			<li><div><a>hello14</a>
				<div class="hidden">some content 14</div>
			</div></li>
			<li><div><a>hello15</a>
				<div class="hidden">some content 15</div>
			</div></li>
		</ul>
	</body>
</html>
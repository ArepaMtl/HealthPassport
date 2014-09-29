<!DOCTYPE html>
<html>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
		<title>
			Health Passport
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" media="screen and (max-height: 600px)" href="css/style_small_height.css">
	
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){	
				$("#informationicon").click(function(event){
					event.preventDefault();
					$("#main-menu-info").css("display","block");
				});
				
				$(".info-popup > div > a:last-child").click(function(event){
					event.preventDefault();
					$("#main-menu-info").css("display","none");
				});
			});
		</script>
	
	</head>
	<body>
	<div class="top-bar">
		<h1 data-localize="menu.title" class='centered'> Health Passport </h1> 
		<a href="" id="informationicon"> </a>
	</div>
	<div id="main-icon">
	</div>
		<ul id="menu">
			<li class="item"> <a href="history.php" data-localize="medicalhistory.link"><div class="item-text"><div>Your History</div><div>Ant&eacute;c&eacute;dents m&eacute;dicaux</div></div></a>  <div class="noclick lefticon" href="" id="menuyourhistory_icon"> </div> </li>
			<li class="item"> <a href="lexicon.php" data-localize="medicallexicon.link"><div class="item-text"><div>Lexicon</div><div>Lexique</div></div></a>  <div class="noclick lefticon" href="" id="menuyourlexicon_icon"> </div></li>
			<li class="item"> <a href="information.php" data-localize="information.link"><div class="item-text"><div>Information</div><div>Information</div></div></a> <div class="noclick lefticon" href="" id="menuquestion_icon"> </div></li>
		</ul>
		
		<div id="main-menu-info" class="info-popup">
			<div>
				<div>
				This app is meant as a guide to make it easier for an English-speaking
				person to communicate with French-speaking health professionals. It does not replace a professional medical opinion in any way.
				</div>
				<a href=""></a>
			</div>
		</div>
	</body>
</html>
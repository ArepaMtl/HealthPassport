<!DOCTYPE html>
<html>
	<head>
		<title>
			Health Passport Web App - History
		</title>
		<link rel="stylesheet" type="text/css" href="css/arepa.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="javascript/arepa.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$(".item>a:first-child").click(function(event){
					event.preventDefault();
				});
			});
		</script>
		
		<!--<style type="text/css">
		
			@font-face {
 				font-family: FranchiseBold;
				src: url(fonts/Franchise-Bold.woff);
				font-weight: bold;
			}
		
			body,ul,li,h1{border:0;margin:0;padding:0;font-family:FranchiseBold}
			#top-bar{height:64px;box-shadow:0 3px 0.4em rgba(0,0,0,0.5);background-color:white;position:relative}
			#back-button{position:absolute;left:19px;top:50%;width:12px;height:21px;background:url('back-arrow.png');
			background-size:100% 100%;margin-top:-10px;}
			h1{position:absolute;top:50%;left:50%;
			-ms-transform: translate(-50%,-50%);
			-webkit-transform: translate(-50%,-50%);
			transform: translate(-50%,-50%);
			font-size: 28pt;color:rgb(83,83,83)}
			li{position:relative;display:block;margin-top:10px}
			/*TODO: IT DID NOT WORK WHEN I ADDED POSITION RELATIVE HERE */
			.item{background-color:white}
			.item>a{text-decoration:none;display:block;position:relative;height:64px;line-height:64px;
			text-align:center;color:white;background-color:rgb(80,197,234);box-shadow:0 3px 0.4em rgba(0,0,0,0.5);
			font-size:20pt;color:rgb(83,83,83);color:white;font-weight:normal}
		</style>
		
		
		<script type="text/javascript">
			$(document).ready(function(){
				$(".item>a").click(function(event){
					event.preventDefault();
					$arepa.maximizeElement(this.parentNode);
				});
			});
		</script>-->
	</head>
	<body>
	 
	<div class="top-bar">
		<h1 data-localize="yourhistory.title" class='centered'> Your history </h1> 
		<a href="index.php" id="back-button"> </a>
		<a href="" id="printericon"> </a>
		<!--<div id="button"> <a href="" data-localize="history.print"> Print</a> </div>-->
	</div>
	<ul id="menuyourhistory">
		<li class="item"><a href="personal_information.php">  <div class="loader personalinfo_loader">  </div><div class='item-text submenu-text'><div>Personal information</div><div>Information personnel</div></div> <div class="below-button noclick"> </div></a> </li>
		<li class="item"><a href="allergies.php">  <div class="loader allergies_loader">  </div><div class='item-text submenu-text'><div>Allergies</div><div>Allergies</div></div> <div class="below-button noclick"> </div></a> </li>
		<li class="item"><a href="current_medication.php">  <div class="loader current_medication_loader">  </div><div class='item-text submenu-text'><div>Current medication</div><div>M&eacute;dication</div></div> <div class="below-button noclick"> </div></a> </li>
		<li class="item"><a href="current_diagnosis.php"> <div class="loader current_diagnosis_loader">  </div><div class='item-text submenu-text'><div>Current diagnosis</div><div>Diagnostic Connu</div></div> <div class="below-button noclick"> </div></a> </li>
		<li class="item"><a href="medical_history.php"> <div class="loader medical_history_loader">  </div><div class='item-text submenu-text'><div>Medical history</div><div>M&eacute;dicaux</div></div> <div class="below-button noclick"> </div></a> </li>
		<li class="item"><a href="surgical.php"> <div class="loader surgical_loader">  </div><div class='item-text submenu-text'><div>Surgical</div><div>Chirurgicaux</div></div> <div class="below-button noclick"> </div></a> </li>
		<li class="item"><a href="living_habits.php"> <div class="loader living_habits_loader">  </div><div class='item-text submenu-text'><div>Living Habits</div><div>Habitudes de vie</div></div> <div class="below-button noclick"> </div></a> </li>
	</ul>
	</body>
</html>
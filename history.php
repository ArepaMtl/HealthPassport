<!DOCTYPE html>
<html>
	<head>
		<title>
			Health Passport Web App - History
		</title>
		<link rel="stylesheet" type="text/css" href="css/stylejune13.css">
		<script type="text/javascript" src="javascript/arepa.js"></script>
		<style type="text/css">
			body,ul,li,h1{border:0;margin:0;padding:0}
			#top-bar{height:64px;box-shadow:0 0 1em;background-color:white;position:relative}
			#back-button{position:absolute;left:19px;top:50%;width:12px;height:21px;background:url('back-arrow.png');
			background-size:100% 100%;margin-top:-10px;}
			h1{position:absolute;top:50%;left:50%;
			-ms-transform: translate(-50%,-50%);
			-webkit-transform: translate(-50%,-50%);
			transform: translate(-50%,-50%);}
		</style>
		<script type="text/javascript">
			$(document).load(){function(){
				
			}};
		</script>
	</head>
	<body>
	 
	<div id="top-bar">
		<h1 data-localize="yourhistory.title"> Your history </h1> 
		<a href="index.php" data-localize="history.back" id="back-button"></a>
		<!--<div id="button"> <a href="" data-localize="history.print"> Print</a> </div>-->
	</div>
	<ul id="menu">
		<li><div><a href="personal_information.php" data-localize="personalinformation.link"> Personal information</a></div></li>
		<li><div><a href="allergies.php" data-localize="allergies.link"> Allergies</a></div></li>
		<li><div><a href="current_medication.php" data-localize="currentmedication.link"> Current Medication</a></div></li>
		<li><div><a href="current_diagnosis.php" data-localize="currentdiagnosis.link"> Current diagnosis </a></div></li>
		<li><div><a href="medical_history.php" data-localize="medicalhistory.link"> Medical History </a></div></li>
		<li><div><a href="surgical.php" data-localize="surgical.link"> Surgical</a></div></li>
		<li><div><a href="living_habits.php" data-localize="livinghabits.link"> Living Habits</a></div></li>
	</ul>
	</body>
</html>
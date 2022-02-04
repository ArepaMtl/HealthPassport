<?php

$calledDirectly = ( basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"]) );

if ($calledDirectly){

?>

<!DOCTYPE html>
<html>
	<head>
		<title>
			Health Passport Web App - Medical History
		</title>
		<!--Google Fonts-->	
	<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	<div class="top-bar medical_history_loader">
		<h1 data-localize="medicalhistory.title" class='centered'> Medical history/M&eacute;dicaux </h1>
		<a href="history.php" id="back-button"></a>
	</div>	

<?php

}

?>
		
		
   <div class="white-box-history" id="medical-box" data-num-copies="1">
     	<div class="left-box-title" data-localize="example.medicalhistory">Such as high blood pressure, diabetes, heart disease, asthma/ Tels que l'hypertension, diab&egrave;te, asthme.:</div>
     	<div class="left-box-title" data-localize="condition.physicalactivity">Condition:</div><div class="side-right-box-container"><input type="text" name="checkListItem" class="side-box-input" data-history-id="medical-condition"/>  <a href="" data-localize="trashbutton" class="trashbutton" data-erasable-level="2"> </a> </div> 
     	<div class="left-box-title" data-localize="date.physicalactivity">Date:</div><div class="side-right-box-container"><input type="text" name="checkListItem" class="side-box-input" data-history-id="medical-date"/> </div> 
     </div>
    <div class="white-box medical_history_loader"><a href="" class="plusbutton" data-copiable-item-id="medical-box"> </a></div>
    
    
<?php

if ($calledDirectly){

?>
    
	</body>
</html>

<?php

}

?>
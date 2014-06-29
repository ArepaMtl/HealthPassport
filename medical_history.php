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
		
		<div class="white_box">
			<p data-localize="example.medicalhistory">Such as high blood pressure, diabetes, heart disease, asthma/ Tels que l’hypertension, diabète, asthme.</p>
	 		<p><span data-localize="condition.physicalactivity">Condition:</span> <input type="text" name="checkListItem" class="box_input"/> <a href="" data-localize="trashbutton" id="trashbutton"></a></p> 
     		<p><span data-localize="date.physicalactivity">Date:</span> <input type="text" name="checkListItem" class="box_input"/> </p> 
     	</div>
    <div class="medical_history_loader"><a href="" id="plusbutton"> </a></div>
    
    
<?php

if ($calledDirectly){

?>
    
	</body>
</html>

<?php

}

?>
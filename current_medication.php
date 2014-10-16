<?php

$calledDirectly = ( basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"]) );

if ($calledDirectly){

?>


<!DOCTYPE html>
<html>
	<head>
		<title>
			Health Passport Web App - Current Medication
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	<div class="top-bar current_medication_loader">
		<h1 data-localize="currentmedication.title" class='centered' > Current Medication/Medicaments acutuels </h1>
		<a href="history.php" id="back-button"></a>
	</div>
	
<?php

}

?>
	
	<div class="white-box-history" id="medication-box" data-num-copies="1">
     	<div class="left-box-title" data-localize="currentmedication.name">Name / Nom:</div><div class="side-right-box-container"><input type="text" name="checkListItem" class="side-box-input" data-history-id="medication-name"/>  <a href="" data-localize="trashbutton" class="trashbutton" data-erasable-level="2"> </a> </div> 
     	<div class="left-box-title" data-localize="currentmedication.dosage">Dosage / Posologie:</div><div class="side-right-box-container"><input type="text" name="checkListItem" class="side-box-input" data-history-id="medication-dosage"/> </div> 
     </div>
    <div class="white-box current_medication_loader"><a href="" class="plusbutton" data-copiable-item-id="medication-box"> </a></div>
    
<?php

if ($calledDirectly){

?>
    
	</body>
</html>

<?php

}

?>
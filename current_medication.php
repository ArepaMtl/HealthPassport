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
		<h1 data-localize="currentmedication.title" class='centered' > Current Medication/M&eacute;dication </h1>
		<a href="history.php" id="back-button"></a>
	</div>
	
<?php

}

?>
	
	<div class="white-box-history">
     	<div class="left-box-title" data-localize="currentmedication.name">Name / Nom:</div><div class="side-right-box-container"><input type="text" name="checkListItem" class="side-box-input"/>  <a href="" data-localize="trashbutton" class="trashbutton"> </a> </div> 
     	<div class="left-box-title" data-localize="currentmedication.dosage">Dosage:</div><div class="side-right-box-container"><input type="text" name="checkListItem" class="side-box-input"/> </div> 
     </div>
    <div class="white-box current_medication_loader"><a href="" class="plusbutton"> </a></div>
    
<?php

if ($calledDirectly){

?>
    
	</body>
</html>

<?php

}

?>
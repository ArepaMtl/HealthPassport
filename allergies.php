<?php

$calledDirectly = ( basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"]) );

if ($calledDirectly){

?>


<!DOCTYPE html>
<html>
	<head>
		<title>
			Health Passport Web App - Allergies
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	<div class="top-bar allergies_loader">
		<h1 data-localize="allergies.tittle" class='centered'> Allergies </h1>
		<a href="history.php" id="back-button"></a>
	</div>
	
<?php

}

?>
	
			 	<div class="white-box-history" id="allergies-box" data-num-copies="1">
					<div class="left-box-title" data-localize="allergies.paragraph"> Name / Nom:</div><div class="side-right-box-container"><input type="text" name="checkListItem" class="side-box-input" data-history-id="allergy"/> <a href="" class="trashbutton" data-erasable-level="2"> </a></div>
				</div>
			 <div class="white-box allergies_loader"><a href="" class="plusbutton" data-copiable-item-id="allergies-box"> </a></div>
			 
<?php

if ($calledDirectly){

?>
	</body>
</html>

<?php

}

?>
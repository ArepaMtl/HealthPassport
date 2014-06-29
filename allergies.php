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
	
			 	<div class="white-box-history">
					<div class="left-box-title" data-localize="allergies.paragraph"> Name / Nom:</div><div class="side-right-box-container"><input type="text" name="checkListItem" class="side-box-input"/> <a href="" class="trashbutton"> </a></div>
				</div>
			 <div class="white-box allergies_loader"><a href="" class="plusbutton"> </a></div>
			 
<?php

if ($calledDirectly){

?>
	</body>
</html>

<?php

}

?>
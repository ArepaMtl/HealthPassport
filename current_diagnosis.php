<?php

$calledDirectly = ( basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"]) );

if ($calledDirectly){

?>


<!DOCTYPE html>
<html>
	<head>
		<title>
			Health Passport Web App - Current Diagnosis
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	<div class="top-bar current_diagnosis_loader">
		<h1 data-localize="currentdiagnosis.title" class='centered'> Current diagnosis/Diagnostic connu </h1>
		<a href="history.php" id="back-button"></a>
	</div>

<?php

}

?>

	<!--<div class="white_box">
		<p> <span data-localize="currentdiagnosis.question"> Conditions you are being treated for/ Conditions médicales pour lesquelles vous êtres traités.</span> <input type="text" name="checkListItem" class="box_input"/> <a href="" data-localize="trashbutton" id="trashbutton"> </a> </p>
    </div>
	<div class="current_diagnosis_loader"><a href="" id="plusbutton"> </a></div>-->
	
	<div class="white-box-history">
					<div class="left-box-title" data-localize="allergies.paragraph"> Conditions you are being treated for / Conditions m&eacute;dicales pour lesquelles vous êtres traités:</div><div class="side-right-box-container"><input type="text" name="checkListItem" class="side-box-input"/> <a href="" class="trashbutton"> </a></div> 
				</div>
			 <div class="white-box current_diagnosis_loader"><a href="" class="plusbutton"> </a></div>

<?php

if ($calledDirectly){

?>

	</body>
</html>

<?php

}

?>
<?php

$calledDirectly = ( basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"]) );

if ($calledDirectly){

?>

<!DOCTYPE html>
<html>
	<head>
		<title>
			Health Passport Web App - Medical Contacts
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	<div class="top-bar medical_contacts_loader">
		<h1 data-localize="medicalcontacts.title" class='centered'>Medical Contacts/Contacts m&eacute;dicaux </h1>
		<a href="history.php" id="back-button"></a>
	</div>
	
	
<?php

}

?>
	
			 	<div class="white-box-history" id="medcontacts-box" data-num-copies="1">
					<div class="left-box-title" data-localize="medicalcontactstype.paragraph"> Type / Type:</div>
					<div class="side-right-box-container"> 
					<select class="side-box-input" name="checkListItem" data-history-id="medcontacts-type" data-has-dependent-siblings="true">
							<option value="" data-dependent-sibling-ids="specify-title,specify-box">Other</option>
  							<option value="Specialist" data-dependent-sibling-ids="speciality-title,speciality-box">Specialist</option>
  							<option value="Pharmacist" >Pharmacist</option>
  							<option value="Family Doctor">Family Doctor</option>
					</select> <a href="" class="trashbutton" data-erasable-level="2"> </a></div>
					<div class="left-box-title" data-localize="medicalcontactsname.paragraph" data-sibling-id="speciality-title"> Speciality:</div><div class="side-right-box-container" data-sibling-id="speciality-box"><input type="text" name="checkListItem" class="side-box-input" data-history-id="medcontacts-speciality"/> </div>
					<div data-sibling-id="specify-title" class="left-box-title" data-localize="medicalcontactsname.paragraph"> Specify:</div><div  data-sibling-id="specify-box" class="side-right-box-container"><input type="text" name="checkListItem" class="side-box-input" data-history-id="medcontacts-specify"/> </div>
					<div class="left-box-title" data-localize="medicalcontactsname.paragraph"> Name / Nom:</div><div class="side-right-box-container"><input type="text" name="checkListItem" class="side-box-input" data-history-id="medcontacts-name"/> </div>
					<div class="left-box-title" data-localize="medicalcontactstelf.paragraph"> Telephone / T&eacute;l&eacute;phone:</div><div class="side-right-box-container"><input type="text" name="checkListItem" class="side-box-input" data-history-id="medcontacts-tel"/></div>
				</div>
			 <div class="white-box medical_contacts_loader"><a href="" class="plusbutton" data-copiable-item-id="medcontacts-box"> </a></div>
			 
<?php

if ($calledDirectly){

?>
	</body>
</html>

<?php

}

?>
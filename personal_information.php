
<?php

$calledDirectly = ( basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"]) );

if ($calledDirectly){

?>

<!DOCTYPE html>
<html>
	<head>
		<title>
			Health Passport Web App - Personal information
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	<div class="top-bar personalinfo_loader">
		<h1 data-localize="personalinformation.title" class='centered'> Personal Information </h1>
		<a href="history.php" id="back-button"></a>
	</div>
	<div class="information">
		
<?php

}

?>
		
			<div class="white-box-history">
					<p class="text-container" data-localize="belongs.personalinformation">This health passport belongs to / Ce passeport sant&eacute; appartient &agrave;: </p> 
					<div class="box-input-container"><input type="text" name="checkListItem" class="box-input"/></div>
			</div>

			<div class="white-box-history">
     			<h3 data-localize="firstpersontonotify.personalinformation"> First person to notify / Personne &agrave; contacter en premier lieu</h3>
     				<div class="left-box-title" data-localize="language.secondpersontonotify">Language / langue parl&eacute;e:</div><div class="right-box-container"><input type="text" name="checkListItem" class="box-input"/></div> 
     				<div class="left-box-title" data-localize="name.secondpersontonotify">Name / nom:</div><div class="right-box-container"><input type="text" name="checkListItem" class="box-input"/></div>
     				<div class="left-box-title" data-localize="phone.secondpersontonotify">Home phone / t&eacute;l&eacute;phone maison:</div><div class="right-box-container"><input type="text" name="checkListItem" class="box-input"/> </div>
     				<div class="left-box-title" data-localize="cellphone.secondpersontonotify">Cell / mobile:</div><div class="right-box-container"><input type="text" name="checkListItem" class="box-input"/> </div>
     				<div class="left-box-title" data-localize="email.secondpersontonotify">Email / courriel:</div><div class="right-box-container"><input type="text" name="checkListItem" class="box-input"/> </div>
     		
			</div>
			
			<div class="white-box-history">
     			<h3 data-localize="secondpersontonotify.personalinformation"> Second person to notify / Personne &agrave; contacter en deuxi&egrave;me lieu</h3>
     				<div class="left-box-title" data-localize="language.secondpersontonotify">Language / langue parl&eacute;e:</div><div class="right-box-container"><input type="text" name="checkListItem" class="box-input"/></div> 
     				<div class="left-box-title" data-localize="name.secondpersontonotify">Name / nom:</div><div class="right-box-container"><input type="text" name="checkListItem" class="box-input"/></div>
     				<div class="left-box-title" data-localize="phone.secondpersontonotify">Home phone / t&eacute;l&eacute;phone maison:</div><div class="right-box-container"><input type="text" name="checkListItem" class="box-input"/> </div>
     				<div class="left-box-title" data-localize="cellphone.secondpersontonotify">Cell / mobile:</div><div class="right-box-container"><input type="text" name="checkListItem" class="box-input"/> </div>
     				<div class="left-box-title" data-localize="email.secondpersontonotify">Email / courriel:</div><div class="right-box-container"><input type="text" name="checkListItem" class="box-input"/> </div>
     		
     		</div>
     		
     		<div class="white-box-history">

     			<h3 data-localize="other.personalinformation"> Other Information / Autres Informations:</h3>
     			 	<div class="left-box-title" data-localize="familydoctor.other">Family doctor / m&eacute;decin de famille:</div><div class="right-box-container"><input type="text" name="checkListItem" class="box-input"/> </div>
     			 	<div class="left-box-title" data-localize="nameaddress.other">Name and address of usual clinic / nom et adresse de votre clinique:</div><div class="right-box-container"><input type="text" name="checkListItem" class="box-input"/> </div>
     		
     		</div>
<?php

if ($calledDirectly){

?>
     		
     </div>
     <div class="footer personalinfo_loader"> </div>
	</body>
</html>

<?php

}

?>
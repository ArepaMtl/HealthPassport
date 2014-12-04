
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
					<div class="box-input-container"><input type="text" name="checkListItem" class="box-input" data-loader="loader-personal" data-loader-id="name" data-history-id="user-name"/></div>
					<div class="left-box-title" data-localize="bloodtype.paragraph"> Blood type / Groupe sanguin :</div>
					<div class="box-input-container"> 
					<select class="box-input" name="checkListItem" data-loader="loader-personal" data-loader-id="bloodtype" data-history-id="user-bloodtype">
							<option value=""> </option>
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							<option value="B-">B-</option>
							<option value="AB+">AB+</option>
							<option value="AB-">AB-</option>
							<option value="O+">O+</option>
							<option value="O-">O-</option>
							<option value="None">Prefer not to say / Pr&eacute;f&egrave;rent pas &agrave; dire</option>
					</select> </div>
			</div>

			<div class="white-box-history">
     			<h3 data-localize="firstpersontonotify.personalinformation"> Contact in case of emergency / Le contact en cas d'urgence</h3>
     				<div class="left-box-title" data-localize="name.secondpersontonotify">Name / nom:</div><div class="right-box-container"><input type="text" name="checkListItem" class="box-input" data-loader="loader-personal" data-loader-id="first-person" data-history-id="first-person-name"/></div>
     				<div class="left-box-title" data-localize="language.secondpersontonotify">Language / langue parl&eacute;e:</div><div class="right-box-container"><input type="text" name="checkListItem" class="box-input" data-loader="loader-personal" data-loader-id="first-person" data-history-id="first-person-lang"/></div> 
     				<div class="left-box-title" data-localize="phone.secondpersontonotify">Home phone / t&eacute;l&eacute;phone maison:</div><div class="right-box-container"><input type="text" name="checkListItem" class="box-input" data-loader="loader-personal" data-loader-id="first-person" data-history-id="first-person-phone"/> </div>
     				<div class="left-box-title" data-localize="cellphone.secondpersontonotify">Cell phone / Phone cellulaire:</div><div class="right-box-container"><input type="text" name="checkListItem" class="box-input" data-loader="loader-personal" data-loader-id="first-person" data-history-id="first-person-cell"/> </div>
     				<div class="left-box-title" data-localize="email.secondpersontonotify">Email / courriel:</div><div class="right-box-container"><input type="text" name="checkListItem" class="box-input" data-loader="loader-personal" data-loader-id="first-person" data-history-id="first-person-email"/> </div>
     		
			</div>
			
			<div class="white-box-history">
     			<h3 data-localize="secondpersontonotify.personalinformation"> Second person to notify / Personne &agrave; contacter en deuxi&egrave;me lieu</h3>
     				<div class="left-box-title" data-localize="name.secondpersontonotify">Name / nom:</div><div class="right-box-container"><input type="text" name="checkListItem" class="box-input" data-loader="loader-personal" data-loader-id="second-person" data-history-id="second-person-name"/></div>
     				<div class="left-box-title" data-localize="language.secondpersontonotify">Language / langue parl&eacute;e:</div><div class="right-box-container"><input type="text" name="checkListItem" class="box-input" data-loader="loader-personal" data-loader-id="second-person" data-history-id="second-person-lang"/></div> 
     				<div class="left-box-title" data-localize="phone.secondpersontonotify">Home phone / t&eacute;l&eacute;phone maison:</div><div class="right-box-container"><input type="text" name="checkListItem" class="box-input" data-loader="loader-personal" data-loader-id="second-person" data-history-id="second-person-phone"/> </div>
     				<div class="left-box-title" data-localize="cellphone.secondpersontonotify">Cell / mobile:</div><div class="right-box-container"><input type="text" name="checkListItem" class="box-input" data-loader="loader-personal" data-loader-id="second-person" data-history-id="second-person-cell"/> </div>
     				<div class="left-box-title" data-localize="email.secondpersontonotify">Email / courriel:</div><div class="right-box-container"><input type="text" name="checkListItem" class="box-input" data-loader="loader-personal" data-loader-id="second-person" data-history-id="second-person-email"/> </div>
     		
     		</div>
     		
     		<div class="white-box-history">

     			<h3 data-localize="other.personalinformation"> Other information / Autres informations:</h3>
     			 	<div class="left-box-title" data-localize="familydoctor.other">Family doctor / m&eacute;decin de famille:</div><div class="right-box-container"><input type="text" name="checkListItem" class="box-input" data-loader="loader-personal" data-loader-id="other-info" data-history-id="family-doctor"/> </div>
     			 	<div class="left-box-title" data-localize="nameaddress.other">Name and address of usual clinic / nom et adresse de votre clinique:</div><div class="right-box-container"><input type="text" name="checkListItem" class="box-input" data-loader="loader-personal" data-loader-id="other-info" data-history-id="usual-clinic"/> </div>
     		
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
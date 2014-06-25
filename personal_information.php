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
			<div class="white_box">
					<p data-localize="belongs.personalinformation">This health passport belongs to/ce passeport sant&eacute; appartient &agrave;: </p> 
					<p><input type="text" name="checkListItem" class="box_input"/> </p><br>
			</div>
			<div class="white_box">
     			<h3 data-localize="firstpersontonotify.personalinformation"> First person to notify/Personne &agrave; contacter en premier lieu</h3>
     				<p><span data-localize="language.personalinformation">Language/langue parl&eacute;e:</span> <input type="text" name="checkListItem" class="box_input"/> </p> 
     				<p><span data-localize="name.firstpersontonotify">Name/nom:</span><input type="text" name="checkListItem" class="box_input"/> </p>
     				<p><span data-localize="phone.firstpersontonotify">Home phone/t&eacute;l&eacute;phone maison:</span> <input type="text" name="checkListItem" class="box_input"/> </p>
     				<p><span data-localize="cellphone.firstpersontonotify">Cell/mobile:</span> <input type="text" name="checkListItem" class="box_input"/> </p>
     				<p><span data-localize="email.firstpersontonotify">Email/courriel:</span> <input type="text" name="checkListItem" class="box_input"/> </p> <br>
     		</div>
     		<div class="white_box">
     			<h3 data-localize="secondpersontonotify.personalinformation"> Second person to notify/Personne &agrave; contacter en deuxi&egrave;me lieu</h3>
     				<p><span data-localize="language.secondpersontonotify">Language/langue parl&eacute;e:</span> <input type="text" name="checkListItem"class="box_input"/> </p> 
     				<p><span data-localize="name.secondpersontonotify">Name/nom:</span> <input type="text" name="checkListItem" class="box_input"/> </p>
     				<p><span data-localize="phone.secondpersontonotify">Home phone/t&eacute;l&eacute;phone maison:</span> <input type="text" name="checkListItem" class="box_input"/> </p>
     				<p><span data-localize="cellphone.secondpersontonotify">Cell/mobile:</span> <input type="text" name="checkListItem" class="box_input"/> </p>
     				<p><span data-localize="email.secondpersontonotify">Email/courriel:</span> <input type="text" name="checkListItem" class="box_input"/> </p> <br>
     		</div>
     		<div class="white_box">
     			<h3 data-localize="other.personalinformation"> Other Information/Autres Informations:</h3>
     			 	<p><span data-localize="familydoctor.other">Family doctor/m&eacute;decin de famille:</span> <input type="text" name="checkListItem" class="box_input"/> </p>
     			 	<p><span data-localize="nameaddress.other">Name and address of usual clinic/nom et adresse de votre clinique:</span> <input type="text" name="checkListItem" class="box_input"/> </p><br>
     		</div>
     </div>
     <div class="footer personalinfo_loader"> </div>
	</body>
</html>
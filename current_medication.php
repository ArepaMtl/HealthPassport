<!DOCTYPE html>
<html>
	<head>
		<title>
			Health Passport Web App - Current Medication
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	<div id="top-bar">
		<h1 data-localize="currentmedication.title" class='centered' > Current Medication/M&eacute;dication </h1>
		<a href="history.php" id="back-button"></a>
	</div>
	
	<div class="information">
     	<p data-localize="currentmedication.name">name/nom: <input type="text" name="checkListItem"/> </p> 
     	<p data-localize="currentmedication.dosage">dosage: <input type="text" name="checkListItem"/> </p> 
    	<div class="buttoncircle" id="plusbutton"> <a href="" data-localize="plusbutton"> </a> </div>
     	<div class="buttoncircle" id="minusbutton"> <a href="" data-localize="minusbutton"> </a></div>
     </div>

	</body>
</html>
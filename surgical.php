<?php

$calledDirectly = ( basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"]) );

if ($calledDirectly){

?>

<!DOCTYPE html>
<html>
	<head>
		<title>
			Health Passport Web App - Surgical
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	<div class="top-bar surgical_loader">
		<h1 data-localize="surgical.title" class='centered'> Surgical/Chirurgicaux </h1>
		<a href="history.php" id="back-button"></a>
	</div>
	
<?php

}

?>
	
	<div class="white_box">
			<p><span data-localize="surgeries.surgical">surgeries/chirurgue:</span> <input type="text" name="checkListItem" class="box_input"/> </p> 
     		<p><span data-localize="sideeffects.surgical">side-effects/ s&eacute;quelles:</span> <input type="text" name="checkListItem" class="box_input"/><a href="" data-localize="trashbutton" id="trashbutton"></a> </p> 
     		<p><span data-localize="date.surgical">date:</span> <input type="text" name="checkListItem" class="box_input"/> </p>
     </div>
    <div class="surgical_loader"><a href="" id="plusbutton"> </a></div>
    
    
<?php

if ($calledDirectly){

?>
    
	</body>
</html>

<?php

}

?>
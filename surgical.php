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
   
   <div class="white-box-history" id="surgery-box" data-num-copies="1">
     	<div class="left-box-title" data-localize="surgeries.surgical">Surgeries / Chirurgue:</div><div class="side-right-box-container"><input type="text" name="checkListItem" class="side-box-input" data-history-id="surgery-name"/>  <a href="" data-localize="trashbutton" class="trashbutton" data-erasable-level="2"> </a> </div> 
     	<div class="left-box-title" data-localize="sideeffects.surgical">Side-effects / S&eacute;quelles:</div><div class="side-right-box-container"><input type="text" name="checkListItem" class="side-box-input" data-history-id="surgery-effect"/> </div>  
     	<div class="left-box-title" data-localize="date.surgical">Date:</div><div class="side-right-box-container"><input type="text" name="checkListItem" class="side-box-input" data-history-id="surgery-date"/> </div> 
     </div>
    <div class="white-box surgical_loader"><a href="" class="plusbutton" data-copiable-item-id="surgery-box"> </a></div>
    
    
<?php

if ($calledDirectly){

?>
    
	</body>
</html>

<?php

}

?>
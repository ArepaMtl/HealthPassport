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
		<!--Google Fonts-->	
	<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
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
     	<div class="left-box-title" data-localize="surgeries.surgical">Surgery / Chirurgie:</div><div class="side-right-box-container"><input type="text" name="checkListItem" class="side-box-input" data-history-id="surgery-name"/>  <a href="" data-localize="trashbutton" class="trashbutton" data-erasable-level="2"> </a> </div> 
     	<div class="left-box-title" data-localize="sideeffects.surgical">Side-effects / Effets secondaires:</div><div class="side-right-box-container"><input type="text" name="checkListItem" class="side-box-input" data-history-id="surgery-effect"/> </div>  
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
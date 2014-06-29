<?php

$calledDirectly = ( basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"]) );

if ($calledDirectly){

?>

<!DOCTYPE html>
<html>
	<head>
		<title>
			Health Passport Web App - Living Habits
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	<div class="top-bar living_habits_loader">
		<h1 data-localize="livinghabits.title" class='centered'>Living Habits/Habitudes de vie </h1>
		<a href="history.php" id="back-button"></a>
	</div>
	
<?php

}

?>

	<div class="white-box-history">
		<h3 data-localize="smoking.link"> Smoking / Femeur</h3>
		<div class="left-box-title extra-margin-bottom"><label><input type="radio" name="smoker" value="yes"/><div class="actual-radio"></div> Yes / Oui</label></div>
		<div class="left-box-title extra-margin-bottom"><label><input type="radio" name="smoker" value="no"/><div class="actual-radio"></div> No/Non</label></div>
		<div class="left-box-title extra-margin-bottom">How many cigarattes per day? / Combient de cigarettes par jour?</div>
		<div class="left-box-title extra-margin-bottom">
			<label><input type="radio" name="cigar" value="1_4"/><div class="actual-radio"></div> 1 - 4&nbsp;&nbsp;&nbsp;</label>
			<label class="second-label"><input type="radio" name="cigar" value="5_9"/><div class="actual-radio"></div> 5 - 9</label>
		</div>
		<div class="left-box-title extra-margin-bottom">
			<label><input type="radio" name="cigar" value="10_15"/><div class="actual-radio"></div> 10 - 15</label>
			<label class="second-label"><input type="radio" name="cigar" value="15"/><div class="actual-radio"></div> 15+</label>
		</div>
		<div class="left-box-title">Since / Depuis:</div><div class="right-box-container"><input type="text" name="checkListItem" class="box-input"/></div>
	</div>
	
	<div class="white-box-history">
		<h3 data-localize="alcohol.link"> Alcohol / Alcool</h3>
		<div class="left-box-title extra-margin-bottom"><label><input type="radio" name="smoker" value="yes"/><div class="actual-radio"></div> Yes / Oui</label></div>
		<div class="left-box-title extra-margin-bottom"><label><input type="radio" name="smoker" value="no"/><div class="actual-radio"></div> No/Non</label></div>
		<div class="left-box-title extra-margin-bottom">How many drinks per week? / Combient de verres par semaine?</div>
		<div class="left-box-title extra-margin-bottom">
			<label><input type="radio" name="drinks" value="1_4"/><div class="actual-radio"></div> 1 - 4&nbsp;&nbsp;&nbsp;</label>
			<label class="second-label"><input type="radio" name="drinks" value="5_9"/><div class="actual-radio"></div> 5 - 9</label>
		</div>
		<div class="left-box-title extra-margin-bottom">
			<label><input type="radio" name="drinks" value="10_15"/><div class="actual-radio"></div> 10 - 15</label>
			<label class="second-label"><input type="radio" name="drinks" value="15"/><div class="actual-radio"></div> 15+</label>
		</div>
		<div class="left-box-title">Since / Depuis:</div><div class="right-box-container"><input type="text" name="checkListItem" class="box-input"/></div>
	</div>
	
	<div class="white-box-history">
		<h3 data-localize="alcohol.link">Sleep</h3>
		<div class="left-box-title" data-localize="allergies.paragraph"> Number of hours per night / Nombre d'heures par nuit:</div><div class="side-right-box-container"><input type="text" name="checkListItem" class="side-box-input"/> <a href="" class="trashbutton"> </a></div>
	</div>
	
	<div class="white-box-history">
		<h3 data-localize="alcohol.link">Physical Activities / Activit&eacute;s Physiques</h3>
		<div class="left-box-title" data-localize="allergies.paragraph"> Activity / Activit&eacute;:</div><div class="side-right-box-container"><input type="text" name="checkListItem" class="side-box-input"/> <a href="" class="trashbutton"> </a></div>
	</div>
	
	<div class="white-box living_habits_loader"><a href="" class="plusbutton"> </a></div>

	<!--
		<ul id="menu">
			<li> <div class="item"> <a href=""><div id="smoking_color"><span  data-localize="smoking.link">Smoking/Femeur</span> </div></a><br>
			<ul id="menu">	
				 <div class="white_box">		
						<li> <p><input type="checkbox" data-localize="yes.smoking"> yes/oui </p>
							<p> <span  data-localize="question.smoking">How many cigarattes per day?/ Combient de cigarettes par jour?:</span>  					
							<input type="text" name="checkListItem" class="box_input"/> </p>
							<p> <span data-localize="since.smoking">since/depuis:</span> <input type="text" name="checkListItem" class="box_input"/></p>
						</li>
						<li> <p><input type="checkbox" data-localize="no.smoking"> no/non</p> </li>
					 </div>	
			</ul>
			</div></li>
			<li> <div class="item">  <a href=""> <div id="alcohol_color"><span data-localize="alcohol.link">Alcohol/Alcool</span></div> </a> 
				<ul id="menu">
					<div class="white_box">
						<li> <p><input type="checkbox" data-localize="yes.alcohol"> yes/oui </p>
							<p><span data-localize="question.alcohol">How many drinks per week?/ Combient de verres par semaine?:</span>  					
							<input type="text" name="checkListItem" class="box_input"/></p>
							<p><span data-localize="since.alcohol"> since/depuis:</span> <input type="text" name="checkListItem" class="box_input"/></p>
						</li>
						<li> <p> <input type="checkbox" data-localize="no.alcohol"> no/non </p></li>
					</div>
				</ul>	
			</div></li>
		<li> <div class="item">  <a href=""><div class="physical_color"> <span  data-localize="physicalactivities.link">Physical Activities/Activit&eacute;s Physiques</span></div> </a>
				<div class="white_box">
					<p data-localize="example.physicalativity">Such as walking, running, swimming/ Marche, course, natation.</p>
					<p><span data-localize="activity.physicalativity"> Activity/Activit&eacute;:</span> <input type="text" name="checkListItem" class="box_input"/></p>
				</div>
			</div>
  				<div class="physical_color"><a href="" id="plusbutton"> </a></div>
		</li>
		<li> <div class="item">  <a href=""><div id="sleep_color"> <span  data-localize="sleep.link">Sleep </span></div> </a>
			<div class="white_box">
				<p ><span data-localize="numberhours.sleep">Number of hours per night /Nombre d'heures par nuit:</span> <input type="text" name="checkListItem" class="box_input"/></p>
			</div>
		</div></li>
	</ul>
	
     <div class="footer" class="living_habits_loader"> </div>
     
    -->
     
     
<?php

if ($calledDirectly){

?>
     
	</body>
</html>

<?php

}

?>
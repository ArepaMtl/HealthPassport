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
		<!--Google Fonts-->	
	<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
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
		<h3 data-localize="smoking.link"> Smoking / Fumeur</h3>
		<div class="left-box-title extra-margin-bottom"><label><input type="radio" name="smoker" value="yes" id="cigs-yes" data-dependants="many-cigs,many-cigs-1,many-cigs-2,many-cigs-since,many-cigs-since-box" data-loader="loader-habits" data-loader-id="is-smoker" data-history-id="smoker-yes"/><div class="actual-radio"></div> Yes / Oui</label></div>
		<div class="left-box-title extra-margin-bottom"><label><input type="radio" name="smoker" value="no" data-other-radios="cigs-yes" data-loader="loader-habits" data-loader-id="is-smoker" data-history-id="smoker-no"/><div class="actual-radio"></div> No/Non</label></div>
		<div class="left-box-title extra-margin-bottom" id="many-cigs">How many cigarattes per day? / Combien de cigarettes par jour?</div>
		<div class="left-box-title extra-margin-bottom" id="many-cigs-1">
			<label><input type="radio" name="cigar" value="1_4" data-loader="loader-habits" data-loader-id="cigs-num_IF_cigs-yes" data-history-id="cigs-1"/><div class="actual-radio"></div> 1 - 4&nbsp;&nbsp;&nbsp;</label>
			<label class="second-label"><input type="radio" name="cigar" value="5_9" data-loader="loader-habits" data-loader-id="cigs-num_IF_cigs-yes" data-history-id="cigs-2"/><div class="actual-radio"></div> 5 - 9</label>
		</div>
		<div class="left-box-title extra-margin-bottom" id="many-cigs-2">
			<label><input type="radio" name="cigar" value="10_15" data-loader="loader-habits" data-loader-id="cigs-num_IF_cigs-yes" data-history-id="cigs-3"/><div class="actual-radio"></div> 10 - 15</label>
			<label class="second-label"><input type="radio" name="cigar" value="15" data-loader="loader-habits" data-loader-id="cigs-num_IF_cigs-yes" data-history-id="cigs-4"/><div class="actual-radio"></div> 15+</label>
		</div>
		<div class="left-box-title" id="many-cigs-since">Since when / Depuis combien de temps:</div><div class="right-box-container" id="many-cigs-since-box"><input type="text" name="checkListItem" class="box-input" data-history-id="cigs-since"/></div>
	</div>
	
	<div class="white-box-history">
		<h3 data-localize="alcohol.link"> Alcohol / Alcool</h3>
		<div class="left-box-title extra-margin-bottom"><label><input type="radio" name="drinker" value="yes" id="drinks-yes" data-dependants="many-drinks,many-drinks-1,many-drinks-2,many-drinks-since,many-drinks-since-box" data-loader="loader-habits" data-loader-id="is-drinker" data-history-id="drinker-yes"/><div class="actual-radio"></div> Yes / Oui</label></div>
		<div class="left-box-title extra-margin-bottom"><label><input type="radio" name="drinker" value="no" data-other-radios="drinks-yes" data-loader="loader-habits" data-loader-id="is-drinker" data-history-id="drinker-no"/><div class="actual-radio"></div> No/Non</label></div>
		<div class="left-box-title extra-margin-bottom" id="many-drinks">How many drinks per week? / Combien de verres par semaine?</div>
		<div class="left-box-title extra-margin-bottom" id ="many-drinks-1">
			<label><input type="radio" name="drinks" value="1_4" data-loader="loader-habits" data-loader-id="drinks-num_IF_drinks-yes" data-history-id="drinks-1"/><div class="actual-radio"></div> 1 - 4&nbsp;&nbsp;&nbsp;</label>
			<label class="second-label"><input type="radio" name="drinks" value="5_9" data-loader="loader-habits" data-loader-id="drinks-num_IF_drinks-yes" data-history-id="drinks-2"/><div class="actual-radio"></div> 5 - 9</label>
		</div>
		<div class="left-box-title extra-margin-bottom" id="many-drinks-2">
			<label><input type="radio" name="drinks" value="10_15" data-loader="loader-habits" data-loader-id="drinks-num_IF_drinks-yes" data-history-id="drinks-3"/><div class="actual-radio"></div> 10 - 15</label>
			<label class="second-label"><input type="radio" name="drinks" value="15" data-loader="loader-habits" data-loader-id="drinks-num_IF_drinks-yes" data-history-id="drinks-4"/><div class="actual-radio"></div> 15+</label>
		</div>
		<div class="left-box-title" id="many-drinks-since">Since when / Depuis combien de temps:</div><div class="right-box-container" id="many-drinks-since-box"><input type="text" name="checkListItem" class="box-input" data-history-id="drinks-since"/></div>
	</div>
	
	<div class="white-box-history">
		<h3 data-localize="alcohol.link">Sleep / Sommeil</h3>
		<div class="left-box-title" data-localize="allergies.paragraph"> Number of hours per night / Nombre d'heures par nuit:</div><div class="right-box-container"><input type="text" name="checkListItem" class="side-box-input" data-loader="loader-habits" data-loader-id="sleep-hours" data-history-id="sleep-hours"/></div>
	</div>
	
	<div class="white-box-history">
		<h3 class="no-bottom-pad" data-localize="alcohol.link">Physical Activities (such as walking, running, swimming) / Activit&eacute;s Physiques (marche, course, natation):</h3>
	</div>
	
	<div class="white-box-history" id="activities-box" data-num-copies="1">
		<div class="left-box-title" data-localize="allergies.paragraph"> Activity / Activit&eacute;:</div><div class="side-right-box-container"><input type="text" name="checkListItem" class="side-box-input" data-history-id="physical-activity"/> <a href="" class="trashbutton" data-erasable-level="2"> </a></div>
	</div>
	
	<div class="white-box living_habits_loader"><a href="" class="plusbutton" data-copiable-item-id="activities-box"> </a></div>

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
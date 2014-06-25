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
	</body>
</html>
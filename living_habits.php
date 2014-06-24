<!DOCTYPE html>
<html>
	<head>
		<title>
			Health Passport Web App - Living Habits
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	<div class="top-bar" id="living_habits_loader">
		<h1 data-localize="livinghabits.title" class='centered'>Living Habits/Habitudes de vie </h1>
		<a href="history.php" id="back-button"></a>
	</div>
		<ul id="menu">
			<li> <div class="item"> <a href="" data-localize="smoking.link"><div id="smoking_color">Smoking/Femeur </div></a><br>
				<div id="white_box">
					<ul id="menu">			
						<li> <p><input type="checkbox" data-localize="yes.smoking"> yes/oui </p>
							<p data-localize="question.smoking">How many cigarattes per day?/ Combient de cigarettes par jour?:  					
							<input type="text" name="checkListItem" class="box_input"/> </p>
							<p data-localize="since.smoking"> since/depuis <input type="text" name="checkListItem" class="box_input"/></p>
						</li>
						<li> <p><input type="checkbox" data-localize="no.smoking"> no/non</p> </li>
					</ul>
				 </div>		
			</div></li>
			<li> <div class="item">  <a href=""data-localize="alcohol.link"> <div id="alcohol_color">Alcohol/Alcool</div> </a> 
				<div id="white_box">
					<ul id="menu">			
						<li> <p><input type="checkbox" data-localize="yes.alcohol"> yes/oui </p>
							<p data-localize="question.alcohol">How many drinks per week?/ Combient de verres par semaine?:  					
							<input type="text" name="checkListItem" class="box_input"/></p>
							<p data-localize="since.alcohol"> since/depuis <input type="text" name="checkListItem" class="box_input"/></p>
						</li>
						<li> <p> <input type="checkbox" data-localize="no.alcohol"> no/non </p></li>
					</ul>
				</div>	
			</div></li>
		<li> <div class="item">  <a href="" data-localize="physicalactivities.link"><div id="physical_color"> Physical Activities/Activit&eacute;s Physiques</div> </a>
				<div id="white_box">
					<p data-localize="example.physicalativity">Such as walking, running, swimming/ Marche, course, natation.</p>
					<p data-localize="activity.physicalativity"> Activity/Activit&eacute; <input type="text" name="checkListItem" class="box_input"/></p>
				</div>
			</div>
  				<div id="physical_color"><a href=""data-localize="plusbutton" id="plusbutton"> </a></div>
		</li>
		<li> <div class="item">  <a href="" data-localize="sleep.link"><div id="sleep_color"> Sleep </div> </a>
			<div id="white_box">
				<p data-localize="numberhours.sleep">Number of hours per night /Nombre d'heures par nuit <input type="text" name="checkListItem" class="box_input"/></p>
			</div>
		</div></li>
	</ul>
	
     <div class="footer" id="living_habits_loader"> </div>
	</body>
</html>
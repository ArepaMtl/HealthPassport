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
			<ul>			
				<li> <p><input type="checkbox" data-localize="yes.smoking"> yes/oui </p>
					<p data-localize="question.smoking">How many cigarattes per day?/ Combient de cigarettes par jour?:  					
					<input type="text" name="checkListItem"/></p>
					<p data-localize="since.smoking"> since/depuis <input type="text" name="checkListItem"/></p>
				</li>
				<li> <input type="checkbox" data-localize="no.smoking"> no/non </li>
			</ul>
		
		</div></li>
		<li> <div class="item">  <a href=""data-localize="alcohol.link"> <div id="alcohol_color">Alcohol/Alcool</div> </a> 
			<ul>			
				<li> <p><input type="checkbox" data-localize="yes.alcohol"> yes/oui </p>
					<p data-localize="question.alcohol">How many drinks per week?/ Combient de verres par semaine?:  					
					<input type="text" name="checkListItem"/></p>
					<p data-localize="since.alcohol"> since/depuis <input type="text" name="checkListItem"/></p>
				</li>
				<li> <input type="checkbox" data-localize="no.alcohol"> no/non </li>
			</ul>	
		</div></li>
		<li> <div class="item">  <a href="" data-localize="physicalactivities.link"><div id="physical_color"> Physical Activities/Activit&eacute;s Physiques</div> </a>
				<p data-localize="example.physicalativity">Such as walking, running, swimming/ Marche, course, natation.</p>
				<p data-localize="activity.physicalativity"> Activity/Activit&eacute; <input type="text" name="checkListItem"/></p>
			</div>
		    <a href="" data-localize="plusbutton"  id="plusbutton"> </a>
		</li>
		<li> <div class="item">  <a href="" data-localize="sleep.link"><div id="sleep_color"> Sleep </div> </a>
			<p data-localize="numberhours.sleep">Number of hours per night /Nombre d'heures par nuit <input type="text" name="checkListItem"/></p>
		</div></li>
	</ul>
	</body>
</html>
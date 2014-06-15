<!DOCTYPE html>
<html>
	<head>
		<title>
			Health Passport Web App - Living Habits
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	<div id="top-bar">
		<h1 data-localize="livinghabits.title" class='centered'>Living Habits/Habitudes de vie </h1>
		<a href="history.php" id="back-button"></a>
	</div>
	<ul id="menu">
		<li> <div class="item"> <a href="" data-localize="smoking.link">Smoking/Femeur </a><br>
			<ul>			
				<li> <p><input type="checkbox" data-localize="yes.smoking"> yes/oui </p>
					<p data-localize="question.smoking">How many cigarattes per day?/ Combient de cigarettes par jour?:  					
					<input type="text" name="checkListItem"/></p>
					<p data-localize="since.smoking"> since/depuis <input type="text" name="checkListItem"/></p>
				</li>
				<li> <input type="checkbox" data-localize="no.smoking"> no/non </li>
			</ul>
		
		</div></li>
		<li> <div class="item">  <a href=""data-localize="alcohol.link"> Alcohol/Alcool </a> 
			<ul>			
				<li> <p><input type="checkbox" data-localize="yes.alcohol"> yes/oui </p>
					<p data-localize="question.alcohol">How many drinks per week?/ Combient de verres par semaine?:  					
					<input type="text" name="checkListItem"/></p>
					<p data-localize="since.alcohol"> since/depuis <input type="text" name="checkListItem"/></p>
				</li>
				<li> <input type="checkbox" data-localize="no.alcohol"> no/non </li>
			</ul>	
		</div></li>
		<li> <div class="item">  <a href="" data-localize="physicalactivities.link"> Physical Activities/Activit&eacute;s Physiques </a>
			<p data-localize="example.physicalativity">Such as walking, running, swimming/ Marche, course, natation.</p>
			<p data-localize="activity.physicalativity"> Activity/Activit&eacute; <input type="text" name="checkListItem"/></p>
			<div class="buttoncircle" id="plusbutton"> <a href="" data-localize="plusbutton"> </a> </div>
    		<div class="buttoncircle" id="minusbutton"> <a href="" data-localize="minusbutton"> </a></div>
		</div></li>
		<li> <div class="item">  <a href="" data-localize="sleep.link"> Sleep  </a>
			<p data-localize="numberhours.sleep">Number of hours per night /Nombre d'heures par nuit <input type="text" name="checkListItem"/></p>
		</div></li>
	</ul>
	</body>
</html>
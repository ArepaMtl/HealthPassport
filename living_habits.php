<!DOCTYPE html>
<html>
	<head>
		<title>
			Health Passport Web App - Living Habits
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	<h1> <a href="history.php">Living Habits/Habitudes de vie</a> </h1>
	<ul class="centered">
		<li> <a href="">Smoking/Femeur </a><br>
			<ul>			
				<li> <p><input type="checkbox"> yes/oui </p>
					<p>How many cigarattes per day?/ Combient de cigarettes par jour?:  					
					<input type="text" name="checkListItem"/></p>
					<p> since/depuis <input type="text" name="checkListItem"/></p>
				</li>
				<li> <input type="checkbox"> no/non </li>
			</ul>
		
		</li>
		<li> <a href=""> Alcohol/Alcool </a> 
			<ul>			
				<li> <p><input type="checkbox"> yes/oui </p>
					<p>How many drinks per week?/ Combient de verres par semaine?:  					
					<input type="text" name="checkListItem"/></p>
					<p> since/depuis <input type="text" name="checkListItem"/></p>
				</li>
				<li> <input type="checkbox"> no/non </li>
			</ul>	
		</li>
		<li>  <a href=""> Physical Activities/Activit&eacute;s Physiques </a>
		<p>Such as walking, running, swimming/ Marche, course, natation.</p>
			<p> Activity/Activit&eacute; <input type="text" name="checkListItem"/></p>
			<div id="buttoncircle"> <a href=""> +</a> </div>
    		<div id="buttoncircle"> <a href=""> - </a></div>
		</li>
		<li> <a href=""> Sleep  </a>
			<p>Number of hours per night /Nombre d'heures par nuit <input type="text" name="checkListItem"/></p>
		</li>
	</ul>
	</body>
</html>
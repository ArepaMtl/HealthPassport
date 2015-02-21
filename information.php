<?php

$useDropDown = TRUE;


?><!DOCTYPE html>
<html manifest="cache.manifest">
	<head>
		<title>
			Health Passport Web App - Information
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
		<script src="javascript/jquery-1.11.1.min.js"></script>
		
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56545433-1', 'auto');
  ga('send', 'pageview');

  			<?php
			
			if ($useDropDown) {
			
			?>
  
  
  			$(document).ready(function(){
  
  				$(".item>a:first-child").click(function(event){
					event.preventDefault();
					
					var this_item = this;
					var $items = $(this).parent().find(".info-items");
					var $downButton = $(this).parent().find(".below-button");
					if ($items.css("display")==="none"){
						$items.css({"opacity":0});
						$items.show();
						$items.animate({"opacity":1},300);
						$downButton.css({"transform":"rotate(180deg)"},2000);
						/*$('html, body').animate({
	    					"scrollTop": $(this_item).offset().top
						}, 200);*/
						//$('html, body').scrollTop($(this_item).offset().top);
					}else{
						if ($(this).parent().hasClass("detached-header")){
							$(this).parent().removeClass("detached-header");
							$('html, body').scrollTop($(this_item).offset().top);
						}
						$items.hide();
						$downButton.css({"transform":"rotate(0deg)"},2000);
					}
				});
				
			});
			
			<?php 
			
			
			}
			
			?>
  
  
  
  </script>
	</head>
	<body>
     <div class="top-bar">
		 <h1 data-localize="information.title" class='centered'> Phone Numbers </h1>	
	 	<a href="index.php" id="back-button"></a>
	 </div>
		<ul id="menuinformation">
			<!--<li class="item"><a href="phone_numbers.php" data-localize="importantphone.link"> Important phone numbers/Num&eacute;ros de t&eacute;l&eacute;phone importants</a><a href="phone_numbers.php" class="below-button"> </a></li>
			<li class="item"><a href="chssn.php" data-localize="chssn.link"> Chssn </a> <a href="chssn.php" class="below-button"> </a></li>-->
			
			<?php
			
			if ($useDropDown) {
				
			?>
			
			<li class="item"><a href="information.php"><div class='item-text submenu-text'><div>Urgent Resources</div><div> <!-- FRENCH HERE --> </div></div> <div class="below-button noclick"> </div></a><div class="info-items" style="display:none;">
				
			<?php
			
			}else{
				
			?>
			
			<li class="item"><a href="information.php"><div class='item-text submenu-text'><div>Important phone numbers</div><div> Num&eacute;ros de t&eacute;l&eacute;phone </div></div> <div class="below-button noclick"> </div></a><div class="info-items">
			
			
			<?php
			
			}
			
			?>
				
				
				<div class="white-box">
					<a class="info-link" href="tel:911"><div class="info-content centered">Emergencies / Urgences: 911</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:811"><div class="info-content centered">Health Info /<br/>Info-Sant&eacute;:<br/>811</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:211"><div class="info-content-small centered">Community Services /<br/>Services Communautaires:<br/>211</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel: 418 332-3851"><div class="info-content-small centered">MCDC Mauricie Centre-du-Québec:<br/> 418 332-3851</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:+8195234581"><div class="info-content-small centered">CSS du Haut-Saint Maurice /<br/> La Tuque:<br/>819 523-4581</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:+4183657555"><div class="info-content-small centered">CSSS de la Vall&eacute;e de la Batiscan /<br/> St-Tite:<br/>418 365-7555</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:+8195367500"><div class="info-content-small centered">CSSS de la l'&Eacute;nergie /<br/> Shawinigan:<br/>819 536-7500</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:+8192282731"><div class="info-content-small centered">CSSS de Maskinong&eacute;:/<br/> Louiseville:<br/>819 228-2731</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:+8193702100"><div class="info-content-small centered">CSSS de Trois-Rivi&eacute;eres /<br/> Trois-Rivi&eacute;eres:<br/>819 370-2100</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:+8192932071"><div class="info-content-small centered">CSSS de B&eacute;cancour-Nicolet-Yamaska /<br/> Nicolet:<br/>819 293-2071</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:+8194786464"><div class="info-content-small centered">CSSS de Drummond /<br/>Drummondville:<br/>819 478-6464</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:+8193572030"><div class="info-content-small centered">CSSS d'Arthabaska et de l'&Eacute;rable /<br/>Victoriaville:<br/>819 357-2030</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:+4183796868"><div class="info-content-small centered">Centre de réadaptation en déficience intellectuelle (CRDI) /<br/>Trois-Rivi&eacute;eres:<br/>418 379-6868</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:+8193785481"><div class="info-content-small centered">Youth HelpLine /<br/>Les Centres Jeunesse (Trois-Rivi&eacute;eres):<br/>819 378-5481</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:18662773553<"><div class="info-content centered">Suicide Prevention /<br/>La Pr&eacute;vention du suicide:<br/>1866 277-3553</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:18003615085"><div class="info-content-small centered">Parents Help Line /<br/>Ligne d'aide aux parent:<br/>1800 361-5085</div></a>
					<div class="phone-icon noclick"></div>
				</div>
			</div></li>
			
			<?php
			
			if ($useDropDown) {
				
			?>
			
			
			<li class="item"><a href="information.php"><div class='item-text submenu-text'><div>Information and Referral</div><div><!-- FRENCH HERE --></div></div> <div class="below-button noclick"> </div></a><div class="info-items" style="display:none;">
				<div class="white-box">
					<a class="info-link" href="tel:911"><div class="info-content centered">Something: 911</div></a>
					<div class="phone-icon noclick"></div>
				</div>
			</div></li>
			
			
			<?php
			
			}
			
			?>
		</ul>
	</body>

</html>
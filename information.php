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
					<a class="info-link" href="tel:18004635060"><div class="info-content centered"> Poison Control/ Centre anti-poison: <br/>800 463-5060</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:18662773553"><div class="info-content centered">Suicide Prevention /<br/>La Pr&eacute;vention du suicide (Bas-Saint-Laurent) <br/>866 277-3553</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">Action on Mental Illness /<br/>Action sur la maladie mentale:<br/>  <a class='phone-link' href="tel:+18773030264"> 877 303-0264<a> <br/> <a class='phone-link' href="www.amiquebec.org"> www.amiquebec.org</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>
					<div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">Gasp&eacute; Center for Health and Social Services /<br/> Centre de sant&eacute; et des services sociaux de Gasp&eacute; Fondation du cancer:<br/>  <a class='phone-link' href="tel:+4183683301">418 368-3301<a> <br/> <a class='phone-link' href="tel:+41836825727"> CLSC 418 368-2572</a> <br/> <a class='phone-link' href="tel:+4183686663"> UMF 418 368-6663</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:4183681803"><div class="info-content-small centered">Youth Protection /<br/>Protection de la jeunesse:<br/>418 368-1803</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:4183683232"><div class="info-content centered"> Police: <br/>418 368-3232</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:+4183686883"><div class="info-content-small centered"> Women Sexual Assault /<br/> Les femmes victimes d'agression sexuelle (L'Aid-Elle):<br/>418 368-6883</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:+4183686883"><div class="info-content-small centered"> Women Sexual Assault /<br/> Les femmes victimes d'agression sexuelle (CALACS la B&ocirc;me):<br/>418 368-6883</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:+18664666379"><div class="info-content-small centered"> Men Sexual Assault /<br/> Les hommes victimes d'agression sexuelle:<br/>866-466-6379</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:+18889339007"><div class="info-content-small centered"> Victims of Sexual Assault & Incest Survivors /<br/> Les victimes d'agression sexuelle et Inceste survivants:<br/>888-933-9007</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:+4183933310"><div class="info-content-small centered"> Multi-service /<br/> Multi-services:<br/>418 393-3310</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:+4183686634"><div class="info-content-small centered"> Alzheimer Society /<br/> Soci&eacute;t&eacute; Alzheimer:<br/>418 368-6634</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">Gasp&eacute; Cancer Foundation /<br/> Gasp&eacute; Fondation du cancer:<br/>  <a class='phone-link' href="tel:+4183688994">418 368-8994<a> <br/> <a class='phone-link' href="tel:+4183685527">418 368-5527</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:+18883620063"><div class="info-content-small centered"> Quebec Cancer Foundation /<br/>Gasp&eacute; Quebec Fondation du cancer:<br/>  888 362-0063</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:+14183686676"><div class="info-content-small centered"> Alcoholics/Narcotics Anonymous /<br/>Alcooliques / Narcotiques Anonymes (Mi-chemin):<br/>  418 368-6676</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:+18002652626"><div class="info-content-small centered"> Drug & Alcohol Help line /<br/>Ligne de drogues et alcool aide: <br/>  800 265-2626</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:+4183684700"><div class="info-content-small centered"> Homeless shelter & food bank /<br/>Sans-abri et banque alimentaire: <br/> 418 368-4700</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:+4183686624"><div class="info-content-small centered"> Adapted transit /<br/>Transport Adapt&eacute; et collectif: <br/> 418 368-6624</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:+4183688875"><div class="info-content-small centered"> House of Parenfant family / <br/>Maison de la famille Parenfant: <br/>418 368-8875</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:+4183682104"><div class="info-content-small centered"> Town of Gasp&eacute; / <br/>Ville de Gasp&eacute;: 418 368-2104</div></a>
					<div class="phone-icon noclick"></div>
				</div>

			</div></li>
			
			<?php
			
			if ($useDropDown) {
				
			?>
			
			
			<li class="item"><a href="information.php"><div class='item-text submenu-text'><div>Information and Referral</div><div><!-- FRENCH HERE --></div></div> <div class="below-button noclick"> </div></a><div class="info-items" style="display:none;">
				<div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">CHSSN: <br/>  <a class='phone-link' href='http://www.chssn.org'>www.chssn.org<a> <br/> <a class='phone-link' href="tel:+14186842289"> 418 684-2289</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>
			</div></li>
			<?php
			
			}
			
			?>
		</ul>
	</body>

</html>
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
					<a class="info-link" href="tel:211"><div class="info-content centered">Community Services /<br/>Services Communautaires:<br/>211</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:+4182282031"><div class="info-content centered">CSS Beauce/<br/> Beauceville:<br/>418 228-2031</div></a>
					<div class="phone-icon noclick"></div>
				</div>
<<<<<<< HEAD
				<div class="white-box taller-box">
					<a class="info-link" href="tel:+4182480630"><div class="info-content centered">CSS de Montmagny /<br/> L'islet Montmagny:<br/>418 248-0630</div></a>
					
					<div class="phone-icon noclick"></div>
				
				
				</div>
=======
				<div class="white-box taller-box">
					<a class="info-link" href="tel:18662773553<"><div class="info-content centered">Suicide Prevention /<br/>La Pr&eacute;vention du suicide:<br/>1866 277-3553</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:18003615085"><div class="info-content-small centered">Parents Help Line /<br/>Ligne d'aide aux parent:<br/>1800 361-5085</div></a>
					
					<div class="phone-icon noclick"></div>
				
				</div>
>>>>>>> NotCHSSN
				<div class="white-box taller-box">
					<a class="info-link" href="tel:+4188357121"><div class="info-content centered">CSS Alphonse-Desjardins /<br/> L&eacute;vis:<br/>418 835-7121</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:+4183387777"><div class="info-content centered">CSS de la r&eacute;gion de Thetford /<br/> Thetford Mines:<br/>418 338-7777</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:+4186253101"><div class="info-content centered">CSS des Etchemins /<br/> Lac-Etchemins:<br/>418 625-3101</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:+4187743304"><div class="info-content centered">Rehabilitation center for drug and alcohol addiction /<br/> Centre de R&eacute;adaptation en Alcoolisme et Toxicomanie (Beauceville):<br/>418 774-3304</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:+4188333218"><div class="info-content centered">Intellectual Deficiency Rehabilitation Center /<br/> Centre de R&eacute;adaptation en D&eacute;ficience Intellectuelle (CRDI L&eacute;vis):<br/>418 833-3218</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:+4183802064"><div class="info-content centered">Physical Deficiency Rehabilitation Center /<br/> Centre de R&eacute;adaptation en D&eacute;ficience Physique (Charny L&eacute;vis):<br/>418 380-2064</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:+4188379331"><div class="info-content-small centered">Youth HelpLine /<br/>Les Centres Jeunesse (L&eacute;vis):<br/>418 837-9331</div></a>
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
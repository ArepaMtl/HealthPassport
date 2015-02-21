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
					<div class="info-link"><div class="info-content-small centered">Health Info /<br/>Info-Sant&eacute;:<br/>  
					<a class='phone-link' href="tel:811">811<a> <br/> <a class='phone-link' href="http://www.msss.gouv.qc.ca/en/sujets/organisation/info-sante-811.php">www.msss.gouv.qc.ca</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">Community Information & Referrals /<br/>Centre d'information et de r&eacute;f&eacute;rence:<br/>  
					<a class='phone-link' href="tel:211">211<a> <br/> <a class='phone-link' href="http://www.211quebecregions.ca/en/">www.211quebecregions.ca</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="http://www.centredecrise.ca/centre-de-crise.php"><div class="info-content-small centered">Crisis Centre /<br/>Centre de crise:<br/>www.centredecrise.ca</div></a>
					<div class="externallink-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:18662773553<"><div class="info-content centered">Suicide Prevention /<br/>La Pr&eacute;vention du suicide:<br/>1866 277-3553</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				
				<div class="white-box taller-box">
					<a class="info-link" href="http://ligneparents.com"><div class="info-content-small centered">Parents Help Line /<br/>Ligne d'aide aux parent:<br/>www.ligneparents.com</div></a>
					<div class="externallink-icon noclick"></div>
				
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="http://www.santemontreal.qc.ca/en/support-services/emergency- services/poison-control-centre/"><div class="info-content-small centered">Qu&eacute;bec Poison Control /<br/>Centre anti-poison du Qu&eacute;bec:<br/>www.santemontreal.qc.ca/en/support-services/emergency- services/poison-control-centre</div></a>
					<div class="externallink-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="http://www.violsecours.qc.ca/"><div class="info-content-small centered">Sexual Assault /<br/>Agression sexuelle:<br/>www.violsecours.qc.ca</div></a>
					<div class="externallink-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="http://www.sosviolenceconjugale.ca/"><div class="info-content-small centered">SOS Spousal Abuse /<br/>SOS Violence conjugale:<br/>www.sosviolenceconjugale.ca</div></a>
					<div class="externallink-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="http://www.centrejeunessedequebec.qc.ca/"><div class="info-content-small centered">Youth Protection /<br/>Protection de la jeunesse:<br/>www.centrejeunessedequebec.qc.ca</div></a>
					<div class="externallink-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">Youth HelpLine /<br/>Ligne d'aide aux jeunes:<br/>  <a class='phone-link' href="tel:+18002632266">1800 263-2266<a> <br/> <a class='phone-link' href="sms:+15146001002">SMS: 514 600-1002</a> </div></div>
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
<?php

$useDropDown = TRUE;


?><!DOCTYPE html>
<html manifest="cache.manifest">
	<head>
		<title>
			Health Passport Web App - Information
		</title>
		<!--Google Fonts-->	
	<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 

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
					<a class="info-link" href="tel:811"><div class="info-content centered">Health Information / Info-Sant&eacute;:<br/>811</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:18002652626"><div class="info-content-small centered">Drugs: Help and Referral <br/>1-800-265-2626</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:4186996000"><div class="info-content centered">Police (Saguenay) </br>418-699-6000</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:18003615085"><div class="info-content-small centered">Elder Mistreatment Helpline<br/>1-888-489-2287</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:18004635060"><div class="info-content-small centered">Qu&eacute;bec Poison Control <br/>1-800 463-5060</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:18006686868"><div class="info-content-small centered">Kids Help Phone <br/>1-800-668-6868</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:18003639010"><div class="info-content-small centered">SOS Domestic Violence <br/>1-800-363-9010</div></a>
					<div class="phone-icon noclick"></div>
				</div>

				<div class="white-box taller-box">
					<a class="info-link" href="tel:18003615085"><div class="info-content-small centered">Parent Help line  <br/>1-800-361-5085</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<a class="info-link" href="tel:18662773553"><div class="info-content-small centered">Suicide Prevention  <br/>1-866-277-3553</div></a>
					<div class="phone-icon noclick"></div>
				</div>

				<div class="white-box taller-box">
					<a class="info-link" href="tel:18773030264"><div class="info-content-small centered">Action on Mental Health  <br/>1-877-303-0264</div></a>
					<div class="phone-icon noclick"></div>
				</div>

				<div class="white-box taller-box">
					<a class="info-link" href="tel:18004635060"><div class="info-content-small centered">First Nations and Inuit for Wellness Help  <br/>1-800-463-5060</div></a>
					<div class="phone-icon noclick"></div>
				</div>

				<div class="white-box taller-box">
					<a class="info-link" href="tel:18889339007"><div class="info-content-small centered">Victims of Sexual Assault  <br/>1-888-933-9007</div></a>
					<div class="phone-icon noclick"></div>
				</div>

				<div class="white-box taller-box">
					<a class="info-link" href="tel:18666334220"><div class="info-content-small centered">National Eating Disorder-Information Center  <br/>1-866-633-4220</div></a>
					<div class="phone-icon noclick"></div>
				</div>

				<div class="white-box taller-box">
					<a class="info-link" href="tel:18002632266"><div class="info-content-small centered">TEL-JEUNES <br/>1-800-263-2266</div></a>
					<div class="phone-icon noclick"></div>
				</div>

				<div class="white-box taller-box">
					<a class="info-link" href="tel:4186988808"><div class="info-content-small centered">Saguenay Food Bank  <br/>418-698-8808</div></a>
					<div class="phone-icon noclick"></div>
				</div>

				<div class="white-box taller-box">
					<a class="info-link" href="tel:18664666379"><div class="info-content-small centered"> Men’s Sexual Assault <br/> 1-866-466-6379</div></a>
					<div class="phone-icon noclick"></div>
				</div>

				<div class="white-box taller-box">
					<a class="info-link" href="tel:18555446362"><div class="info-content-small centered"> Narcotics anonymous Québec <br/> 1-855-LIGNENA (544-6362)</div></a>
					<div class="phone-icon noclick"></div>
				</div>

			
				
			</div></li>
			
			<?php
			
			if ($useDropDown) {
				
			?>
			
			
			<li class="item"><a href="information.php"><div class='item-text submenu-text'><div>Hospitals</div><div><!-- FRENCH HERE --></div></div> <div class="below-button noclick"> </div></a><div class="info-items" style="display:none;">
				
				<div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">La Baie Hospital <br/> 1000, rue du Docteur-Desgagn&#xE9;
						La Baie <br/> <a class='phone-link' href="tel:+14185443381"> 418-544-3381</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>

				<div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">Alma Hospital <br/> 
						300, boulevard Champlain Sud Alma <br/> <a class='phone-link' href="tel:+14186692000"> 418-669-2000</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">Chicoutimi Hospital <br/> 
						305, rue Saint-Vallier Chicoutimi <br/> <a class='phone-link' href="tel:+14185411000"> 418-541-1000</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">Jonqui&#xE8;re Hospital <br/> 
						2230, rue de L&#x2019;H&#xF4;pital Jonqui&#xE8;re <br/> <a class='phone-link' href="tel:+14186957700"> 418-695-7700</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">Roberval Hospital <br/> 
						450, rue Brassard Roberval <br/> <a class='phone-link' href="tel:+14182750110"> 418-275-0110</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">Dolbeau-Mistassini Hospital <br/> 
						2000, boulevard Sacr&#xE9;-C&#x153;ur Dolbeau-Mistassini <br/> <a class='phone-link' href="tel:+14182761234"> 418-276-1234</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>

				
			</div></li>
			<?php
			
			}
			
			?>

			<?php
			
			if ($useDropDown) {
				
			?>
			
			
			<li class="item"><a href="information.php"><div class='item-text submenu-text'><div>Delivery</div><div><!-- FRENCH HERE --></div></div> <div class="below-button noclick"> </div></a><div class="info-items" style="display:none;">
				
				<div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">Midwife-run Birth Centre <br/> 
						Maison de naissance du Fjord-au-Lac (Chicoutimi) <br/> <a class='phone-link' href="tel:+14185411166"> 418-541-1166</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>

				<div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">Gynecology Clinic <br/> 
						Clinique de gyn&#xE9;cologie du Saguenay (Chicoutimi)  <br/> <a class='phone-link' href="tel:+14185452666"> 418-545-2666</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>
				<div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">Women’s Health Department <br/> 
						D&#xE9;partement de sant&#xE9; de la femme (Chicoutimi)  <br/> <a class='phone-link' href="tel:+14185411033"> 418-541-1033</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>

				<div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">Women’s Health Department <br/> 
						D&#xE9;partement de sant&#xE9; de la femme (Chicoutimi)  <br/> <a class='phone-link' href="tel:+14185411033"> 418-541-1033</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>

				
			</div></li>
			<?php
			
			}
			
			?>

			<?php
			
			if ($useDropDown) {
				
			?>
			
			
			<li class="item"><a href="information.php"><div class='item-text submenu-text'><div>Birthing Centers</div><div><!-- FRENCH HERE --></div></div> <div class="below-button noclick"> </div></a><div class="info-items" style="display:none;">
				
				<div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">Chicoutimi Hospital  
						 <br/> <a class='phone-link' href="tel:+14185411000"> 418-541-1000 ext 2362 </a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>

				<div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">Alma Hospital   
						 <br/> <a class='phone-link' href="tel:+14186992000"> 418-699-2000 ext 6635</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>


				<div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">Dolbeau-Mistassini
						 <br/> <a class='phone-link' href="tel:+14182761234">  418-276-1234  ext 4218</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>

				<div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">Roberval Hospital  
						 <br/> <a class='phone-link' href="tel:+14182750110"> 418-275-0110  ext 2282</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>

				

				
			</div></li>
			<?php
			
			}
			
			?>

		</ul>
	</body>

</html>
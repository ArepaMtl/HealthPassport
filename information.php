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
					<a class="info-link" href="tel:+911"><div class="info-content centered">Emergencies / Urgences: 911</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				<!--<div class="white-box taller-box">
					<a class="info-link" href="tel:+811"><div class="info-content centered">Health Info /<br/>Info-Sant&eacute;:<br/>811</div></a>
					<div class="phone-icon noclick"></div>
				</div>-->
				<div class="white-box taller-box">
					<a class="info-link" href="tel:+51435149592"><div class="info-content centered">Crisis Centre /<br/>Centre de crise:<br/>514 351-49592</div></a>
					<div  class="phone-icon noclick"></div>
				</div>
          
          <div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered"> <b>Youth HelpLine / Ligne d'aide aux jeunes
:<br/>  <a class='phone-link' href="tel:+18002632266">  1 800 263-2266<a> <br/> <a class='phone-link' href="tel:+5146001002"> SMS: 514 600-1002</a></b>
					<!--<br/> <a class='phone-link' href="tel:+4189864299">Entry Island: 418 986-4299</a>-->  </div></div>
                    
					<div class="phone-icon noclick"></div>
				</div>
                
                  
				<div class="white-box taller-box">
					<a class="info-link" href="tel:+18662773553"><div class="info-content centered">Suicide Prevention /<br/>La Pr&eacute;vention du suicide:<br/>1866 277-3553</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				
                <div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">Parents Help Line /<br/>Ligne d'aide aux parent:<br/>  <a class='phone-link' href="tel:+18003615085"> 1 800 361-5085<a> <br/> <a class='phone-link' href="www.ligneparents.com"> www.ligneparents.com</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>
                
                  <div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">Qu&eacute;bec Poison Control /<br/>Centre anti-poison du Qu&eacute;bec:<br/>  <a class='phone-link' href="tel:+18004635060"> 1800 463-5060<a> <br/> <a class='phone-link' href="www.santemontreal.qc.ca/en/support-services/emergency- services/poison-control-centre"> www.santemontreal.qc.ca</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>
				
                 <div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">Sexual Assault /<br/>Agression sexuelle:<br/>  <a class='phone-link' href="tel:+5149339007"> 514 933-9007<a> <br/> <a class='phone-link' href="www.agressionssexuelles.gouv.qc.ca/en/index.php"> www.agressionssexuelles.gouv.qc.ca</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>
         
				<div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">SOS Spousal Abuse /<br/>SOS Violence conjugale:<br/>  <a class='phone-link' href="tel:+18004649010"> 1 800 464-9010<a> <br/> <a class='phone-link' href="www.sosviolenceconjugale.ca">www.sosviolenceconjugale.ca</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>
               
               <div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">Youth Protection /<br/>Protection de la jeunesse:<br/>  <a class='phone-link' href="tel:+18004634834"> 1 800-463-4834<a> <br/> <a class='phone-link' href="www.centrejeunessedequebec.qc.ca">www.centrejeunessedequebec.qc.ca</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>
				
                <div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">Elder Abuse <br/>  <a class='phone-link' href="tel:+5144892287"> 514 489-2287<a> <br/> <a class='phone-link' href="www.maltraitanceaines.gouv.qc.ca/en/">www.maltraitanceaines.gouv.qc.ca</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>
				
				
               <!-- <div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">CSSS des Iles:<br/>  <a class='phone-link' href="tel:+4189862121"> 418 986-2121<a> <br/> <a class='phone-link' href="tel:+4189866225">Appointments: 418 986-6225</a>
					<br/> <a class='phone-link' href="tel:+4189866611">Doctor's Secretary: 418 986-6611</a> <br/> <a class='phone-link' href="tel:+4189866110">Specialist's Secretary: 418 986-6110</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>
				
                <div class="white-box taller-box">
					<a class="info-link" href="tel:+4189864649"><div class="info-content-small centered">Services for Seniors /<br/>Centre D'Action B&eacute;n&eacute;vole:<br/>418 986-4649</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				
                <div class="white-box taller-box">
					<a class="info-link" href="tel:+4189865044"><div class="info-content-small centered">For female victims of conjugal violence /<br/>Maison d'Aide et d'H&eacute;bergement l'Accalmie:<br/>418 986-5044</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				
                <div class="white-box taller-box">
					<a class="info-link" href="tel:+4189866456"><div class="info-content-small centered">Support to people affected by mental health issues /<br/>Centre Communautaire L'Eclaircie:<br/> 418 986-6456</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				
                <div class="white-box taller-box">
					<a class="info-link" href="tel:+4189862121"><div class="info-content-small centered">Service for people with addiction /<br/>Centre L'Escale:<br/> 418 986-2121. Ext.3113</div></a>
					<div class="phone-icon noclick"></div>
				</div>
				-->
                <!--<div class="white-box taller-box">
					<a class="info-link" href="tel:+4189866631"><div class="info-content-small centered">Temporary lodging for vulnerable populations /<br/>La Maison a Damas:<br/> 418 986-6631</div></a>
					<div class="phone-icon noclick"></div>
				</div>
			</div></li>-->
			
			<?php
			
			if ($useDropDown) {
				
			?>
			
			
			<li class="item"><a href="information.php"><div class='item-text submenu-text'><div>Information and Referral</div><div><!-- FRENCH HERE --></div></div> <div class="below-button noclick"> </div></a><div class="info-items" style="display:none;">
				<div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">CAMI: <br/>  <a class='phone-link' href='http://www.micami.org/'>www.micami.org<a> <br/> <a class='phone-link' href="tel:+14189852116"> 418 985-2116</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>
			</div></li>
			<?php
			
			}
			
			?>
		</ul>
	</body>

</html>
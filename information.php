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
                
                <div class="white-box">
					<b>
                    <div class="info-link"><div class="info-content-small centered">CISSAT of Rouyn-Noranda<br/>  <a class='phone-link' href="http://www.csssrn.qc.ca/"> www.csssrn.qc.ca</a> </div></div></b>
					<div class="externallink-icon noclick"></div>
				</div>
				<!--<div class="white-box taller-box">
					<a class="info-link" href="tel:+811"><div class="info-content centered">Health Info /<br/>Info-Sant&eacute;:<br/>811</div></a>
					<div class="phone-icon noclick"></div>
				</div>-->
				<div class="white-box">
					<a class="info-link" href="tel:+18197645131"><div class="info-content-small centered">Hospital<br/> 819 764-5131</div></a>
					<div  class="phone-icon noclick"></div>
				</div>
                
                <div class="white-box">
					<a class="info-link" href="tel:+18197625599"><div class="info-content-small centered">CLSC Appointment Center<br/> 819 762-5599</div></a>
					<div  class="phone-icon noclick"></div>
				</div>
          
          <div class="white-box">
					<a class="info-link" href="tel:+18197649591"><div class="info-content-small centered">Hospital Appointments & Admissions<br/>819 764-9591</div></a>
					<div  class="phone-icon noclick"></div>
				</div>
                
                <div class="white-box">
					<a class="info-link" href="tel:+18197642938"><div class="info-content-small centered">
                    Blood Test Appointment Center<br/> 819 764-2938</div></a>
					<div  class="phone-icon noclick"></div>
				</div>
                
                <div class="white-box">
					<a class="info-link" href="tel:+18197620908"><div class="info-content-small centered">
                    Pie XII Long Term Care Centre <br/> 819 762-0908</div></a>
					<div  class="phone-icon noclick"></div>
				</div>
                
                <div class="white-box">
					<a class="info-link" href="tel:+18197620995"><div class="info-content-small centered">
                    Pediatric and Pain Clinic (Youville) <br/> 819 762-0995</div></a>
					<div  class="phone-icon noclick"></div>
				</div>
               
                <div class="white-box">
					<a class="info-link" href="tel:+18197620995"><div class="info-content-small centered">
                    Volunteer Center <br/> 819 762-0515</div></a>
					<div  class="phone-icon noclick"></div>
				</div>
                 
                 
                 
                 <div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">
                   Le Pont (Mental Health & Counseling) <br/>  <a class='phone-link' href="tel:+18197975141">
                    819 797-5141<a> <br/> <a class='phone-link' href="http://www.le-pont.ca/"> 
                    www.le-pont.ca</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>
                
                <div class="white-box">
					<a class="info-link" href="tel:+18197627368"><div class="info-content-small centered">
                    Adapted Transportation Services <br/> 819 762-7368</div></a>
					<div  class="phone-icon noclick"></div>
				</div>
                
                <div class="white-box">
					<a class="info-link" href="tel:+18882218122"><div class="info-content-small centered">
                    Ambulance (Administration) <br/> 1 888-221-8122</div></a>
					<div  class="phone-icon noclick"></div>
				</div>
                 
                  <div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">
                   Suicide Prevention <br/>  <a class='phone-link' href="tel:+18662773553">
                    866 277-3553<a> <br/> <a class='phone-link' href="http://www.cps-rouyn-noranda.ca/"> 
                    www.cps-rouyn-noranda.ca</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>
                
                <div class="white-box">
					<a class="info-link" href="tel:+18197971016"><div class="info-content-small centered">
                   Alcohol Anonymous AA<br/> 819 797-1016</div></a>
					<div  class="phone-icon noclick"></div>
				</div>
                
                 <div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">
                   Centre Jeunesse  <br/>  <a class='phone-link' href="tel:+18005676405">
                    1 800-567-6405<a> <br/> <a class='phone-link' href="http://www.cjat.qc.ca/"> 
                    www.cjat.qc.ca </a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>
                 
                 
                 <div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">
                   Centre Normand  <br/>  <a class='phone-link' href="tel:+18197620088">
                   819 762-0088<a> <br/> <a class='phone-link' href="http://www.centrenormand.org/"> 
                   www.centrenormand.org </a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>
                  
                  
                 
                <div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">
                   Maison de l&rsquo;envol  <br/>  <a class='phone-link' href="tel:+18197627273">
                   819 762-7273<a> <br/> <a class='phone-link' href=" http://www.maisondelenvol.ca/"> 
                    www.maisondelenvol.ca </a> </div></div>
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
					<div class="info-link"><div class="info-content-small centered"><b>Neighbours Regional Association of Rouyn-Noranda</b><br/>  <a class='phone-link' href='http://www.neighbours-rouyn-noranda.ca/'>www.neighbours-rouyn-noranda.ca<a> <br/> <a class='phone-link' href="tel:+18197620882 "> 819 762-0882 </a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>
			</div></li>
			<?php
			
			
			}
			
			?>
		</ul>
	</body>

</html>
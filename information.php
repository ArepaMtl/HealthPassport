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
  
  <style type="text/css">
  
  .white-box-color{
	position:relative;
	margin:0px;
	margin-top:10px;
	height:64px;
	padding:0px;
	display:block;
	background-color:rgba(48, 212, 90, 0.68);

}
.white-box-color-taller{
	position:relative;
	margin:0px;
	margin-top:10px;
	height:96px;
	padding:0px;
	display:block;
	background-color:#CCC;

}


		</style>
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
					<a class="info-link" href="tel:+811"><div class="info-content centered">Emergencies / Urgences: 811</div></a>
					<div class="phone-icon noclick"></div>
				</div>
                
                <div class="white-box taller-box">
					<a class="info-link" href="tel:+811"><div class="info-content centered">Health Info /<br/>Info-Sant&eacute;:<br/>811</div></a>
					<div class="phone-icon noclick"></div>
				</div>
                
                <div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">Qu&eacute;bec Poison Control /<br/>Centre anti-poison du Qu&eacute;bec:<br/>  <a class='phone-link' href="tel:+18004635060"> 1 800 463-5060<a> <br/> <a class='phone-link' href="http://www.santemontreal.qc.ca/en/support-services/emergency- services/poison-control-centre"> www.santemontreal.qc.ca</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>
                
                <div class="white-box">
					<a class="info-link" href="tel:+18662773553"><div class="info-content-small centered"> <b>Suicide Prevention / La pr&eacute;vention du suicide </b><br/>: 1 866 277-3553</div></a>
					<div class="phone-icon noclick"></div>
				</div>
                
                <div class="white-box">
					<a class="info-link" href="tel:*4141"><div class="info-content-small centered"> <b>Police / Suret&eacute; du Qu&eacute;bec: </b><br/>310-4141 (if calling from a cellphone dial cellphone dial) </div></a>
					<div class="phone-icon noclick"></div>
				</div>
                
               
				<!--<div class="white-box taller-box">
					<a class="info-link" href="tel:+51435149592"><div class="info-content centered">Crisis Centre /<br/>Centre de crise:<br/>514 351-49592</div></a>
					<div  class="phone-icon noclick"></div>
				</div>-->
          
          
                
                  
				
				
                <!--<div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">Parents Help Line /<br/>Ligne d'aide aux parent:<br/>  <a class='phone-link' href="tel:+18003615085"> 1 800 361-5085<a> <br/> <a class='phone-link' href="http://www.ligneparents.com"> www.ligneparents.com</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>
                
                  
				
                 <div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">Sexual Assault /<br/>Agression sexuelle:<br/>  <a class='phone-link' href="tel:+18889339007"> 1 888 933-9007<a> <br/> <a class='phone-link' href="http://www.agressionssexuelles.gouv.qc.ca/en/index.php"> www.agressionssexuelles.gouv.qc.ca</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>
         
				<div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">SOS Spousal Abuse /<br/>SOS Violence conjugale:<br/>  <a class='phone-link' href="tel:+18003639010"> 1 800 363-9010<a> <br/> <a class='phone-link' href="http://www.sosviolenceconjugale.ca">www.sosviolenceconjugale.ca</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>
               -->
               <!--next section-->
             
             
             
              
          
                
                    
             <!-- <div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">Elder Abuse <br/>  <a class='phone-link' href="tel:+5144892287"> 514 489-2287<a> <br/> <a class='phone-link' href="www.maltraitanceaines.gouv.qc.ca/en/">www.maltraitanceaines.gouv.qc.ca</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>-->
				
				
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
			
			
			<li class="item"><a href="information.php"><div class='item-text submenu-text'><div>HEALTH RESOURCES</div><div><!-- FRENCH HERE --></div></div> <div class="below-button noclick"> </div></a><div class="info-items" style="display:none;">
				
                <div class="white-box taller-box">
					<a class="info-link" href="tel:+18006168816"><div class="info-content centered"> Alzheimer Society</br>Soci&eacute;t&eacute; Alzheimer:<br/> 1 800 616-8816</div></a>
					<div class="phone-icon noclick"></div>
				</div>
                
                 <div class="white-box taller-box">
					<a class="info-link" href="tel:+18773030264"><div class="info-content-small centered"> AMI-Quebec Action on Mental Illness </br> Action sur la maladie mentale AMI-Quebec:<br/> 1 877 303-0264</div></a>
					<div class="phone-icon noclick"></div>
				</div>
               
               
                <div class="white-box taller-box">
					<a class="info-link" href="tel:+14183683301"><div class="info-content-small centered"> Integrated Center for Health & Social Services (CISSS) Gaspesie </br> Centre int&eacute;gr&eacute; de sant&eacute; et de services sociaux (CISSS) Gasp&eacute;sie :<br/> 418 368-3301</div></a>
					<div class="phone-icon noclick"></div>
				</div>
               
               
               <div class="white-box taller-box">
					<a class="info-link" href="tel:+18003630063"><div class="info-content-small centered"> 
                    
                    Quebec Cancer Foundation </br> Fondation qu&eacute;b&eacute;coise du cancer : 
                    
                    <br/> 1 800 363-0063</div></a>
					<div class="phone-icon noclick"></div>
				</div>
                
                
                
                <div class="white-box taller-box">
					<a class="info-link" href="tel:+18004630806"><div class="info-content-small centered"> 
                    
                   ACEQ (Cancer Association for Eastern Quebec)  </br>Association du cancer de l&rsquo;Est du Qu&eacute;bec (ACEQ): 
                  
                    <br/>  1 800 463-0806</div></a>
					<div class="phone-icon noclick"></div>
				</div>
                
                <div class="white-box taller-box">
					<a class="info-link" href="tel:+18776062136"><div class="info-content-small centered"> 
                    
                   LEUCAN (assistance for families dealing with child with cancer) </br> LEUCAN (pour familles avec enfant atteint du cancer) : 
                  
                  
                    
                    <br/>  1 877 606-2136</div></a>
					<div class="phone-icon noclick"></div>
				</div>
                
                
                <div class="white-box taller-box">
					<a class="info-link" href="tel:+18889393333"><div class="info-content-small centered"> 
                    
                   Canadian Cancer Society / Soci&eacute;t&eacute; canadienne du cancer 
                  
                  
                    
                    <br/>  1 888 939-3333</div></a>
					<div class="phone-icon noclick"></div>
				</div>
                
                
                
                
                
                
                
                
                
               
               
              <!--New section-->
              <div class="white-box-color">
				<div class="info-link"><div class="info-content-small centered">
                
               <b> If you live between l&rsquo;Anse-&agrave;-Valleau and Douglastown </br> Si vous demeurez entre l&rsquo;anse-&agrave;-valleau et Douglastown </b>
                
                
                
               <br/>    </div></div>
					
                    
                    
                    
                    
                    
                    
                    <div class="below-button noclick"></div>
				</div>
                
                
                
                 <div class="white-box taller-box">
					<a class="info-link" href="tel:+14183681566"><div class="info-content-small centered"> 
                    
                   Gaspe Cancer Foundation (l&rsquo;Anse-a-Valleau to Corner-of-the-Beach) </br>Foundation du cancer de Gaspe
                  
                  
                    
                    <br/>  418 368-1566 </div></a> <a class="info-link" href="tel:+14183683276"> <div class="info-content-small centered"> </br></br> </br></br>418 368-3276</div></a>
					<div class="phone-icon noclick"></div>
				</div>
                
                
                <div class="white-box taller-box">
					<a class="info-link" href="tel:+14183683301"><div class="info-content-small centered"> 
                    
                  Mi-Chemin Alcoholics &amp; Narcotics Anonymous </br>Mi-Chemin de Gasp&eacute;
                  
                 
                    
                    <br/>  418 368-3301</div></a>
					<div class="phone-icon noclick"></div>
				</div>
                
                
                 <div class="white-box taller-box">
					<a class="info-link" href="tel:+14183683301,3053"><div class="info-content-small centered"> 
                    
                  Cancer Liaison Nurse / Infirmi&egrave;re pivot en oncologie:
                  
                  
                    
                    <br/>   418 368-3301 Ext 3053</div></a>
					<div class="phone-icon noclick"></div>
				</div>
                
                
                
                
               <div class="white-box taller-box">
					<a class="info-link" href="tel:+14183682572"><div class="info-content-small centered"> 
                    
                  Gaspe CLSC / CLSC Gaspe:
                  
                
                    
                    <br/>   418 368-2572</div></a>
					<div class="phone-icon noclick"></div>
				</div>
              
              
              
               <div class="white-box taller-box">
					<a class="info-link" href="tel:+14183683301"><div class="info-content-small centered"> 
                    
                  Cote-de-Gaspe Health &amp; Social Services (CSSS) </br>CSSS Cote-de-Gaspe: 
                  
                
                    
                    <br/>  418 368-3301</div></a>
					<div class="phone-icon noclick"></div>
				</div>
              
              <!--new section-->
              
              <div class="white-box-color">
				<div class="info-link"><div class="info-content-small centered">
                
               <b> If you live between Saint-Georges-de-Malbaie and Port-Daniel </br>Si vous demeurez entre Saint-Georges-de-Malbaie et Port-Daniel </b>
                
              <br/>    </div></div>
               <div class="below-button noclick"></div>
				</div>
                
                
                 <div class="white-box taller-box">
					<a class="info-link" href="tel:+14183681566 "><div class="info-content-small centered"> 
                    
                  Gaspe Cancer Foundation (l&rsquo;Anse-a-Valleau to Corner-of-the-Beach) </br>Foundation du cancer de Gaspe : 
                  
               <br/>  418 368-1566 </div></a>
               <a class="info-link" href="tel:+14183683301"> <div class="info-content-small centered"> </br></br> </br></br>418 368-3276</div></a>
                    
                    
                    
					<div class="phone-icon noclick"></div>
				</div>
                
                
                <div class="white-box taller-box">
					<a class="info-link" href="tel:+14186892261,#2019 "><div class="info-content-small centered"> 
                    
                  Michel Lancup Foundation (Perce to Port Daniel)</br> Fondation Michel Lancup:
                  
               <br/>   418 689-2261 Ext #2019 </div></a>
               <a class="info-link" href="tel:+14186896737"> <div class="info-content-small centered"> </br></br> </br></br> 418 689-6737</div></a>
                    
                    
                    
					<div class="phone-icon noclick"></div>
				</div>
                
               <div class="white-box taller-box">
					<a class="info-link" href="tel:+14186892261,#2030"><div class="info-content-small centered"> 
                    
                  Cancer Liaison Nurse / Infirmi&egrave;re pivot en oncologie : 
                  
                  
                    
                    <br/>  418 689-2261 ext #2030 (&Eacute;milie Savard)</div></a>
					<div class="phone-icon noclick"></div>
				</div>
                
                
              
              <div class="white-box taller-box">
					<a class="info-link" href="tel:+141864525721"><div class="info-content-small centered"> 
                    
                  Barachois CLSC / CLSC Barachois :
                  
                
                    
                    <br/>  418 645-2572</div></a>
					<div class="phone-icon noclick"></div>
				</div>
              
              
              <div class="white-box taller-box">
					<a class="info-link" href="tel:+14183962572"><div class="info-content-small centered"> 
                    
                 Gascons CLSC / CLSC Gascons: 
                
                    
                    <br/>  418 396-2572</div></a>
					<div class="phone-icon noclick"></div>
				</div>
              
              
               <div class="white-box taller-box">
					<a class="info-link" href="tel:+14187822572"><div class="info-content-small centered"> 
                    
                 Perce CLSC / CLSC Perce:
                
                    
                    <br/>  418 782-2572</div></a>
					<div class="phone-icon noclick"></div>
				</div>
              
              
              <div class="white-box taller-box">
					<a class="info-link" href="tel:+14186892261"><div class="info-content-small centered"> 
                    
                 Rocher-Perce Health &amp; Social Services (CSSS) </br>CSSS Rocher-Perce
                
                    
                    <br/>  418 689-2261</div></a>
					<div class="phone-icon noclick"></div>
                    
                    
                 
				</div>
              
              
              
              <div class="white-box-color">
				<div class="info-link"><div class="info-content-small centered">
                
               <b> 
               
             If you live between Shigawake and Cascapedia-St-Jules </br>Si vous demeurez entre Shigawake et Cascapedia-St-Jules
               
               </b>
                
              <br/>    </div></div>
               <div class="below-button noclick"></div>
				</div>
              
               <div class="white-box taller-box">
					<a class="info-link" href="tel:+14187525995"><div class="info-content-small centered"> 
                    
                Linda Lemore-Brown Foundation (Cancer)</br>Fondation Linda Lemore-Brown (Cancer):
                
                    
                    <br/>  418 752-5995</div></a>
					<div class="phone-icon noclick"></div>
                    
                    
                 
				</div>
              
              
              <div class="white-box taller-box">
					<a class="info-link" href="tel:+14187593443"><div class="info-content-small centered"> 
                    
                Baie-des-Chaleurs Health &amp; Social Services Center (CSSS)</br> CSSS Baie-des-Chaleurs: 
                
                    
                    <br/>  418 759-3443</div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                   
                   
                   <div class="white-box taller-box">
					<a class="info-link" href="tel:+14187522572"><div class="info-content-small centered"> 
                    
               Paspebiac CLSC / CLSC Paspebiac: 
                
                    
                    <br/>  418 752-2572</div></a>
					<div class="phone-icon noclick"></div>
                   </div>
              
              <div class="white-box taller-box">
					<a class="info-link" href="tel:+14183882572"><div class="info-content-small centered"> 
                    
               Caplan CLSC / CLSC Caplan:
                
                    
                    <br/>  418 388-2572</div></a>
					<div class="phone-icon noclick"></div>
                   </div>
              
              <div class="white-box taller-box">
					<a class="info-link" href="tel:+14187593443,2402"><div class="info-content-small centered"> 
                    
               Cancer Liasion Nurse / Infirmi&egrave;re pivot en oncologie: 
                
                    
                    <br/>  418 759-3443 Ext #2402 (Marjo Cormier)</div></a>
					<div class="phone-icon noclick"></div>
                   </div>
              
              
              <div class="white-box-color">
				<div class="info-link"><div class="info-content-small centered">
                
               <b> 
               
             If you live between Gesgapegiag and l&rsquo;Ascension-de-Patap&eacute;dia</br> Si vous demeurez entre Gesgapegiag et l&rsquo;Ascension-de-Patap&eacute;dia
               
               </b>
                
              <br/>    </div></div>
               <div class="below-button noclick"></div>
				</div>
              
              
              <div class="white-box taller-box">
					<a class="info-link" href="tel:+14187593443"><div class="info-content-small centered"> 
                    Baie-des-Chaleurs Health &amp; Social Services Center (CSSS) </br> CSSS Baie-des-Chaleurs: 
                
                    
                    <br/>  418 759-3443</div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                   
                   
                   
                    <div class="white-box taller-box">
					<a class="info-link" href="tel:+14188652221"><div class="info-content-small centered"> 
                    Malauze CLSC (Matapedia) / CLSC Malauze (Matapedia):  
                
                    
                    <br/>  418 865-2221 </div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                   
                   
                   
                   
                   
                    <div class="white-box taller-box">
					<a class="info-link" href="tel:+14183647064  "><div class="info-content-small centered"> 
                    Saint Omer CLSC / CLSC Saint-Omer: 
                
                    
                    <br/>  418 364 -7064   </div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                   
                   
                   
                   
                   
                   <div class="white-box taller-box">
					<a class="info-link" href="tel:+14187885454 "><div class="info-content-small centered"> 
                    Pointe-a-la-Croix CLSC / CLSC Pointe-&agrave;-la-Croix: 
                
                    
                    <br/>  418 788-5454  </div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                   
                   
                   
                   
                   
                   
                    <div class="white-box taller-box">
					<a class="info-link" href="tel:+14187593443 "><div class="info-content-small centered"> 
                    Cancer Liasion Nurse </br> Infirmi&egrave;re pivot en oncologie: 
                
                    
                    <br/>  418 759-3443 Ext #2402 (Marjo Cormier)    </div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                   
                   
                   
                   
                   
              
                <!--<div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">NSCA : <br/>  <a class='phone-link' href='http://www.quebecnorthshore.org/'>www.quebecnorthshore.org<a> <br/> <a class='phone-link' href="tel:+4182961545 "> 418 296-1545 </a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>
			</div></li>-->
			<?php
            }
			
			?>
            
			<?php
			
			if ($useDropDown) {
				
			?>
			
			
			<li class="item"><a href="information.php"><div class='item-text submenu-text'><div>Information and Referral</div><div><!-- FRENCH HERE --></div></div> <div class="below-button noclick"> </div></a><div class="info-items" style="display:none;">
				<div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">NSCA : <br/>  <a class='phone-link' href='http://www.quebecnorthshore.org/'>www.quebecnorthshore.org<a> <br/> <a class='phone-link' href="tel:+4182961545 "> 418 296-1545 </a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>
			</div></li>
			<?php
			
			}
			
			?>
            
          <?php
			
			if ($useDropDown) {
				
			?>
			
			
			<li class="item"><a href="information.php"><div class='item-text submenu-text'><div>HEALTH RESOURCES</div><div><!-- FRENCH HERE --></div></div> <div class="below-button noclick"> </div></a><div class="info-items" style="display:none;">
				<div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">NSCA : <br/>  <a class='phone-link' href='http://www.quebecnorthshore.org/'>www.quebecnorthshore.org<a> <br/> <a class='phone-link' href="tel:+4182961545 "> 418 296-1545 </a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>
			</div></li>
			<?php
            }  
            ?>
		</ul>
	</body>

</html>
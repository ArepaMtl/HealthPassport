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
	height:130px;
	padding:0px;
	display:block;
	background-color:rgba(48, 212, 90, 0.68);

}
.white-box-color-taller{
	position:relative;
	margin:0px;
	margin-top:10px;
	height:120px;
	padding:0px;
	display:block;
	background-color:#CCC;

}

.white-box-colorB{
	
	position:relative;
	margin:0px;
	margin-top:10px;
	height:130px;
	padding:0px;
	display:block;
	background-color:rgba(89, 195, 239, 0.65);
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
					<a class="info-link" href="tel:+911"><div class="info-content centered">Emergencies / Urgences</br>911</div></a>
					<div class="phone-icon noclick"></div>
				</div>
                
                <div class="white-box taller-box">
					<a class="info-link" href="tel:+811"><div class="info-content centered">Health Info <br/>Info-Sant&eacute;<br/>811</div></a>
					<div class="phone-icon noclick"></div>
				</div>
                
                <div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">Qu&eacute;bec Poison Control <br/>Centre anti-poison du Qu&eacute;bec<br/>  <a class='phone-link' href="tel:+18004635060"> 1 800 463-5060<a> <br/> <a class='phone-link' href="https://www.santemontreal.qc.ca/en/public/support-and-services/poison-control-centre/"> www.santemontreal.qc.ca</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>
                
                <div class="white-box">
					<a class="info-link" href="tel:+18662773553"><div class="info-content-small centered"> <b>Suicide Prevention </br> La pr&eacute;vention du suicide </b><br/> 1 866 277-3553</div></a>
					<div class="phone-icon noclick"></div>
				</div>
                
                <div class="white-box">
					<a class="info-link" href="tel:*4141"><div class="info-content-small centered"> <b>Police </br> S&ucirc;ret&eacute; du Qu&eacute;bec </b><br/>310-4141 </br>(If calling from a cellphone dial *4141) </div></a>
					<div class="phone-icon noclick"></div>
				</div>
                
               
			
			</div></li>
			
            <?php
			
			if ($useDropDown) {
				
			?>
			
			
			<li class="item"><a href="information.php"><div class='item-text submenu-text'><div>HEALTH RESOURCES</div><div><!-- FRENCH HERE --></div></div> <div class="below-button noclick"> </div></a><div class="info-items" style="display:none;">
				
                <div class="white-box taller-box">
					<a class="info-link" href="tel:+18006168816"><div class="info-content centered"> Alzheimer Society</br>Soci&eacute;t&eacute; Alzheimer<br/> 1 800 616-8816</div></a>
					<div class="phone-icon noclick"></div>
				</div>
                
                 <div class="white-box taller-box">
					<a class="info-link" href="tel:+18773030264"><div class="info-content-small centered"> AMI-Qu&eacute;bec Action on Mental Illness </br> Action sur la maladie mentale AMI-Quebec<br/> 1 877 303-0264</div></a>
					<div class="phone-icon noclick"></div>
				</div>
               
               
                <div class="white-box taller-box">
					<a class="info-link" href="tel:+14183683301"><div class="info-content-small centered"> Integrated Center for Health & Social Services (CISSS) Gasp&eacute;sie </br> Centre Int&eacute;gr&eacute; de Sant&eacute; et de Services Sociaux (CISSS) Gasp&eacute;sie<br/> 418 368-3301</div></a>
					<div class="phone-icon noclick"></div>
				</div>
               
               
               <div class="white-box taller-box">
					<a class="info-link" href="tel:+18003630063"><div class="info-content-small centered"> 
                    
                    Qu&eacute;bec Cancer Foundation </br> Fondation Qu&eacute;b&eacute;coise du cancer 
                    
                    <br/> 1 800 363-0063</div></a>
					<div class="phone-icon noclick"></div>
				</div>
                
                
                
                <div class="white-box taller-box">
					<a class="info-link" href="tel:+18004630806"><div class="info-content-small centered"> 
                    
                   ACEQ (Cancer Association for Eastern Qu&eacute;bec)  </br>Association du cancer de l&rsquo;Est du Qu&eacute;bec (ACEQ) 
                  
                    <br/>  1 800 463-0806</div></a>
					<div class="phone-icon noclick"></div>
				</div>
                
                <div class="white-box taller-box">
					<a class="info-link" href="tel:+18776062136"><div class="info-content-small centered"> 
                    
                   LEUCAN (Assistance for families dealing with a child with cancer) </br> LEUCAN (Pour familles avec enfant atteint du cancer) 
                  
                  
                    
                    <br/>  1 877 606-2136</div></a>
					<div class="phone-icon noclick"></div>
				</div>
                
                
                <div class="white-box taller-box">
					<a class="info-link" href="tel:+18889393333"><div class="info-content-small centered"> 
                    
                   Canadian Cancer Society </br> Soci&eacute;t&eacute; canadienne du cancer 
                  
                  
                    
                    <br/>  1 888 939-3333</div></a>
					<div class="phone-icon noclick"></div>
				</div>
                
                
                
                
                
                
                
                
                
               
               
              <!--New sub section-->
              <div class="white-box-color">
				<div class="info-link"><div class="info-content-small centered">
                
               <b> If you live between L&rsquo;Anse-&agrave;-Valleau and Douglastown </br> Si vous demeurez entre L&rsquo;Anse-&agrave;-Valleau et Douglastown </b>
                
<br/>    </div></div>
					
                    <div class="below-button noclick"></div>
				</div>
                
                
                
                
               <div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">
                    
                    
                   Gasp&eacute;  Cancer Foundation (L&rsquo;Anse-&agrave;-Valleau to Corner-of-the-Beach) </br>Fondation du cancer de Gasp&eacute;  <a class='phone-link' href="tel:+4183681566"> </br> 418 368-1566<a> <br/> <a class='phone-link' href="tel:+14183683276"> 418 368-3276</a> </div></div>
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
                    
                  Cancer Liaison Nurse / Infirmi&egrave;re pivot en oncologie
                  
                  
                    
                    <br/>   418 368-3301 Ext 3053</div></a>
					<div class="phone-icon noclick"></div>
				</div>
                
                
                
                
               <div class="white-box taller-box">
					<a class="info-link" href="tel:+14183682572"><div class="info-content-small centered"> 
                    
                  Gasp&eacute;  CLSC / CLSC Gasp&eacute; 
                  
                
                    
                    <br/>   418 368-2572</div></a>
					<div class="phone-icon noclick"></div>
				</div>
              
              
              
               <div class="white-box taller-box">
					<a class="info-link" href="tel:+14183683301"><div class="info-content-small centered"> 
                    
                  C&ocirc;te-de-Gasp&eacute; Health &amp; Social Services (CSSS) </br>CSSS C&ocirc;te-de-Gasp&eacute;  
                  
                
                    
                    <br/>  418 368-3301</div></a>
					<div class="phone-icon noclick"></div>
				</div>
              
              <!--new sub section-->
              
              <div class="white-box-color">
				<div class="info-link"><div class="info-content-small centered">
                
               <b> If you live between Saint-Georges-de-Malbaie and Port-Daniel </br>Si vous demeurez entre Saint-Georges-de-Malbaie et Port-Daniel </b>
                
              <br/>    </div></div>
               <div class="below-button noclick"></div>
				</div>
                
                
                
                   
               <div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">
                    
                    
                    Gasp&eacute;  Cancer Foundation (L&rsquo;Anse-&agrave;-Valleau to Corner-of-the-Beach) </br>Fondation du cancer de Gasp&eacute;  
                    <a class='phone-link' href="tel:+14183681566"> </br> 418 368-1566<a> <br/> <a class='phone-link' href="tel:+14183683276"> 418 368-3276</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>
                
                <!--new number format-->
                <div class="white-box taller-box">
					<div class="info-link"><div class="info-content-small centered">
                    
                    
                    Michel Lancup Foundation (Perc&eacute; to Port-Daniel)</br> Fondation Michel Lancup
                    <a class='phone-link' href="tel:+14186892261,2019"> </br>  418 689-2261 Ext #2019<a> <br/> <a class='phone-link' href="tel:+14186896737"> 418 689-6737</a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>
                
              
                
                
               
                
               <div class="white-box taller-box">
					<a class="info-link" href="tel:+14186892261,2030"><div class="info-content-small centered"> 
                    
                  Cancer Liaison Nurse / Infirmi&egrave;re pivot en oncologie  
                  
                  
                    
                    <br/>  418 689-2261 ext #2030 (&Eacute;milie Savard)</div></a>
					<div class="phone-icon noclick"></div>
				</div>
                
                
              
              <div class="white-box taller-box">
					<a class="info-link" href="tel:+141864525721"><div class="info-content-small centered"> 
                    
                  Barachois CLSC / CLSC Barachois 
                  
                
                    
                    <br/>  418 645-2572</div></a>
					<div class="phone-icon noclick"></div>
				</div>
              
              
              <div class="white-box taller-box">
					<a class="info-link" href="tel:+14183962572"><div class="info-content-small centered"> 
                    
                 Gascons CLSC / CLSC Gascons 
                
                    
                    <br/>  418 396-2572</div></a>
					<div class="phone-icon noclick"></div>
				</div>
              
              
               <div class="white-box taller-box">
					<a class="info-link" href="tel:+14187822572"><div class="info-content-small centered"> 
                    
                 Perc&eacute; CLSC / CLSC Perc&eacute;
                
                    
                    <br/>  418 782-2572</div></a>
					<div class="phone-icon noclick"></div>
				</div>
              
              
              <div class="white-box taller-box">
					<a class="info-link" href="tel:+14186892261"><div class="info-content-small centered"> 
                    
                 Rocher-Perc&eacute; Health &amp; Social Services (CSSS) </br>CSSS Rocher-Perc&eacute;
                
                    
                    <br/>  418 689-2261</div></a>
					<div class="phone-icon noclick"></div>
                    
                    
                 
				</div>
              
              <!--new sub section-->
              
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
                    
                Linda LeMore-Brown Foundation (Cancer)</br>Fondation Linda LeMore-Brown (Cancer)
                
                    
                    <br/>  418 752-5995</div></a>
					<div class="phone-icon noclick"></div>
                    
                    
                 
				</div>
              
              
              <div class="white-box taller-box">
					<a class="info-link" href="tel:+14187593443"><div class="info-content-small centered"> 
                    
                Baie-des-Chaleurs Health &amp; Social Services (CSSS)</br> CSSS Baie-des-Chaleurs 
                
                    
                    <br/>  418 759-3443</div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                   
                   
                   <div class="white-box taller-box">
					<a class="info-link" href="tel:+14187522572"><div class="info-content-small centered"> 
                    
               Pasp&eacute;biac CLSC / CLSC Pasp&eacute;biac 
                
                    
                    <br/>  418 752-2572</div></a>
					<div class="phone-icon noclick"></div>
                   </div>
              
              <div class="white-box taller-box">
					<a class="info-link" href="tel:+14183882572"><div class="info-content-small centered"> 
                    
               Caplan CLSC / CLSC Caplan
                
                    
                    <br/>  418 388-2572</div></a>
					<div class="phone-icon noclick"></div>
                   </div>
              
              <div class="white-box taller-box">
					<a class="info-link" href="tel:+14187593443,2402"><div class="info-content-small centered"> 
                    
               Cancer Liasion Nurse / Infirmi&egrave;re pivot en oncologie 
                
                    
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
                    Baie-des-Chaleurs Health &amp; Social Services (CSSS) </br> CSSS Baie-des-Chaleurs
                
                    
                    <br/>  418 759-3443</div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                   
                   
                   
                    <div class="white-box taller-box">
					<a class="info-link" href="tel:+14188652221"><div class="info-content-small centered"> 
                    Malauze CLSC (Matap&eacute;dia) / CLSC Malauze (Matap&eacute;dia)  
                
                    
                    <br/>  418 865-2221 </div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                   
                   
                   
                   
                   
                    <div class="white-box taller-box">
					<a class="info-link" href="tel:+14183647064  "><div class="info-content-small centered"> 
                    Saint-Omer CLSC / CLSC Saint-Omer
                
                    
                    <br/>  418 364 -7064   </div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                   
                   
                   
                   
                   
                   <div class="white-box taller-box">
					<a class="info-link" href="tel:+14187885454 "><div class="info-content-small centered"> 
                    Pointe-&agrave;-la-Croix CLSC / CLSC Pointe-&agrave;-la-Croix
                
                    
                    <br/>  418 788-5454  </div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                   
                   
                   
                   
                   
                   
                    <div class="white-box taller-box">
					<a class="info-link" href="tel:+14187593443,2402"><div class="info-content-small centered"> 
                    Cancer Liasion Nurse </br> Infirmi&egrave;re pivot en oncologie 
                
                    
                    <br/>  418 759-3443 Ext #2402 (Marjo Cormier)    </div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                   </li>
                   
                   
                   
                   
              
              
			</div></li>
			<?php
            }
			
			?>
            
			<?php
			
			if ($useDropDown) {
				
			?>
			
			
			<li class="item"><a href="information.php"><div class='item-text submenu-text'><div>SUPPORT RESOURCES</div><div><!-- FRENCH HERE --></div></div> <div class="below-button noclick"> </div></a><div class="info-items" style="display:none;">
				
                
                
                  <div class="white-box taller-box">
					<a class="info-link" href="tel:+14183686686 "><div class="info-content-small centered"> 
                    CALACS Women &amp; Youth Sexual Assault Help Centre </br> Centre d&rsquo;aide et lutte contre les agressions &agrave; caract&egrave;re sexuel (CALACS) 
                
                    
                    <br/>  418 368-6686     </div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                
                <div class="white-box taller-box">
					<a class="info-link" href="tel:+18664666379  "><div class="info-content-small centered"> 
                    Men Sexual Assault Victims</br>Les hommes victimes d&rsquo;agression sexuelle 
                
                    
                    <br/>  1 866 466-6379     </div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                
                
                
                
                
                
                <div class="white-box taller-box">
					<a class="info-link" href="tel:+18889339007  "><div class="info-content-small centered"> 
                    Victims of Sexual Assault &amp; Incest Survivors </br> Les victimes d&rsquo;agression sexuelle et survivants d&rsquo;inceste  
                
                    
                    <br/>  1 888 933-9007      </div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                
                
                
                <div class="white-box taller-box">
					<a class="info-link" href="tel:+18665322822   "><div class="info-content-small centered"> 
                    CAVAC (Crisis Help Line for Victims of Criminal Acts) </br> CAVAC (Centre d&rsquo;aide aux victimes d&rsquo;actes criminels)  
                
                    
                    <br/>  1 866 532-2822      </div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                
                
                
                
                 <div class="white-box taller-box">
					<a class="info-link" href="tel:+18665322822   "><div class="info-content-small centered"> 
                    Parent Help Line / Ligne Parents  
                
                    
                    <br/>  1 800 361-5085     </div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                
                
                
                 <div class="white-box taller-box">
					<a class="info-link" href="tel:+18665322822   "><div class="info-content-small centered"> 
                  Drug &amp; Alcohol Help Line </br>Aide et reference d&eacute;pendances
                
                    
                    <br/>  1 800 265-2626   </div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                
                
                 <div class="white-box taller-box">
					<a class="info-link" href="tel:+18003639010   "><div class="info-content-small centered"> 
                  SOS Spousal Abuse / SOS violence conjugale 
                
                    
                    <br/>  1 800 363-9010    </div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                
                
                <!--here new sub-->
                
                
                 <div class="white-box-colorB">
				<div class="info-link"><div class="info-content-small centered">
                
               <b> 
               
             If you live between L&rsquo;Anse-&agrave;-Valleau and Douglastown </br> Si vous demeurez entre L&rsquo;Anse-&agrave;-Valleau et Douglastown &hellip;
               
               </b>
                
              <br/>    </div></div>
               <div class="below-button noclick"></div>
				</div>
                
                
                
                 <div class="white-box taller-box">
					<a class="info-link" href="tel:+14183684700"><div class="info-content-small centered"> 
                  Accueil Blanche Goulet (Homeless shelter &amp; food bank) </br> Accueil Blanche Goulet (Foyer pour sans-abri &amp; banque alimentaire)  
                
                    
                    <br/>  418 368-4700    </div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                
                 <div class="white-box taller-box">
					<a class="info-link" href="tel:+14183686324"><div class="info-content-small centered"> 
                  TAC Adapted Public Transit Service </br> Transport adapt&eacute; et collectif (TAC) 
                
                    
                    <br/>  418 368-6324    </div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                
                
                
                 <div class="white-box taller-box">
					<a class="info-link" href="tel:+14183686028"><div class="info-content-small centered"> 
                  Family House Gasp&eacute; </br> Maison de la famille Parenfant Gasp&eacute;
                
                    
                    <br/>  418 368-6028    </div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                
                
                <div class="white-box taller-box">
					<a class="info-link" href="tel:+14183682104 "><div class="info-content-small centered"> 
                  Town of Gasp&eacute; / Ville de Gasp&eacute;
                
                    
                    <br/>  418 368-2104   </div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                   
                   
                    <div class="white-box taller-box">
					<a class="info-link" href="tel:+14183686634 "><div class="info-content-small centered"> 
                  CAB (Centre d&rsquo;Action B&eacute;n&eacute;vole) L&rsquo;Anse-&agrave;-Valleau to Corner-of-the-Beach </br> CAB Le Hauban (L&rsquo;Anse-&agrave;-Valleau Coin-du-Banc)
                
                    
                    <br/>  418 368-6634  </div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                   
                    <div class="white-box taller-box">
					<a class="info-link" href="tel:+14183683212 "><div class="info-content-small centered"> 
                  
Vision Gasp&eacute; Perc&eacute; Now (VGPN) 

                
                    
                    <br/>  418 368-3212  </div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                   
                  <!-- <div class="white-box taller-box">
					<a class="info-link" href="tel:+18883932610  "><div class="info-content-small centered"> 
                  
Multi-Services (Help at Home) </br> Multi-Services (soins &agrave; domicile) 

                
                    
                    <br/>  1 888 393-2610   </div></a>
					<div class="phone-icon noclick"></div>
                   </div>-->
                   
                   
                   <div class="white-box taller-box">
					<a class="info-link" href="tel:+18883932610  "><div class="info-content-small centered"> 
                  
Multi-Services (Help at Home) </br> Multi-Services (Soins &agrave; domicile) 

                
                    
                    <br/>  1 888 393-2610   </div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                   
                   <!--Here new sub-->
                   
                   
                   
                 <div class="white-box-colorB">
				<div class="info-link"><div class="info-content-small centered">
                
               <b> 
               
             If you live between Saint-Georges-de-Malbaie and Port-Daniel </br> Si vous demeurez entre Saint-Georges-de-Malbaie et Port-Daniel 
               
               </b>
                
              <br/>    </div></div>
               <div class="below-button noclick"></div>
				</div>
                   
                   
                   <div class="white-box taller-box">
					<a class="info-link" href="tel:+14183686634"><div class="info-content-small centered"> 
                  
CAB (Centre d&rsquo;Action B&eacute;n&eacute;vole) L&rsquo;Anse-&agrave;-Valleau to Corner-of-the-Beach</br>CAB Le Hauban (L&rsquo;Anse-&agrave;-Valleau Coin-du-Banc) 

                
                    
                    <br/>  418 368-6634   </div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                   
                   
                   
                   <div class="white-box taller-box">
					<a class="info-link" href="tel:+14186896023"><div class="info-content-small centered"> 
                  
CAB (Centre d&rsquo;Action B&eacute;n&eacute;vole) Gascons-Perc&eacute;</br> CAB (Centre d&rsquo;action b&eacute;n&eacute;vole) Gascons-Perc&eacute; 

                
                    
                    <br/>  418 689-6023   </div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                   
                  
                  
                    <div class="white-box taller-box">
					<a class="info-link" href="tel:+14187525577"><div class="info-content-small centered"> 
                  
CAB (Centre d&rsquo;Action B&eacute;n&eacute;vole) Saint-Sim&eacute;on Port-Daniel </br> CAB (Centre d&rsquo;action b&eacute;n&eacute;vole) Saint-Sim&eacute;on Port-Daniel 
                
                    
                    <br/>  418 752-5577 </div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                   
                    <div class="white-box taller-box">
					<a class="info-link" href="tel:+14186894144"><div class="info-content-small centered"> 
                  
Transport des Anses (Transportation Service) </br> Transport des Anses 
                    
                    <br/>  418 689-4144 </div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                   
                   
                    <div class="white-box taller-box">
					<a class="info-link" href="tel:+14186895722"><div class="info-content-small centered"> 
                  
Senior Association MRC Rocher-Perc&eacute; (Perc&eacute; to Port-Daniel) </br> Association des a&icirc;n&eacute;s de la MRC Rocher-Perc&eacute;
                    
                    <br/>  418 689-5722  </div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                   
                 
                 
                  <!--Here new sub-->
                   
                   
                   
                 <div class="white-box-colorB">
				<div class="info-link"><div class="info-content-small centered">
                
               <b> 
               
             If you live between Shigawake and Cascapedia-St-Jules </br>Si vous demeurez entre Shigawake et Cascapedia-St-Jules
               
               </b>
                
              <br/>    </div></div>
               <div class="below-button noclick"></div>
				</div>
                   
                    
                    
                    <div class="white-box taller-box">
					<a class="info-link" href="tel:+14185343751 "><div class="info-content-small centered"> 
                  
Entre-Tiens Chaleurs (Home Services) </br> Entre-Tiens Chaleurs (Soins &agrave; domicile)
                    <br/> 418 534-3751  </div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                   
                   
                   
                    <div class="white-box taller-box">
					<a class="info-link" href="tel:+14187593131 "><div class="info-content-small centered"> 
                  
CAB (Centre d&rsquo;Action B&eacute;n&eacute;vole) Saint-Alphonse Nouvelle</br> CAB (Centre d&rsquo;action b&eacute;n&eacute;vole) Saint-Alphonse Nouvelle 
                    
                    <br/> 418 759-3131  </div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                   
                    
                     <div class="white-box taller-box">
					<a class="info-link" href="tel:+18775343325  "><div class="info-content-small centered"> 
    
Transport Bonaventure Avignon 

                    <br/>  1 877 534-3325  </div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                   
                    
                    
                    <!--Here new sub-->
                   
                   
                   
                 <div class="white-box-colorB">
				<div class="info-link"><div class="info-content-small centered">
                
               <b> 
               
             If you live between Gesgapegiag and L&rsquo;Ascension-de-Patap&eacute;dia </br>Si vous demeurez entre Gesgapegiag et L&rsquo;Ascension-de-Patap&eacute;dia
               
               </b>
                
              <br/>    </div></div>
               <div class="below-button noclick"></div>
				</div> 
                   
                   
                
                  <div class="white-box taller-box">
					<a class="info-link" href="tel:+14187593131"><div class="info-content-small centered"> 
    
CAB (Centre d&rsquo;Action B&eacute;n&eacute;vole) Saint-Alphonse Nouvelle </br> CAB (Centre d&rsquo;action b&eacute;n&eacute;vole) Saint-Alphonse Nouvelle

                    <br/>  418 759-3131 </div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                
                
                 <div class="white-box taller-box">
					<a class="info-link" href="tel:+14188652740"><div class="info-content-small centered"> 
    
CAB (Centre d&rsquo;Action B&eacute;n&eacute;vole) Ascension Escuminac </br> CAB (Centre d&rsquo;action b&eacute;n&eacute;vole) Ascension Escuminac 

                    <br/>  418 865-2740  </div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                
                
                <div class="white-box taller-box">
					<a class="info-link" href="tel:+18773646760"><div class="info-content-small centered"> 
    
Entre-Tiens Avignon (Home Services) </br>Entre-Tiens Avignon (Soins &agrave; domicile)  

                    <br/>  1 877 364-6760 </div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                
                
                  <div class="white-box taller-box">
					<a class="info-link" href="tel:+18775343325"><div class="info-content-small centered"> 
    
Transport Bonaventure Avignon 

                    <br/>  1 877 534-3325  </div></a>
					<div class="phone-icon noclick"></div>
                   </div>
                
                
                
                
                
                
     
			</div></li>
			<?php
			
			}
			
			?>
            
          <?php
			
			if ($useDropDown) {
				
			?>
			
			
			<li class="item"><a href="information.php"><div class='item-text submenu-text'><div>Information and Referral</div><div><!-- FRENCH HERE --></div></div> <div class="below-button noclick"> </div></a><div class="info-items" style="display:none;">
            
            
                <div class="white-box taller-box">
					<a class="info-link" href="tel:+14187525995"><div class="info-content-small centered"> 
    
<b>CASA </br>(Committee for Anglophone Social Action)</b>


                    <br/>  418 752-5995   </div></a>
					<div class="phone-icon noclick"></div>
                   </div> 
                
                <div class="white-box taller-box">
					<a class="info-link" href="tel:+18777525995 "><div class="info-content-small centered"> 
    
<b>TOLL FREE </b>


                    <br/>  1 877 752-5995   </div></a>
					<div class="phone-icon noclick"></div>
                   </div> 
                
            
             <div class="white-box taller-box">
             
					<div class="info-link"><div class="info-content-small centered"> <b>Website</b> <br/>  <a class='phone-link' href="http://www.casa-gaspe.com/"> www.casa-gaspe.com<a> <br/> 
                    
                    <a class='phone-link' href="https://www.facebook.com/groups/548155035288065/"> <b>Facebook </b></br> <b>CASA</b> &ndash; Committee for Anglophone Social Action </a> </div></div>
					<div class="phone-icon noclick"></div>
				</div>
            
				
			</div></li>
			<?php
            }  
            ?>
		</ul>
	</body>

</html>
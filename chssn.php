<!DOCTYPE html>
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

  
  		$(document).ready(function(){
			
			var setEnglish = function(){
				
				$(".lng-en").css("display","block");
				$(".lng-fr").css("display","none");
				
				$("#fr-button").removeClass("selected-lang");
				$("#en-button").addClass("selected-lang");
				
			};
			
			var setFrench = function(){
				
				$(".lng-fr").css("display","block");
				$(".lng-en").css("display","none");
				
				$("#en-button").removeClass("selected-lang");
				$("#fr-button").addClass("selected-lang");
				
			};
			
			$("#en-button").click(function(){
				
				setEnglish();
				
			});
			
			$("#fr-button").click(function(){
				
				setFrench();
				
			});
		})
  
  </script>
	</head>
	<body>
     <div class="top-bar">
		 <h1 data-localize="information.title" class='centered'> ABOUT </h1>	
	 	<a href="index.php" id="back-button"></a>
	 </div>
	 <ul id="menuchssn">
			<!--<li class="item"><a href="phone_numbers.php" data-localize="importantphone.link"> Important phone numbers/Num&eacute;ros de t&eacute;l&eacute;phone importants</a><a href="phone_numbers.php" class="below-button"> </a></li>
			<li class="item"><a href="chssn.php" data-localize="chssn.link"> Chssn </a> <a href="chssn.php" class="below-button"> </a></li>-->
			
			<li class="item" id="language-pane"><div id="en-button" class="selected-lang"><div class='centered'>English</div></div><div id="fr-button"><div class='centered'>Fran&ccedil;ais</div></div></li>
			
			<li class="item"><a href="chssn.php" class='chssn-title-bar'><div class='item-text submenu-text'><div id='chssn-title'></div><div><div class='lng-en'>The East Island Network </br> for English-Language Services
</div><div class='lng-fr'>Le r&eacute;seau de l'est de l'&icirc;le  </br>pour les services en anglais</div></div></div> <div class="below-button noclick"> </div></a><div class="info-items">
				<div class="dynamic-size-box">
					
				<div class='lng-en'>
					REISA (The East Island Network for English-Language Services), a community organization, works to increase access to health and social services in English for residents of Montreal&rsquo;s east-end, through collaboration with public, private and community stakeholders.


					
					<!--<b>CHSSN Contact Information</b><br/><br/>
					
					<a href='http://www.chssn.org' class="health-pass-link">www.chssn.org</a><br/><br/>
					<a href='mailto:info@chssn.org' class="health-pass-link">info@chssn.org</a><br/><br/>
					<b>Phone:</b> <a href='tel:+14186842289' class="health-pass-link">418-684-2289</a><br/><br/>
					<b>Address:</b> 1270, Chemin Ste-Foy, Suite 2106, Quebec, QC G1S 2M4-->
				</div>
				
				<div class='lng-fr'>
					REISA (Le r&eacute;seau de l'est de l'&icirc;le pour les services en anglais), un organisme communautaire, collabore avec des partenaires publics et communautaires pour am&eacute;liorer et promouvoir l&rsquo;acc&egrave;s &agrave; des services de sant&eacute; et des services sociaux en anglais dans l&rsquo;Est de Montr&eacute;al. 
					<!--<b>CHSSN Contact Information</b><br/><br/>
					
					<a href='http://www.chssn.org' class="health-pass-link">www.chssn.org</a><br/><br/>
					<a href='mailto:info@chssn.org' class="health-pass-link">info@chssn.org</a><br/><br/>
					<b>Phone:</b> <a href='tel:+14186842289' class="health-pass-link">418-684-2289</a><br/><br/>
					<b>Address:</b> 1270, Chemin Ste-Foy, Suite 2106, Quebec, QC G1S 2M4-->
				</div>
					
				</div>
			</div></li>
			
			<li class="item"><a href="chssn.php" class='chssn-title-bar'><div class='item-text submenu-text'><div>Health Passport</div><div>Information passeport sant&eacute;</div></div> <div class="below-button noclick"> </div></a><div class="info-items">
				<div class="dynamic-size-box">
					
					<div class='lng-en'>
						This Health Passport App is designed to help you and your family keep track of 
						essential health information. It also puts helpful words and phrases in French at your fingertips 
						when you go to clinic or an emergency.					
					</div>
					
					<div class='lng-fr'>
					Cette application de Passeport Sant&eacute; est faite pour vous aider, vous et votre famille, &agrave;
					suivre l'information essentielle sur la sant&eacute;. Elle vous permet aussi d'avoir sous la main
					des mots et expressions utiles en fran&ccedil;ais quand vous allez &agrave; la clinique ou &agrave; l'urgence.

					

				</div>

				</div>
			</div></li>
			
			<li class="item"><a href="chssn.php" class='chssn-title-bar'><div class='item-text submenu-text'><div><div class='lng-en'>Credits<br/>Thanks</div><div class='lng-fr'>Cr&eacute;dits<br/>Merci</div></div><div></div></div> <div class="below-button noclick"> </div></a><div class="info-items">
				<div class="dynamic-size-box">
					
					<div class='lng-en'>
					This electronic version of the Health Passport App has happened thanks to the collaboration of a 
					few organizations:<br/><br/>
                    	-MCDC (Megantic English-speaking Community Development Corporation) for creating the original paper version<br/>
                    	-VEQ (Voice of English-speaking Qu&eacute;bec) and Jeffery Hale Community Services for producing a revised second 
                    	paper version and for helping to bring this electronic version to life.<br/>
                    	-Health Canada, and the financial support of their Official Languages Support Program in particular, for making all of this work possible<br/><br/>

                    Special thanks to our technical development and support team in Montr&eacute;al, Qu&eacute;bec, Canada:<br/><br/>

					-Alexandra Lemus<br/>
					-Gabriela Su&eacute;<br/>
					-Mariolys Rivas<br/>
					-Adolfo Rodr&iacute;guez<br/>
					
					</div>
					
					<div class='lng-fr'>
				    Cette version &eacute;lectronique de l'application du Passeport Sant&eacute; a vu le jour gr&acirc;ce &agrave; la collaboration de quelques organismes&nbsp;: <br/> <br/>

					-MCDC (Corporation de d&eacute;veloppement de la communaut&eacute; d'expression anglaise de M&eacute;gantic), auteur de la version imprim&eacute;e originale;  <br/>
					-VEQ (Voice of English-speaking Qu&eacute;bec) et les Services communautaires Jeffery Hale, qui ont produit une deuxi&egrave;me version imprim&eacute;e r&eacute;vis&eacute;e et qui ont contribu&eacute; &agrave; la cr&eacute;ation de cette version &eacute;lectronique;  <br/>
					-Sant&eacute; Canada, et le soutien financier de leur Programme d'appui aux langues officielles en particulier, qui ont permis la r&eacute;alisation de tout ce travail.<br /><br/>


					Nous remercions tout particuli&egrave;rement notre &eacute;quipe de soutien et de d&eacute;veloppement technique &agrave; Montr&eacute;al (Qu&eacute;bec, Canada): <br/><br/>
					-Alexandra Lemus<br/>
					-Gabriela Su&eacute;<br/>
					-Mariolys Rivas<br/>
					-Adolfo Rodr&iacute;guez<br/>
					
					</div>
					
				</div>
			</div></li>
			
			
			
			
		</ul>
	</body>

</html>
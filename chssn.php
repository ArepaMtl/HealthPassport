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
			
			
			<li class="item"><a href="chssn.php" class='chssn-title-bar'><div class='item-text submenu-text'><div id='chssn-title'></div><div><div class='lng-en'></div><div class='lng-fr'></div></div></div> <div class="below-button noclick"> </div></a><div class="info-items">
				<div class="dynamic-size-box">
			
					
					
				<div class='lng-en'>
					Jeffery Hale - Saint Brigid's is a public institution that provides a wide range of primary health care services in French and English to the population of the Capitale-Nationale (Greater Quebec City) region.<br/> <br/>
					<!--The Community Health and Social Services Network (CHSSN) is a network over 60 community resources, associations, foundations, public institutions and other stakeholders dedicated to creating partnerships that enhance health and social services for English-speaking communities in Quebec.<br/><br/>
					Le R&#233;seau communautaire de sant&#233; et de services sociaux est un r&#233;seau de plus de 60 ressources communautaires, des associations, des fondations, des institutions publiques et d&#39;autres intervenants d&#233;di&#233;s &#224; la cr&#233;ation de partenariats qui am&#233;liorent les services sociaux et de sant&#233; pour les communaut&#233;s anglophones du Qu&#233;bec.<br/><br/>-->
				</div>
				
				<div class='lng-fr'>
					L&#x27;H&#xF4;pital Jeffery Hale - Saint Brigid&#x27;s est un &#xE9;tablissement public qui offre une grande vari&#xE9;t&#xE9; de services de soins de sant&#xE9; primaires en fran&#xE7;ais et en anglais &#xE0; la population de la r&#xE9;gion de la Capitale-Nationale (grande r&#xE9;gion de Qu&#xE9;bec).
					<!--The Community Health and Social Services Network (CHSSN) is a network over 60 community resources, associations, foundations, public institutions and other stakeholders dedicated to creating partnerships that enhance health and social services for English-speaking communities in Quebec.<br/><br/>
					Le R&#233;seau communautaire de sant&#233; et de services sociaux est un r&#233;seau de plus de 60 ressources communautaires, des associations, des fondations, des institutions publiques et d&#39;autres intervenants d&#233;di&#233;s &#224; la cr&#233;ation de partenariats qui am&#233;liorent les services sociaux et de sant&#233; pour les communaut&#233;s anglophones du Qu&#233;bec.<br/><br/>-->
					
				</div>
				
					
				</div>
			</div></li>
			
			<!--<li class="item"><a href="chssn.php" class='chssn-title-bar'><div class='item-text submenu-text'><div>Health Passport</div><div>Information passeport sant&eacute;</div></div> <div class="below-button noclick"> </div></a><div class="info-items">
				<div class="dynamic-size-box">
					
					<div class='lng-en'>
					This Health Passport App is designed to help you and your family keep track of essential health information. 
					It also puts helpful words and phrases in French at your fingertips when you go to clinic or an emergency. 

					CHSSN got its inspiration for this online App from a paper version of the Health Passport created a 
					few years ago by MCDC, an organization serving the English-speaking community of the 
					Chaudi&egrave;re-Appalaches region of Qu&eacute;bec. 
					MCDC realized that carrying a pocket guide with personal health information and basic 
					vocabulary could improve the outcome of visits to French-speaking health care professionals, 
					and ultimately, improve your health. 

					Their paper model has been adopted in several regions of Quebec and by two Francophone communities in 
					Canada (in Newfoundland and Yukon). As for CHSSN's Health Passport App, who knows how far it will go?
					
					</div>
					
					<div class='lng-fr'>
					Cette App Passeport Sant&eacute; est con&ccedil;u pour aider vous et votre famille &agrave; garder une trace des 
					informations de sant&eacute; essentiels.
					Il met aussi en mots et des phrases utiles en fran&ccedil;ais &agrave; port&eacute;e de main quand vous allez &agrave; 
					la clinique ou &agrave; une situation d'urgence.

					CHSSN a obtenu son inspiration pour cette ligne App partir d'une version papier de la Sant&eacute; a cr&eacute;&eacute; un passeport
					il ya quelques ann&eacute;es par la MCDC, une organisation au service de la communaut&eacute; de la langue anglaise
                    Chaudi&egrave;re-Appalaches de Qu&eacute;bec. MCDC r&eacute;alis&eacute; que la r&eacute;alisation d'un guide de poche des 
                    renseignements personnels de la sant&eacute; et de base vocabulaire pourrait am&eacute;liorer l'issue de visites de langue fran&ccedil;aise professionnels de soins de sant&eacute;,
                    et, finalement, d'am&eacute;liorer votre sant&eacute;.

Leur mod&egrave;le de papier a &eacute;t&eacute; adopt&eacute;e dans plusieurs r&eacute;gions du Qu&eacute;bec et par les deux communaut&eacute;s francophones
Canada (&agrave; Terre-Neuve et le Yukon). Quant &agrave; Passeport Sant&eacute; App RCSSS, qui sait jusqu'o&ugrave; il ira?

					

				</div>

				</div>
			</div></li>-->
			
			<li class="item"><a href="chssn.php" class='chssn-title-bar'><div class='item-text submenu-text'><div><div class='lng-en'>Credits<br/>Thanks</div><div class='lng-fr'>Cr&eacute;dits<br/>Merci</div></div><div></div></div> <div class="below-button noclick"> </div></a><div class="info-items">
				<div class="dynamic-size-box">
					
					<div class='lng-en'>
					This electronic version of the Health Passport App has happened thanks to the collaboration of a 
					few organizations:<br/><br/>
                    	MCDC (Megantic English-speaking Community Development Corporation) for creating the original paper version<br/>
                    	VEQ (Voice of English-speaking Qu&eacute;bec) and Jeffery Hale Community Services for producing a revised second 
                    	paper version and for helping to bring this electronic version to life.<br/>
                    	Health Canada, and the financial support of their Official Languages Support Program in particular, for making all of this work possible<br/><br/>

                    Special thanks to our technical development and support team in Montr&eacute;al, Qu&eacute;bec, Canada:<br/><br/>

					Alexandra Lemus<br/>
					Gabriela Su&eacute;<br/>
					Mariolys Rivas<br/>
					Adolfo Rodr&iacute;guez<br/>
					
					</div>
					
					<div class='lng-fr'>
				    Cette version &#233;lectronique de l&#39;App Passeport Sant&#233; est arriv&#233; gr&#226;ce &#224; 
				    la collaboration de quelques organisations:<br/><br/>

					MCDC (Soci&#233;t&#233; de d&#233;veloppement communautaire expression anglaise de M&#233;gantic) 
					pour la cr&#233;ation de la version originale de papier.<br/>
					VEQ (Voice of English-speaking Qu&#233;bec) et Jeffery Hale Services communautaires pour la production d&#39; une deuxi&#232;me 
					version r&#233;vis&#233;e du papier et pour aider &#224; porter cette version &#233;lectronique &#224; la vie.<br/>
					Sant&#233; Canada, et le soutien financier de leur Programme d&#39;appui aux langues 
					officielles, en particulier, pour faire tout ce travail possible. <br/><br/>

					Un merci sp&#233;cial &#224; notre d&#233;veloppement technique et l&#39;&#233;quipe de soutien &#224; Montr&#233;al, Qu&#233;bec, Canada <br/><br/>
					Alexandra Lemus<br/>
					Gabriela Su&eacute;<br/>
					Mariolys Rivas<br/>
					Adolfo Rodr&iacute;guez<br/>
					
					</div>
					
				</div>
			</div></li>
			
			
			
			
		</ul>
	</body>

</html>
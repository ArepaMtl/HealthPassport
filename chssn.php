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
			
			<li class="item"><a href="chssn.php" class='chssn-title-bar'><div class='item-text submenu-text'><div>Health Passport</div><div>Information passeport sant&eacute;</div></div> <div class="below-button noclick"> </div></a><div class="info-items">
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
					Cette application de Passeport Sant&eacute; est faite pour vous aider, vous et votre famille, &agrave;
suivre l'information essentielle sur la sant&eacute;. Elle vous permet aussi d'avoir sous la main
des mots et expressions utiles en fran&ccedil;ais quand vous allez &agrave; la clinique ou &agrave; l'urgence.
Pour cette application en ligne, le RCSSS s'est inspir&eacute; d'une version imprim&eacute;e du
Passeport Sant&eacute; cr&eacute;&eacute;e il y a quelques ann&eacute;es par la MCDC, organisme desservant la 
communaut&eacute; d'expression anglaise de la r&eacute;gion Chaudi&egrave;re-Appalaches au Qu&eacute;bec. La
MCDC a d&eacute;couvert qu'avoir un guide de poche contenant des renseignements
personnels et du vocabulaire de base sur la sant&eacute; am&eacute;liorerait le r&eacute;sultat des 
consultations aupr&egrave;s de professionnels de la sant&eacute; francophones et, en fin de compte, 
am&eacute;liorerait votre sant&eacute;. <br />

Plusieurs r&eacute;gions du Qu&eacute;bec et deux communaut&eacute;s francophones du Canada (&agrave; Terre-
Neuve et au Yukon) ont adopt&eacute; le mod&egrave;le imprim&eacute;. Quant &agrave; l'application du Passeport
Sant&eacute; du RCSSS, qui sait o&ugrave; cela nous m&egrave;nera?
					

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
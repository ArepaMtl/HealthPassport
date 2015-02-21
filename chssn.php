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
			
			
			<li class="item"><a href="chssn.php" class='chssn-title-bar'><div class='item-text submenu-text'><div id='chssn-title'></div><div><div class='lng-en'>The Megantic English-speaking Community </br> Development Corporation (MCDC)</div><div class='lng-fr'>Soci&#233;t&#233; de d&#233;veloppement communautaire <br/> Expression Anglaise de M&#233;gantic</div></div></div> <div class="below-button noclick"> </div></a><div class="info-items">
				<div class="dynamic-size-box">
			
			
				
					
				<div class='lng-en'>
					Established in November 2000, the Megantic English-speaking Community Development Corporation (MCDC) was the overall result of various initiatives undertaken in previous years to solidify and revitalize a diminishing English-speaking population.  
					MCDC serves the English-speaking community of  Chaudi&egrave;re-Appalaches and Bois-Francs, 
					with special emphasis on the MRC des Appalaches, MRC de l'&Egrave;rable and MRC de Lotbini&eacute;re. 
					Historically, this territory was known as Megantic County. <br/>  <br/> 
					

					Since its creation, MCDC has established a strong network of partners in both the English and French 
					communities. With their support, MCDC was able to start offering a variety of activities, set up 
					initiatives and develop programs to serve the English-speaking population. 
					It also reached out to the larger French community to showcase the rich history of the English 
					community and what it can contribute to the overall social and economic well being of the region. <br/><br/>
				</div>
				
				<div class='lng-fr'>
				Constitu&#xE9;e en  novembre 2000, la Corporation de d&#xE9;veloppement de la communaut&#xE9; d&#x2019;expression anglaise de M&#xE9;gantic, a &#xE9;t&#xE9; le r&#xE9;sultat global de maintes initiatives engag&#xE9;es pr&#xE9;c&#xE9;demment dans le but de solidifier et revitaliser une population d&#x2019;expression anglaise en voie d&#x2019;extinction. La MCDC dessert la communaut&#xE9; d&#x2019;expression anglaise de Chaudi&#xE8;re-Appalaches et des Bois-Francs, plus particuli&#xE8;rement la MRC des Appalaches, la  MRC de L&#x2019;&#xC9;rable et la MRC de Lotbini&#xE8;re. Historiquement, ce territoire &#xE9;tait connu sous le nom de Comt&#xE9; de M&#xE9;gantic. <br/> <br/>

				Depuis sa cr&#xE9;ation, la MCDC a &#xE9;tabli un r&#xE9;seau solide de partenaires et ce, autant dans la communaut&#xE9; anglophone que dans  la communaut&#xE9; francophone. Avec leur appui, la MCDC fut capable de commencer &#xE0; offrir une vari&#xE9;t&#xE9; d&#x2019;activit&#xE9;s, de monter des projets et de d&#xE9;velopper des programmes au service de la population d&#x2019;expression anglaise. Elle s&#x2019;est aussi &#xE9;tendue &#xE0; la grande communaut&#xE9; francophone afin de leur faire conna&#xEE;tre la magnifique histoire de la communaut&#xE9; anglaise et sa contribution &#xE0; l&#x2019;ensemble du bien-&#xEA;tre social et &#xE9;conomique de la r&#xE9;gion.


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
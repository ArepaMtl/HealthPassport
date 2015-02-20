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
			
			<li class="item"><a href="chssn.php" class='chssn-title-bar'><div class='item-text submenu-text'><div id='chssn-title'></div><div><div class='lng-en'>Community Health and</br>Social Services Network</div><div class='lng-fr'>Community Health and</br>Social Services Network</div></div></div> <div class="below-button noclick"> </div></a><div class="info-items">
				<div class="dynamic-size-box">
					
				<div class='lng-en'>
					The Community Health and Social Services Network (CHSSN) is a network over 60 community resources, associations, foundations, public institutions and other stakeholders dedicated to creating partnerships that enhance health and social services for English-speaking communities in Quebec.<br/><br/>
					Le R&#233;seau communautaire de sant&#233; et de services sociaux est un r&#233;seau de plus de 60 ressources communautaires, des associations, des fondations, des institutions publiques et d&#39;autres intervenants d&#233;di&#233;s &#224; la cr&#233;ation de partenariats qui am&#233;liorent les services sociaux et de sant&#233; pour les communaut&#233;s anglophones du Qu&#233;bec.<br/><br/>
					
					<b>CHSSN Contact Information</b><br/><br/>
					
					<a href='http://www.chssn.org' class="health-pass-link">www.chssn.org</a><br/><br/>
					<a href='mailto:info@chssn.org' class="health-pass-link">info@chssn.org</a><br/><br/>
					<b>Phone:</b> <a href='tel:+14186842289' class="health-pass-link">418-684-2289</a><br/><br/>
					<b>Address:</b> 1270, Chemin Ste-Foy, Suite 2106, Quebec, QC G1S 2M4
				</div>
				
				<div class='lng-fr'>
					The Community Health and Social Services Network (CHSSN) is a network over 60 community resources, associations, foundations, public institutions and other stakeholders dedicated to creating partnerships that enhance health and social services for English-speaking communities in Quebec.<br/><br/>
					Le R&#233;seau communautaire de sant&#233; et de services sociaux est un r&#233;seau de plus de 60 ressources communautaires, des associations, des fondations, des institutions publiques et d&#39;autres intervenants d&#233;di&#233;s &#224; la cr&#233;ation de partenariats qui am&#233;liorent les services sociaux et de sant&#233; pour les communaut&#233;s anglophones du Qu&#233;bec.<br/><br/>
					
					<b>CHSSN Contact Information</b><br/><br/>
					
					<a href='http://www.chssn.org' class="health-pass-link">www.chssn.org</a><br/><br/>
					<a href='mailto:info@chssn.org' class="health-pass-link">info@chssn.org</a><br/><br/>
					<b>Phone:</b> <a href='tel:+14186842289' class="health-pass-link">418-684-2289</a><br/><br/>
					<b>Address:</b> 1270, Chemin Ste-Foy, Suite 2106, Quebec, QC G1S 2M4
				</div>
					
				</div>
			</div></li>
			
			<li class="item"><a href="chssn.php" class='chssn-title-bar'><div class='item-text submenu-text'><div>Health Passport</div><div>Information passeport sant&eacute;</div></div> <div class="below-button noclick"> </div></a><div class="info-items">
				<div class="dynamic-size-box">
					
					<div class='lng-en'>
					
					Several years ago a community organization serving the English-speaking community of the Chaudi&#232;re-Appalaches Region in Quebec decided to invest resources it had received from Health Canada for promoting better health of its community into a pocket reference that could be used on a visit to the doctor or an emergency room.  They felt that having some of the basic vocabulary necessary for these visits at a person&#8217;s fingertips could improve the outcome of the visit and ultimately the health of the individual.   The pocket reference was called the MCDC Health Passport and was a huge success.  The model has since been adopted in several regions of Quebec and in two Francophone communities across Canada (Newfoundland and Yukon).  The CHSSN recognized a good idea and decided that an electronic version of this passport just might be the next step.  So here we are.  This version of the Health Passport is benefiting from the development and revision of several organizations.  MCDC (Megantic English-speaking Community Development Corporation) developed the original version and VEQ (Voice of English-speaking Quebec) and Jeffery Hale Community Services revised and produced a second version.  We have taken the content (with VEQ and MCDC&#8217;s permission) to create this electronic version for use by the greater English-speaking community of Quebec.  All of this work would not have been possible without the financial support from Health Canada and their Official Languages Support Program.<br/><br/>

					
Il y a plusieurs ann&eacute;es, un organisme communautaire desservant la communaut&eacute; d&rsquo;expression anglaise de la r&eacute;gion Chaudi&egrave;re-Appalaches du Qu&eacute;bec a d&eacute;cid&eacute; d&rsquo;investir les ressources qu&rsquo;il avait re&ccedil;ues de Sant&eacute; Canada pour promouvoir l&rsquo;am&eacute;lioration de la sant&eacute; de sa communaut&eacute; en produisant un guide de poche &agrave; consulter lors des visites chez le m&eacute;decin ou &agrave; l&rsquo;urgence. Il a sembl&eacute; aux responsables de cet organisme qu&rsquo;avoir sous la main le vocabulaire de base n&eacute;cessaire &agrave; ces visites am&eacute;liorerait le r&eacute;sultat de la consultation et, en fin de compte, la sant&eacute; de la personne concern&eacute;e. Ce guide de poche, qui a pour titre Passeport-sant&eacute; de la MCDC, a connu un succ&egrave;s retentissant. Ce mod&egrave;le a depuis lors &eacute;t&eacute; repris dans plusieurs r&eacute;gions du Qu&eacute;bec et dans deux communaut&eacute;s francophones ailleurs au Canada (&agrave; Terre-Neuve et au Yukon). Le RCSSS, &agrave; qui cette bonne id&eacute;e n&rsquo;a pas &eacute;chapp&eacute;, a d&eacute;cid&eacute; que la prochaine &eacute;tape serait de produire une version &eacute;lectronique de ce passeport. Voici donc o&ugrave; nous en sommes. Cette version du Passeport Sant&eacute; b&eacute;n&eacute;ficie de la r&eacute;vision de plusieurs organismes. La MCDC (Corporation de d&eacute;veloppement de la communaut&eacute; d&rsquo;expression anglaise de M&eacute;gantic) a cr&eacute;&eacute; la version originale, tandis que VEQ (Voice of English-speaking Quebec) et les Services communautaires Jeffery Hale l&rsquo;ont r&eacute;vis&eacute;e et produit une deuxi&egrave;me version. Nous avons ensuite repris ce contenu (avec l&rsquo;autorisation de VEQ et de la MCDC) pour cr&eacute;er cette version &eacute;lectronique destin&eacute;e &agrave; la communaut&eacute; d&rsquo;expression anglaise &eacute;largie du Qu&eacute;bec. Tout ce travail n&rsquo;aurait pu s&rsquo;accomplir sans le soutien financier de Sant&eacute; Canada et de leur Programme d&rsquo;appui aux langues officielles.

					</div>
					
					<div class='lng-fr'>
					
					Several years ago a community organization serving the English-speaking community of the Chaudi&#232;re-Appalaches Region in Quebec decided to invest resources it had received from Health Canada for promoting better health of its community into a pocket reference that could be used on a visit to the doctor or an emergency room.  They felt that having some of the basic vocabulary necessary for these visits at a person&#8217;s fingertips could improve the outcome of the visit and ultimately the health of the individual.   The pocket reference was called the MCDC Health Passport and was a huge success.  The model has since been adopted in several regions of Quebec and in two Francophone communities across Canada (Newfoundland and Yukon).  The CHSSN recognized a good idea and decided that an electronic version of this passport just might be the next step.  So here we are.  This version of the Health Passport is benefiting from the development and revision of several organizations.  MCDC (Megantic English-speaking Community Development Corporation) developed the original version and VEQ (Voice of English-speaking Quebec) and Jeffery Hale Community Services revised and produced a second version.  We have taken the content (with VEQ and MCDC&#8217;s permission) to create this electronic version for use by the greater English-speaking community of Quebec.  All of this work would not have been possible without the financial support from Health Canada and their Official Languages Support Program.<br/><br/>

					
Il y a plusieurs ann&eacute;es, un organisme communautaire desservant la communaut&eacute; d&rsquo;expression anglaise de la r&eacute;gion Chaudi&egrave;re-Appalaches du Qu&eacute;bec a d&eacute;cid&eacute; d&rsquo;investir les ressources qu&rsquo;il avait re&ccedil;ues de Sant&eacute; Canada pour promouvoir l&rsquo;am&eacute;lioration de la sant&eacute; de sa communaut&eacute; en produisant un guide de poche &agrave; consulter lors des visites chez le m&eacute;decin ou &agrave; l&rsquo;urgence. Il a sembl&eacute; aux responsables de cet organisme qu&rsquo;avoir sous la main le vocabulaire de base n&eacute;cessaire &agrave; ces visites am&eacute;liorerait le r&eacute;sultat de la consultation et, en fin de compte, la sant&eacute; de la personne concern&eacute;e. Ce guide de poche, qui a pour titre Passeport-sant&eacute; de la MCDC, a connu un succ&egrave;s retentissant. Ce mod&egrave;le a depuis lors &eacute;t&eacute; repris dans plusieurs r&eacute;gions du Qu&eacute;bec et dans deux communaut&eacute;s francophones ailleurs au Canada (&agrave; Terre-Neuve et au Yukon). Le RCSSS, &agrave; qui cette bonne id&eacute;e n&rsquo;a pas &eacute;chapp&eacute;, a d&eacute;cid&eacute; que la prochaine &eacute;tape serait de produire une version &eacute;lectronique de ce passeport. Voici donc o&ugrave; nous en sommes. Cette version du Passeport Sant&eacute; b&eacute;n&eacute;ficie de la r&eacute;vision de plusieurs organismes. La MCDC (Corporation de d&eacute;veloppement de la communaut&eacute; d&rsquo;expression anglaise de M&eacute;gantic) a cr&eacute;&eacute; la version originale, tandis que VEQ (Voice of English-speaking Quebec) et les Services communautaires Jeffery Hale l&rsquo;ont r&eacute;vis&eacute;e et produit une deuxi&egrave;me version. Nous avons ensuite repris ce contenu (avec l&rsquo;autorisation de VEQ et de la MCDC) pour cr&eacute;er cette version &eacute;lectronique destin&eacute;e &agrave; la communaut&eacute; d&rsquo;expression anglaise &eacute;largie du Qu&eacute;bec. Tout ce travail n&rsquo;aurait pu s&rsquo;accomplir sans le soutien financier de Sant&eacute; Canada et de leur Programme d&rsquo;appui aux langues officielles.

				</div>

				</div>
			</div></li>
			
			<li class="item"><a href="chssn.php" class='chssn-title-bar'><div class='item-text submenu-text'><div><div class='lng-en'>Design and development<br/>team</div><div class='lng-fr'>Design and development<br/>team</div></div><div></div></div> <div class="below-button noclick"> </div></a><div class="info-items">
				<div class="dynamic-size-box">
					
					<div class='lng-en'>
					
					Alexandra Lemus<br/>
					Gabriela Su&eacute;<br/>
					Mariolys Rivas<br/>
					Adolfo Rodr&iacute;guez<br/>
					
					</div>
					
					<div class='lng-fr'>
					
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
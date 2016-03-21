<!DOCTYPE html>
<html manifest="cache.manifest">
	<head>
		<title>
			Health Passport Web App - Information
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<style type="text/css">
		a {
			text-decoration: none; 
			color: #000; 
			
			
			
			
			}
		
		</style>
        
        
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
			
			<li class="item"><a href="chssn.php" class='chssn-title-bar'><div class='item-text submenu-text'><div id='chssn-title'></div><div><div class='lng-en'> <b>AGAPE </b></br> 
</div><div class='lng-fr'>  <b>AGAPE </b></br></div></div></div> <div class="below-button noclick"> </div></a><div class="info-items">
				<div class="dynamic-size-box">
					
				<div class='lng-en'>
					<b> &ldquo;AGAPE&rdquo;</b> is a non-profit charitable organization serving the English speaking and multi-cultural communities of Laval, Quebec since 1976. </br> <b> Our services:</b>
</br>

    </br> Bread Counter <b><a href="http://www.agapeassociationinc.com/bread_counter.ws" >(Bread Counter)</a></b>
    </br>Budget planning <b><a href="http://www.agapeassociationinc.com/budget_planning.ws">(Budget Planning)</a></b> 
    </br>Help and guidance for victims of all types of addiction <b><a href="http://www.agapeassociationinc.com/clear_head__clean_soul.ws">(Clear Head, Clean Soul)</a></b>
    
    </br>Food, clothes, furniture and toys to the less fortunate <b><a href="http://www.agapeassociationinc.com/food__clothes___furniture.ws">(Food, Clothes & Furniture)</a></b>
    </br>Help and guidance for victims of abuse <b><a href="http://www.agapeassociationinc.com/healing_the_family.ws">(Healing the Family)</a></b>
    </br>Projects for seniors and youth <b><a href="http://www.agapeassociationinc.com/seniors_paving_the_future.ws">(Seniors Paving the Future)</a></b>
    </br>Presence of a social worker at Agape <b><a href="http://www.agapeassociationinc.com/social_worker.ws">(Social Worker)</a></b>
    </br>Transitional place for homeless families and newly arrived immigrants <b><a href="http://www.agapeassociationinc.com/transition_house.ws">(Transition House</a>)</b>
    </br>Support for underprivileged Countries <b><a href="http://www.agapeassociationinc.com/underprivileged_countries.ws">(Underprivileged Countries)</a></b> 

</br>
</br>

<b>The Networking Partnership Initiative</b>
</br>

 (NPI) is a program designed to support Quebec&rsquo;s minority English-speaking communities in improving and maintaining access to the full range of Health and Social Services. Agape is representing Laval&rsquo;s network and forms a larger network of 20 English community groups across Quebec via the Community Health and Social Services Network.

 
 </br>
</br>
<b>Children&rsquo;s Time</b>
</br>

This service is part of our Health Promotion project. Children in vulnerable situations are referred from the community to participate in activities that provide respite and develop confidence and a sense of well-being.

 </br>
</br>
<b>Women recovering from abuse and violence</b>

 </br>
A support group meets once per week to find a sense of dignity and well-being. Their children often participate in Children&rsquo;s time.
 </br>
 </br>
<b> Seniors</b> </br>Through the New Horizons for Seniors initiative various projects help our English speaking seniors: youth and seniors mentoring, computer courses for seniors.

 
<!--Caregivers of Seniors, Agape offers services and referrals for those who care for their aging loved ones.-->
					
					<!--<b>CHSSN Contact Information</b><br/><br/>
					
					<a href='http://www.chssn.org' class="health-pass-link">www.chssn.org</a><br/><br/>
					<a href='mailto:info@chssn.org' class="health-pass-link">info@chssn.org</a><br/><br/>
					<b>Phone:</b> <a href='tel:+14186842289' class="health-pass-link">418-684-2289</a><br/><br/>
					<b>Address:</b> 1270, Chemin Ste-Foy, Suite 2106, Quebec, QC G1S 2M4-->
				</div>
				
				<div class='lng-fr'>
					<b> &ldquo;AGAPE&rdquo;</b> is a non-profit charitable organization serving the English speaking and multi-cultural communities of Laval, Quebec since 1976. </br> <b> Our services:</b>
</br>

    </br> Bread Counter <b><a href="http://www.agapeassociationinc.com/bread_counter.ws" >(Bread Counter)</a></b>
    </br>Budget planning <b><a href="http://www.agapeassociationinc.com/budget_planning.ws">(Budget Planning)</a></b> 
    </br>Help and guidance for victims of all types of addiction <b><a href="http://www.agapeassociationinc.com/clear_head__clean_soul.ws">(Clear Head, Clean Soul)</a></b>
    
    </br>Food, clothes, furniture and toys to the less fortunate <b><a href="http://www.agapeassociationinc.com/food__clothes___furniture.ws">(Food, Clothes & Furniture)</a></b>
    </br>Help and guidance for victims of abuse <b><a href="http://www.agapeassociationinc.com/healing_the_family.ws">(Healing the Family)</a></b>
    </br>Projects for seniors and youth <b><a href="http://www.agapeassociationinc.com/seniors_paving_the_future.ws">(Seniors Paving the Future)</a></b>
    </br>Presence of a social worker at Agape <b><a href="http://www.agapeassociationinc.com/social_worker.ws">(Social Worker)</a></b>
    </br>Transitional place for homeless families and newly arrived immigrants <b><a href="http://www.agapeassociationinc.com/transition_house.ws">(Transition House</a>)</b>
    </br>Support for underprivileged Countries <b><a href="http://www.agapeassociationinc.com/underprivileged_countries.ws">(Underprivileged Countries)</a></b> 

</br>
</br>

<b>The Networking Partnership Initiative</b>
</br>

 (NPI) is a program designed to support Quebec&rsquo;s minority English-speaking communities in improving and maintaining access to the full range of Health and Social Services. Agape is representing Laval&rsquo;s network and forms a larger network of 20 English community groups across Quebec via the Community Health and Social Services Network.

 
 </br>
</br>
<b>Children&rsquo;s Time</b>
</br>

This service is part of our Health Promotion project. Children in vulnerable situations are referred from the community to participate in activities that provide respite and develop confidence and a sense of well-being.

 </br>
</br>
<b>Women recovering from abuse and violence</b>

 </br>
A support group meets once per week to find a sense of dignity and well-being. Their children often participate in Children&rsquo;s time.
 </br>
 </br>
<b> Seniors</b> </br>Through the New Horizons for Seniors initiative various projects help our English speaking seniors: youth and seniors mentoring, computer courses for seniors.

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
<!DOCTYPE html>
<html manifest="cache.manifest">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
		<title>
			Health Passport
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="60x60" href="apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="120x120" href="apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="76x76" href="apple-touch-icon-76x76.png">
<link rel="icon" type="image/png" href="favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-TileImage" content="mstile-144x144.png">
		
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" media="screen and (max-height: 600px)" href="css/style_small_height.css">
	
		<script src="javascript/jquery-1.11.1.min.js"></script>
		<script src="lib/add-to-homescreen/src/addtohomescreen.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				addToHomescreen();
				
				$("#informationicon").click(function(event){
					event.preventDefault();
					$("#main-menu-info").css("display","block");
				});
				
				$("#bookmarkicon").click(function(event){
					event.preventDefault();
					$("#main-menu-bookmark-info").css("display","block");
				});
				
				$("#main-menu-info > div > a:last-child").click(function(event){
					event.preventDefault();
					$("#main-menu-info").css("display","none");
				});
				
				$("#main-menu-bookmark-info > div > a:last-child").click(function(event){
					event.preventDefault();
					$("#main-menu-bookmark-info").css("display","none");
				});
				
				var shouldAppear = false;
				
				if (document.referrer) {
   					url = document.referrer; 
   					ref = url.match(/:\/\/(.[^/]+)/)[1];
					if (ref !== "health-passport.ca"){
						shouldAppear = true;
					}
				}else{
					shouldAppear = true;		
				}
				
				if (shouldAppear){
					setTimeout(
  						function() 
  						{
							$("#loading-page").fadeOut(400,function(){
								$("#loading-page").css("display","none");
							});
						},
						1000
					);
				}else{
					$("#loading-page").css("display","none");
				}
				
				if (navigator.userAgent.match(/(iPod|iPhone|iPad)/)) {
    				$(".android-only").css("display","none");
					$(".ios-only").css("display","block");
					$(".other-os").css("display","none");
				}else if (navigator.userAgent.toLowerCase().indexOf("android") > -1) {
					$(".android-only").css("display","block");
					$(".ios-only").css("display","none");
					$(".other-os").css("display","none");
				}else {
					$(".android-only").css("display","none");
					$(".ios-only").css("display","none");
					$(".other-os").css("display","block");
				}
				
				
			});
		</script>
	
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56545433-1', 'auto');
  ga('send', 'pageview');

  </script>
		
	</head>
	<body>
	<div class="top-bar">
		<a href="" id="bookmarkicon"> </a>
		<h1 data-localize="menu.title" class='centered health-pass-title'> Health Passport </h1> 
		<a href="" id="informationicon"> </a>
	</div>
	
	<div class="right-bar">
		<p>icons </p>
		<p>go </p>
		<p>here </p>
	</div>
	
	<div id="main-icon">
	</div>
		<ul id="menu">
			<li class="item"> <a href="multiple_users.php" data-localize="medicalhistory.link"><div class="item-text"><div>Your History</div><div>Ant&eacute;c&eacute;dents m&eacute;dicaux</div></div></a>  <div class="noclick lefticon" href="" id="menuyourhistory_icon"> </div> </li>
			<li class="item"> <a href="lexicon.php" data-localize="medicallexicon.link"><div class="item-text"><div>Helpful phrases</div><div>Lexique</div></div></a>  <div class="noclick lefticon" href="" id="menuyourlexicon_icon"> </div></li>
			<li class="item"> <a href="information.php" data-localize="information.link"><div class="item-text"><div>Important numbers</div><div>Num&eacute;ros importants</div></div></a> <div class="noclick lefticon" href="" id="menuquestion_icon"> </div></li>
			<li class="item"> <a href="chssn.php" data-localize="information.link"><div class="item-text"><div>Health Passport</div><div>Passeport sant&eacute;</div></div></a> <div class="noclick lefticon" href="" id="menuinfo_icon"> </div></li>
		</ul>
		
		<div id="main-menu-info" class="info-popup">
			<div>
				<div>
				This app is meant as a guide to make it easier for an English-speaking
				person to communicate with French-speaking health professionals. It does not replace a professional medical opinion in any way.
				</div>
				<a href=""></a>
			</div>
		</div>
		
		<div id="main-menu-bookmark-info" class="info-popup">
			<div>
					<div class="ios-only">
				 	<p>To save this app to your home screen: </p>
				 	<p> Press the button <span class="sharebutton_icon"> </span> at the top left of the screen.</p> 
				 	<p> Then select <span class="addtohomescreen_icon"> </span> Add to Home Screen.</p>
					</div>
					<div class="android-only">
				 	<p>To save this app to your home screen:</p> <p> Press the menu button at the bottom of the device. Then select Add Shortcut. </p> 
					</div>
					<div class="other-os">
				 	<p> For easier access and a better experience please bookmark this app or add it to your mobile device's home screen. </p>
					</div>
				
				<a href=""></a>
			</div>
		</div>
		
		<div class="info-popup">
			<div>
				<div>
					Rate the Health Passport WebApp
					Leave us a comment: <div class="right-box-container"><input type="text" name="checkListItem" class="box-input"/></div>
				</div>
				<a href=""></a>
			</div>
		</div>
		
		<div id='loading-page'></div>
	</body>
</html>
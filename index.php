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
		
		<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
		
		<script src="javascript/jquery-ui.min.js"></script>
		
		
		<script type="text/javascript">
			$(document).ready(function(){
				
				var currentVersion = "2.0";
				
				var oldVersion = localStorage.getItem("app-version");
				
				if (oldVersion !== currentVersion) {
					$("#new-version-info").css("display","block");
					
					localStorage.setItem("app-version",currentVersion);
				}
				
				$("#new-version-info > div > a:last-child").click(function(event){
					event.preventDefault();
					$("#new-version-info").css("display","none");
				});
				
				
				$("#comment-submit").click(function(event){
					event.preventDefault();
					
					var message = $("#comment-text").val();
					
					$.ajax({
  						type: "POST",
  						url: "send_feedback.php",
  						data: {"message":message},
  						success: function(){
							alert("Your message has been submitted. Thank you for your feedback.");
							$("#comment-text").val("");
						},
						error: function(){
							alert("Your message could not be submitted. Please check your internet connection");
						}
					});
				});
				
				var rating = localStorage.getItem("health-passport-rating");
				
				if (rating == null) {
					rating = 0;
				}else {
					rating = parseInt(rating)
				}
				
				var index = 1;
				
				$(".ratingstars").each(function(){
					
					if (index <= rating) {
						$(this).css("background-color","rgb(238,75,81)");
					}else {
						$(this).css("background-color","white");
					}
					
					index += 1;
				});
				
				$(".ratingstars").click(function(){
					var thisStar = this
					var foundStar = false
					var index = 1;
					var clickedIndex = 0;
					$(this).parent().find(".ratingstars").each(function(){
						
						if (foundStar) {
							$(this).css("background-color","white");
						}else {
							$(this).css("background-color","rgb(238,75,81)");
						}
						
						if (this === thisStar) {
							foundStar = true;
							clickedIndex = index
						}
						
						index += 1;
					});
					
					localStorage.setItem("health-passport-rating",clickedIndex);
					
					if (clickedIndex > 0){
						ga('send', 'event', 'star', 'rate', 'feedback', clickedIndex);
					}
					
				});
				
				var isRateOpen = false;
				
				var isRateMouseDown = false
				
				var startHandler = function(){
					
					$('#main-menu-rate-this-app').css("-webkit-transition","none");
					$('#main-menu-rate-this-app').css("-moz-transition","none");
					$('#main-menu-rate-this-app').css("-o-transition","none");
					$('#main-menu-rate-this-app').css("transition","none");
					
					
					$('#rate-star-icon').css("-webkit-transition","none");
					$('#rate-star-icon').css("-moz-transition","none");
					$('#rate-star-icon').css("-o-transition","none");
					$('#rate-star-icon').css("transition","none");
				}
				
				var dragHandler = function(){
						
					isRateMouseDown = false
					var right = -$('#main-menu-rate-this-app').width() + $(window).width() - $("#rate-star-icon").width() - $("#rate-star-icon").position().left;
					//console.log(right);
					$('#main-menu-rate-this-app').css("right",right+"px");
				}
				
				function toggleRateOpen() {
					isRateOpen = !isRateOpen;
					
					if (isRateOpen) {
						$("#rate-star-icon").css("right",$('#main-menu-rate-this-app').width()+"px");
						$('#main-menu-rate-this-app').css("right","0px");
						
						$("#rate-star-div").css("background-image","url(design_folder/assets/x_rating.png)");
						
					}else{
						$("#rate-star-icon").css("right","0px");
						$('#main-menu-rate-this-app').css("right",(-$('#main-menu-rate-this-app').width()) + "px");
						
						$("#rate-star-div").css("background-image","url(design_folder/assets/rate_app.png)");
					}
				}
				
				var stopHandler = function(){
					dragHandler();
					
					var right = $(window).width() - $("#rate-star-icon").position().left - $("#rate-star-icon").width();
					
					$("#rate-star-icon").css("left","auto");
					$("#rate-star-icon").css("right",right+"px");
					
					$('#main-menu-rate-this-app').css("-webkit-transition","all 0.3s ease-in-out");
					$('#main-menu-rate-this-app').css("-moz-transition","all 0.3s ease-in-out");
					$('#main-menu-rate-this-app').css("-o-transition","all 0.3s ease-in-out");
					$('#main-menu-rate-this-app').css("transition","all 0.3s ease-in-out");
					
					setTimeout(function(){
						
						
					$('#rate-star-icon').css("-webkit-transition","all 0.3s ease-in-out");
					$('#rate-star-icon').css("-moz-transition","all 0.3s ease-in-out");
					$('#rate-star-icon').css("-o-transition","all 0.3s ease-in-out");
					$('#rate-star-icon').css("transition","all 0.3s ease-in-out");
					
					toggleRateOpen();
						
					}, 100)
					
					
						
				}
				
				
				
				$("#rate-star-icon").mousedown(function(){
					isRateMouseDown = true
				});
				
				$("#rate-star-icon").click(function(){
					if (isRateMouseDown) {
						toggleRateOpen();
					}
				});
				
				$("#rate-star-icon").draggable({
    				axis: "x",
					start: startHandler,
					drag: dragHandler,
					stop: stopHandler
				});
				
				$('#rate-star-icon').on('mousedown', function() {
    				var x1 = $(window).width() - $("#rate-star-icon").width() - $('#main-menu-rate-this-app').width();
    				var x2 = $(window).width() - $("#rate-star-icon").width();
    				var y1 = $("#rate-star-icon").position().top;
    				var y2 = $("#rate-star-icon").position().bottom;
    				$("#rate-star-icon").draggable('option', 'containment', [x1, y1, x2, y2]);
				});
				
				
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
				
				//$("#rate-star-icon > div").click(function(event){
				//	event.preventDefault();
				//	$("#main-menu-rate-this-app").css("display","block");
				//});
				
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
	
	
	
	<div id="main-icon">
	</div>
	
	<div id="rate-star-icon" class="right-bar">
		<div class="ratestar" id="rate-star-div">   </div>
	</div>
	
		<ul id="menu">
			<li class="item"> <a href="multiple_users.php" data-localize="medicalhistory.link"><div class="item-text"><div>Your History</div><div>Ant&eacute;c&eacute;dents m&eacute;dicaux</div></div></a>  <div class="noclick lefticon" href="" id="menuyourhistory_icon"> </div> </li>
			<li class="item"> <a href="lexicon.php" data-localize="medicallexicon.link"><div class="item-text"><div>Helpful phrases</div><div>Lexique</div></div></a>  <div class="noclick lefticon" href="" id="menuyourlexicon_icon"> </div></li>
			<li class="item"> <a href="information.php" data-localize="information.link"><div class="item-text"><div>Important numbers</div><div>Num&eacute;ros importants</div></div></a> <div class="noclick lefticon" href="" id="menuquestion_icon"> </div></li>
			<li class="item"> <a href="chssn.php" data-localize="information.link"><div class="item-text"><div>About</div><div>&Agrave; propos</div></div></a> <div class="noclick lefticon" href="" id="menuinfo_icon"> </div></li>
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
		
		<div id="new-version-info" class="info-popup">
			<div>
				<div>
					A new version of this app has become available and it has been automatically downloaded into your device.
				</div>
				<a href=""></a>
			</div>
		</div>
		
		<div id="main-menu-bookmark-info" class="info-popup">
			<div>
					<div class="ios-only">
				 	To save this app to your home screen: <br/>
				 	<p>Press the button <span class="sharebutton_icon"> </span> at the top left of the screen.</p>
				 	<p>Then select <span class="addtohomescreen_icon"> </span> Add to Home Screen.</p>
					</div>
					<div class="android-only">
				 	To save this app to your home screen: <p>Press the menu button at the bottom of the device. Then select Add Shortcut.</p>
					</div>
					<div class="other-os">
				 	For easier access and a better experience please bookmark this app or add it to your mobile device's home screen.
					</div>
				
				<a href=""></a>
			</div>
		</div>
		
		<div id="main-menu-rate-this-app-container">
		<div id="main-menu-rate-this-app">
			<div>
				<div id="rateit"> Rate this app: </div>
				<div class="ratingstars"> </div> <div class="ratingstars"> </div> <div class="ratingstars"> </div> <div class="ratingstars"> </div>
				<div id="leavecomment"> Leave us a comment (optional):</div> 
				<div> <textarea id="comment-text" style='height:50px;margin-bottom:5px;margin-top:5px;width:200px'></textarea> </div>
				<div class="submit-comment"> <a href="" id="comment-submit"> Submit </a> </div>
			</div>
		</div>
	</div>
		
		<div id='loading-page'></div>
	</body>
</html>
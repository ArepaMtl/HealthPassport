<!DOCTYPE html>
<html manifest="cache.manifest">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
		<title>
			Multiple users
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" media="screen and (max-height: 600px)" href="css/style_small_height.css">
		<script type="text/javascript">
			$(document).ready(function(){
				function getUsers() {
					var users = new Array();
					var i = 0;
					while (localStorage.getItem("user-"+i) != null) {
						users.push(localStorage.getItem("user-"+i));
						i += 1;
					}
					return users;
				}
				function addUser(name) {
					var i = 0;
					while (localStorage.getItem("user-"+i) != null) {
						i += 1;
					}
					localStorage.setItem("user-"+i,name);
				}
				function removeUser(i) {
					localStorage.removeItem("user-"+i);
				}
			});
		</script>
	</head>
		<body>
		<div class="top-bar">
		<h1 data-localize="multiple-users.title" class='centered'> Multiple users </h1> 
		<a href="index.php" id="back-button"> </a>
		<div id="editicon"><a href=""> Edit </a> </div>
		</div>
		<ul id="menumultipleusers">
			<li class="item multipleuserscolor" > <a href="history.php">  <div class="item-text"> <div> User name </div> </div> </a> <div class="noclick lefticon" href="" id="multipleusers_icon"> </div> <div class="righticon" id="forward-button"> </div></li>
			<li class="item multipleuserscolor" > <a href="history.php">  <div class="item-text"> <div> User name </div> </div> </a> <div class="noclick lefticon" href="" id="multipleusers_icon"> </div> <div class="righticon" id="forward-button"> </div></li>
		    <li class="item multipleuserscolor" > <a href= ""><div class="item-text"> <div> New User </div> </div> </a> </li>
		    <li class="item multipleuserscolor" > <a href="history.php"> <div class="item-text"> <div> Continue </div> </div> </a> </li>
		</ul>
		
		</body>
</html>
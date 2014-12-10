<!DOCTYPE html>
<html manifest="cache.manifest">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
		<title>
			Health Passport Web App - History
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" media="screen and (max-height: 600px)" href="css/style_small_height.css">
		<script src="javascript/jquery-1.11.1.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				
				function htmlEncode(value){
  //create a in-memory div, set it's inner text(which jQuery automatically encodes)
  //then grab the encoded contents back out.  The div never exists on the page.
  					return $('<div/>').text(value).html();
				}
				
				$("#addme-box").on("input propertychange paste change",function(){
					var text = $(this).val().trim();
					//alert(text);
					if (text.length > 0) {
						$("#addme-div").removeClass("addme-noclick");
					}else {
						$("#addme-div").addClass("addme-noclick");
					}
				});
				
				$("#addme-button").click(function(event){
					event.preventDefault();
					var text = $("#addme-box").val().trim();
					$("#addme-box").val("");
					
					if (text.length > 0) {
						addUserLink(text,addUser(text));
					}
					
				});
				
				function getUsers() {
					var users = new Array();
					var i = 0;
					while (localStorage.getItem("user-"+i) != null) {
						users.push(localStorage.getItem("user-"+i));
						i += 1;
					}
					return users;
				}
				
				var users = getUsers();
				
				function addUser(name) {
					$(".user-link").removeClass("noclick");
					$(".forward-button").removeClass("righticon-invisible");
					$(".remove-button").addClass("righticon-invisible");
					$("#editicon").removeClass("righticon-invisible");
					$("#okicon").addClass("righticon-invisible");
					
					var i = 0;
					while (localStorage.getItem("user-"+i) != null) {
						if (localStorage.getItem("user-"+i) == name){
							alert("This user exists already!")
							return -1;
						}
						i += 1;
					}
					localStorage.setItem("user-"+i,name);
					return i
				}
				
				//GABY: MARIOLYS: Aqui va la lista de colores, por ejemplo ["red","#ff0123","rgb(23,24,255)"]
				
				var allColors=["rgb(89,195,239)","rgb(101,216,114)","rgb(253,198,65)","rgb(238,75,81)", "rgb(136,88,201)", "rgb(84,150,201)", 
								"rgb(64,163,77)", "rgb(253,132,65)", "rgb(252,117,122)", "rgb(164,134,212)"];
				
				function addUserLink(name,i) {
					if (i<0){
						return;
					}
					$("#editicon").removeClass("addme-noclick");
					var key = encodeURIComponent(name);
					
					var words = name.split(" ");
					
					var initials = ""
					
					for (var j=0; j<words.length; j+=1){
						if (words[j].length > 0) {
							initials += words[j].substring(0,1).toUpperCase();
						}
					}
					
					key = key.replace(/-/g,"_");
					
					var colorNumber = 0;
					
					for (var j=0; j<name.length; j+=1) {
						colorNumber += name.charCodeAt(j);
					}
					
					colorNumber = colorNumber % allColors.length;
					
					
					$("<li class='item multipleuserscolor user-item' id='user-item-"+i+"'> <a href=\"history.php#"+key+"\" class='user-link'>  <div class='item-text'> <div> "+htmlEncode(name)+" </div> </div> </a> <div class='noclick mulefticon multipleusers_icon' href='' style=\"background-color:"+allColors[colorNumber]+"\"><div>"+initials+"</div></div> <a class='remove-button righticon-invisible' href='' data-user-number="+i+"> </a> <div class='noclick forward-button'> </div></li>").insertBefore("#addme-li");
					addRemoveButtonActions();
				}
				function removeUser(i) {
					//alert("removing "+("#user-item-"+i));
					$("#user-item-"+i).remove();
					
					while (localStorage.getItem("user-"+(i+1)) != null) {
						localStorage.setItem("user-"+i,localStorage.getItem("user-"+(i+1)))
						$("#user-item-"+(i+1)).attr("id","user-item-"+i);
						i += 1;
					}
					
					localStorage.removeItem("user-"+i);
					
					i = 0;
					
					while (localStorage.getItem("user-"+i) != null) {
						
						$("#user-item-"+i).find("[data-user-number]").each(function(){
							$(this).attr("data-user-number",i);
						});
						
						i += 1;
					}
					
				}
				
				for (var i=0; i<users.length; i+=1) {
					addUserLink(users[i],i);
				}
				
				$("#edit-button").click(function(event){
					event.preventDefault();
					$(".user-link").addClass("noclick");
					$(".forward-button").addClass("righticon-invisible");
					$(".remove-button").removeClass("righticon-invisible");
					$("#editicon").addClass("righticon-invisible");
					$("#okicon").removeClass("righticon-invisible");
				});
				
				$("#ok-button").click(function(event){
					event.preventDefault();
					$(".user-link").removeClass("noclick");
					$(".forward-button").removeClass("righticon-invisible");
					$(".remove-button").addClass("righticon-invisible");
					$("#editicon").removeClass("righticon-invisible");
					$("#okicon").addClass("righticon-invisible");
				});
				
				function addRemoveButtonActions(){
				
					$( ".remove-button").unbind("click");
					
					$(".remove-button").click(function(event){
						event.preventDefault();
						if (confirm("Are you sure you wish to delete this user?")){
							var i = $(this).attr("data-user-number");
							removeUser(parseInt(i));
						}
					});
				
				}
			});
		</script>
	</head>
		<body>
		<div class="top-bar">
		<h1 data-localize="multiple-users.title" class='centered'> Your History </h1> 
		<a href="index.php" id="back-button"> </a>
		<div id="editicon" class="addme-noclick"><a href="" id="edit-button"> Edit </a> </div>
		<div id="okicon" class="righticon-invisible"><a href="" id="ok-button"> Ok </a> </div>
		</div>
		<ul id="menumultipleusers">
			
			<!--<li class="item multipleuserscolor" > <a href="history.php">  <div class="item-text"> <div> User name </div> </div> </a> <span class="noclick mulefticon multipleusers_icon" href=""> </span> <div class="noclick forward-button"> </div></li>-->
		    <li class="item multipleuserscolor padded-li" id="addme-li"> 
					<div class="left-box-title" data-localize="name.user"> Name / Nom:</div>
					<div class="box-input-container"><input type="text" name="checkListItem" class="box-input" id="addme-box"/> </div>	    
		   			<div class="addme addme-noclick" id="addme-div"> <a href="" id="addme-button"> Add New User </a> </div>
		   	</li>
		    <!--<li class="item multipleuserscolor" > <a href="history.php"> <div class="item-text"> <div> Continue </div> </div> </a> </li>-->

		</ul>
		
		</body>
</html>
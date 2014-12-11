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
				
				var addHandler = function(event){
					event.preventDefault();
					var text = $("#addme-box").val().trim();
					$("#addme-box").val("");
					
					$("#addme-box").blur();
					
					if (text.length > 0) {
						addUserLink(text,addUser(text));
					}
					
				}
				
				$("#addme-box").keypress(function(e) {
    				if(e.which == 13) {
        				addHandler(e);
    				}
				});
				
				$("#addme-button").click(addHandler);
				
				function getUsers() {
					var users = new Array();
					var i = 0;
					while (localStorage.getItem("user-"+i) != null && localStorage.getItem("user-id-"+i) != null) {
						users.push({"name":localStorage.getItem("user-"+i),"id":localStorage.getItem("user-id-"+i)});
						i += 1;
					}
					return users;
				}
				
				var users = getUsers();
				
				
				function randomString(length, chars) {
    				var result = '';
    				for (var i = length; i > 0; --i) result += chars[Math.round(Math.random() * (chars.length - 1))];
    				return result;
				}
				
				function generateId() {
					return randomString(10, '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');
				}
				
				function addUser(name) {
					stopEditing();
					
					var i = 0;
					var dict = {};
					while (localStorage.getItem("user-"+i) != null && localStorage.getItem("user-id-"+i) != null) {
						if (localStorage.getItem("user-"+i) == name){
							alert("This user exists already!")
							return null;
						}
						dict[localStorage.getItem("user-id-"+i)] = 1;
						i += 1;
					}
					localStorage.setItem("user-"+i,name);
					
					var newId = generateId();
					while (dict[newId] === 1){
						newId = generateId();
					}
					
					localStorage.setItem("user-id-"+i,newId);
					
					return newId
				}
				
				
				var allColors=["rgb(89,195,239)","rgb(101,216,114)","rgb(253,198,65)","rgb(238,75,81)", "rgb(136,88,201)", "rgb(84,150,201)", 
								"rgb(64,163,77)", "rgb(253,132,65)", "rgb(252,117,122)", "rgb(164,134,212)"];
				
				function addUserLink(name,id) {
					if (id === null){
						return;
					}
					
					$("#editicon").removeClass("addme-noclick");
					
					var words = name.split(" ");
					
					var initials = ""
					
					for (var j=0; j<words.length; j+=1){
						if (words[j].length > 0 && initials.length < 2) {
							initials += words[j].substring(0,1).toUpperCase();
						}
					}
					
					var colorNumber = 0;
					
					for (var j=0; j<id.length; j+=1) {
						colorNumber += id.charCodeAt(j);
					}
					
					colorNumber = colorNumber % allColors.length;
					
					
					$("<li class='item multipleuserscolor user-item' id='user-item-"+id+"'> <a href=\"history.php#"+id+"\" class='user-link'>  <div class='item-text'> <div> "+htmlEncode(name)+" </div> </div> </a> <div class='noclick mulefticon multipleusers_icon' href='' style=\"background-color:"+allColors[colorNumber]+"\"><div>"+initials+"</div></div> <a class='remove-button righticon-invisible' href='' data-user-id="+id+"> </a> <div class='noclick forward-button'> </div></li>").insertBefore("#addme-li");
					
					addRemoveButtonActions();
				}
				
				function removeUser(id) {
					
					$("#user-item-"+id).remove();
					
					var i = 0;
					var foundI = -1;
					while (localStorage.getItem("user-"+i) != null && localStorage.getItem("user-id-"+i) != null) {
						if (localStorage.getItem("user-id-"+i) == id){
							foundI = i;
							break;
						}
						i += 1;
					}
					i = foundI;
					
					if (i<0) {
						return;
					}
					
					while (localStorage.getItem("user-"+(i+1)) != null && localStorage.getItem("user-id-"+(i+1)) != null) {
						localStorage.setItem("user-"+i,localStorage.getItem("user-"+(i+1)))
						localStorage.setItem("user-id-"+i,localStorage.getItem("user-id-"+(i+1)))
						
						i += 1;
					}
					
					localStorage.removeItem("user-"+i);
					localStorage.removeItem("user-id-"+i);
					
					
				}
				
				for (var i=0; i<users.length; i+=1) {
					addUserLink(users[i]["name"],users[i]["id"]);
				}
				
				function startEditing(){
					$(".user-link").addClass("noclick");
					$(".forward-button").addClass("righticon-invisible");
					$(".remove-button").removeClass("righticon-invisible");
					$("#editicon").addClass("righticon-invisible");
					$("#okicon").removeClass("righticon-invisible");
				}
				
				function stopEditing(){
					$(".user-link").removeClass("noclick");
					$(".forward-button").removeClass("righticon-invisible");
					$(".remove-button").addClass("righticon-invisible");
					$("#editicon").removeClass("righticon-invisible");
					$("#okicon").addClass("righticon-invisible");
				}
				
				$("#edit-button").click(function(event){
					event.preventDefault();
					startEditing();
				});
				
				$("#ok-button").click(function(event){
					event.preventDefault();
					stopEditing();
				});
				
				function addRemoveButtonActions(){
				
					$( ".remove-button").unbind("click");
					
					$(".remove-button").click(function(event){
						event.preventDefault();
						if (confirm("Are you sure you wish to delete this user?")){
							var id = $(this).attr("data-user-id");
							removeUser(id);
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
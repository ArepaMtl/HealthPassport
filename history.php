<!DOCTYPE html>
<html manifest="cache.manifest">
	<head>
		<title>
			Health Passport Web App - History
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/arepa.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="javascript/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="javascript/arepa.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$(".item>a:first-child").click(function(event){
					event.preventDefault();
					
					var this_item = this;
					var $items = $(this).parent().find(".history-items");
					var $downButton = $(this).parent().find(".below-button");
					if ($items.css("display")==="none"){
						$items.css({"opacity":0});
						$items.show();
						$items.animate({"opacity":1},300);
						$downButton.css({"transform":"rotate(180deg)"},2000);
						/*$('html, body').animate({
	    					"scrollTop": $(this_item).offset().top
						}, 200);*/
						//$('html, body').scrollTop($(this_item).offset().top);
					}else{
						if ($(this).parent().hasClass("detached-header")){
							$(this).parent().removeClass("detached-header");
							$('html, body').scrollTop($(this_item).offset().top);
						}
						$items.hide();
						$downButton.css({"transform":"rotate(0deg)"},2000);
					}
				});
				
				$(window).scroll(function() {
    				var height = $(window).scrollTop();
    				//console.log("height: "+height);
    				$(".item>.history-items").each(function(){
    					if ($(this).css("display") != "none"){
    						var offset = $(this).offset();
    						var itemHeight = $(this).height();
    						//console.log("offset.top: "+offset.top+", offset.height: "+offset.height);
    						if (itemHeight > 400 && height > offset.top-74 && height < offset.top-74+itemHeight){
    							$(this).parent().addClass("detached-header");
    						}else{
    							$(this).parent().removeClass("detached-header");
    						}
    					}else{
    						$(this).parent().removeClass("detached-header");
    					}
    				});
				});
				
				
				
				var loaderIds = [];
				
				$(".loader").each(function(){
					loaderIds.push($(this).attr("id"));
				});
				
				var updateLoader = function(loader_id){
					var $container = $("#"+loader_id+"-container");
					var loaderObject = {};
					$container.find("[data-loader='"+loader_id+"']").each(function(){
						var dataLoaderId = $(this).attr("data-loader-id");
						var ifIndex = dataLoaderId.indexOf("_IF_");
						var shouldCheck = true;
						if (ifIndex>-1){
							//console.log("dataLoaderId "+dataLoaderId+" has a condition!");
							var conditionId = dataLoaderId.substring(ifIndex+4);
							dataLoaderId = dataLoaderId.substring(0,ifIndex);
							//console.log("condition id "+conditionId+" for "+dataLoaderId);
							if (!$("#"+conditionId).is(':checked')){
								//console.log("setting to false");
								shouldCheck = false;
							}
							//console.log("done.");
						}
						if (shouldCheck){
							if ($(this).is("[type=radio]")){
								if ($(this).is(":checked")){
									loaderObject[dataLoaderId]=1;
								}else if (loaderObject[dataLoaderId] != 1){
									loaderObject[dataLoaderId]=0;
								}
							}else if ($(this).is("[type=text]")){
								if ($(this).val().length > 0){
									loaderObject[dataLoaderId]=1;
								}else if (loaderObject[dataLoaderId] != 1){
									loaderObject[dataLoaderId]=0;
								}
							}
						}
					});
					//console.log(loaderObject);
					var total = 0;
					var progress = 0;
					for (var key in loaderObject) {
  						total += 1;
  						progress += loaderObject[key];
					}
					var percentage = 100;
					if (total>0){
						percentage = 100.0*progress/total;
					}
					if (percentage>100){
						percentage = 100;
					}
					$("#"+loader_id).css("width",percentage+"%");
				};
				
				var updateLoaders = function(){
					for (var i=0;i<loaderIds.length;i++){
						updateLoader(loaderIds[i]);
					}
				};
				
				function supports_html5_storage() {
  					try {
    					return 'localStorage' in window && window['localStorage'] !== null;
  					} catch (e) {
   						return false;
  					}
				}
				
				var resaveHistoryInputs = function(container_id,oldNumCopies){
					if (!supports_html5_storage()){
						return;
					}
					
					var numCopies = $("#"+container_id).attr("data-num-copies");
					
					localStorage.setItem("history-"+container_id+"-num-copies",numCopies);
					
					$("#"+container_id).find("[data-history-id]").each(function(){
						var historyId = $(this).attr("data-history-id");
						localStorage.removeItem("history-"+historyId);
						for (var i=1;i<oldNumCopies;i++){
							localStorage.removeItem("history-"+historyId+"."+i);
						}
					});
					
					$copy = $("#"+container_id);
					
					for (var i=0;i<numCopies;i++){
						$copy.find("[data-history-id]").each(function(){
							//console.log("called from 1");
							saveHistoryInput(this);
						});
						$copy = $copy.next();
					}
					
					
				}
				
				var saveHistoryInput = function(element){
					
					if (!supports_html5_storage()){
						return;
					}
					
					var historyId = $(element).attr("data-history-id");
					
					var copiedAncestorId = $(element).attr('data-copied-ancestor-id');
					
					if (typeof copiedAncestorId !== typeof undefined && copiedAncestorId !== false){
						//console.log("has ancestor!!!!!");
						var copiedAncestorId = $(element).attr("data-copied-ancestor-id");
						var originalCopyId = $("#"+copiedAncestorId).attr("data-original-copy-id");
						var originalElement = $("#"+originalCopyId).get(0);
						var copiedElement = $("#"+copiedAncestorId).get(0);
						
						var $original = $(originalElement);
						
						var num = 0;
						
						for (var $copy = $original; $copy.get(0) != copiedElement; $copy = $copy.next()){
							num++;
						}
						
						historyId = historyId+"."+num;
					}else{
						//console.log("has NO ancestor!!!!!");
					}
					
					var val = $(element).val();
					
					if ($(element).is("[type=radio]") || $(element).is("[type=checkbox]")){
						val = $(element).is(":checked");
					}
					
					localStorage.setItem("history-"+historyId,val);
					
				}
				
				var loadHistoryInput = function(element){
					
					if (!supports_html5_storage()){
						return;
					}
					
					var historyId = $(element).attr("data-history-id");
					
					var copiedAncestorId = $(element).attr('data-copied-ancestor-id');
					
					if (typeof copiedAncestorId !== typeof undefined && copiedAncestorId !== false){
						//console.log("has ancestor!!!!!");
						var copiedAncestorId = $(element).attr("data-copied-ancestor-id");
						var originalCopyId = $("#"+copiedAncestorId).attr("data-original-copy-id");
						var originalElement = $("#"+originalCopyId).get(0);
						var copiedElement = $("#"+copiedAncestorId).get(0);
						
						var $original = $(originalElement);
						
						var num = 0;
						
						for (var $copy = $original; $copy.get(0) != copiedElement; $copy = $copy.next()){
							num++;
						}
						
						historyId = historyId+"."+num;
					}else{
						//console.log("has NO ancestor!!!!!");
					}
					
					var value = localStorage.getItem("history-"+historyId);
					
					if (value==null){
						return;
					}
					
					if ($(element).is("[type=radio]") || $(element).is("[type=checkbox]")){
						if (value=="true"){
							value = true;
						}else if (value=="false"){
							value = false;
						}
						//console.log("setting value "+(typeof value)+" for element "+element);
						$(element).prop("checked",value);
					}else{
						$(element).val(value)
					}
					
					
					
				}
				
				var addNewCopy = function(copiableItemId,doResave){
					
					var $item = $("#"+copiableItemId);
					var numCopies = +$item.attr("data-num-copies");
					var numEverCopies = +$item.attr("data-num-ever-copies");
					//alert(numEverCopies);
					var $clone = $item.clone(true);
					$clone.attr("data-original-copy-id",$item.attr("id"));
					$clone.attr("id",$clone.attr("id")+numEverCopies);
					$clone.find("input").attr("data-copied-ancestor-id",$clone.attr("id"));
					$clone.removeAttr("data-num-copies");
					$clone.removeAttr("data-num-ever-copies");
					var $lastItem = $item;
					//alert(numCopies);
					//alert($lastItem.length);
					for (var i=1;i<numCopies;i+=1){
						$lastItem = $lastItem.next();
					}
					$clone.find("input[type=text]").val("");
    				$clone.find("input[type=radio]").prop('checked',false);
					//alert($lastItem.length);
					//alert($clone.length);
					$lastItem.after($clone);
					$item.attr("data-num-copies",numCopies+1);
					$item.attr("data-num-ever-copies",numEverCopies+1);
					
					$clone.find("input[type=text]").first().focus();
					
					if (doResave){
						resaveHistoryInputs(copiableItemId,numCopies);
					}
				}
				
				$("[data-copiable-item-id]").click(function(event){
					event.preventDefault();
					var copiableItemId = $(this).attr("data-copiable-item-id");
					addNewCopy(copiableItemId,true);
				});
				
				$("[data-erasable-level]").click(function(event){
					event.preventDefault();
					var $erasable = $(this);
					var numLevels = +$erasable.attr("data-erasable-level");
					for (var i=1;i<=numLevels;i++){
						$erasable = $erasable.parent();
					}
					var numCopiesAttr = $erasable.attr('data-num-copies');
					var numEverCopiesAttr = $erasable.attr('data-num-ever-copies');

					// For some browsers, `attr` is undefined; for others,
					// `attr` is false.  Check for both.
					if (typeof numCopiesAttr !== typeof undefined && numCopiesAttr !== false) {
						var numCopies = +numCopiesAttr;
						if (numCopies==1){
							var hasFocus = $erasable.find("input[type=text]").first().is(":focus");
    						$erasable.find("input[type=text]").val("");
    						$erasable.find("input[type=radio]").prop('checked',false);
    						if (!hasFocus){
    							//TODO: FIX THIS!
    							//$erasable.find("input[type=text]").first().focus();
    						}
    						
    						resaveHistoryInputs($erasable.attr("id"),numCopies);
    						
    					}else{
    						$next = $erasable.next();
    						$next.attr("id",$erasable.attr("id"));
    						$next.attr("data-num-copies",$erasable.attr("data-num-copies")-1);
    						$next.attr("data-num-ever-copies",$erasable.attr("data-num-ever-copies"));
    						$next.removeAttr("data-original-copy-id");
    						$next.find("input").removeAttr("data-copied-ancestor-id");
    						$erasable.remove();
    						
    						resaveHistoryInputs($next.attr("id"),numCopies);
    					}
					}else{
						//alert("has more than one copy!");
						$first = $erasable;
						//var alertCount=1;
						while(!$first.is("[data-num-copies]")){
							//alertCount++
							//if (alertCount<10){
								//alert("up!, has class="+$first.attr("class"));
							//}
							$first = $first.prev();
						}
						$first.attr("data-num-copies",$first.attr("data-num-copies")-1);
						$erasable.remove();
						
						resaveHistoryInputs($first.attr("id"),$first.attr("data-num-copies")+1);
					}
				});
				
				
				
				
				//At the end!:
				
				var updateDependants = function(element,doSave){
					//alert(element);
					console.log("updating dependants for "+$(element).attr("id"));
					
					if (element==null || element==undefined){
						return;
					}
					//alert(1);
					var depString = $(element).attr("data-dependants");
					if (depString==null || depString==undefined || depString.length<1){
						return;
					}
					//alert(2);
					var depArray = depString.split(",");
					if ($(element).is(':checked')){
						//alert(3);
						for (var i=0;i<depArray.length;i+=1){
							$dependant = $("#"+depArray[i]);
							$dependant.show();
						}
					}else{
						//alert(4);
						for (var i=0;i<depArray.length;i+=1){
							$dependant = $("#"+depArray[i]);
							$dependant.hide();
							$dependant.find("input[type=checkbox],input[type=radio]").each(function(){
								$(this).prop('checked', false);
								//console.log("called from 2");
								if (doSave){
									saveHistoryInput(this);
								}
							});
							$dependant.find("input[type=text]").each(function(){
								$(this).val("");
								//console.log("called from 3");
								if (doSave){
									saveHistoryInput(this);
								}
							});
						}
					}
				};
				
				//Order!!!!!
				
				$("[data-num-copies]").each(function(){
					$(this).attr("data-num-ever-copies",$(this).attr("data-num-copies"));
				});
				
				//Loading data finally!
				
				if (supports_html5_storage()){
				
					$("[data-num-copies]").each(function(){
						var item_id = $(this).attr("id");
						var localKey = item_id+"-num-copies";
						var localValue = localStorage.getItem("history-"+localKey);
						if (localValue==null){
							return;
						}
						for (var i=1;i<localValue;i+=1){
							addNewCopy(item_id,false);
						}
					});		
					
					$("[data-history-id]").each(function(){
						loadHistoryInput(this);
					});
				
				}
				
				$("[data-dependants]").change(function(){
					updateDependants(this,true);
				});
				
				$("[data-other-radios]").change(function(){
					var otherString = $(this).attr("data-other-radios");
					if (otherString==null || otherString==undefined || otherString.length<1){
						return;
					}
					var otherArray = otherString.split(",");
					for (var i=0;i<otherArray.length;i+=1){
						updateDependants(document.getElementById(otherArray[i]),true);
					}
				});
				
				$("[data-dependants]").each(function(){
					updateDependants(this,false);
				});
				
				$("[data-loader]").on("input propertychange paste change",function(){
					updateLoader($(this).attr("data-loader"));
				});
				
				$("[data-history-id]").on("input propertychange paste change",function(){
					saveHistoryInput(this);
					if ($(this).is("input[type=radio]")){
						var name = $(this).attr("name");
						var thisRadio = this;
						$("input[name='"+name+"']").each(function(){
							if (this != thisRadio){
								saveHistoryInput(this);
							}
						});
					}
				});
				
				
				//Almost very end
				
				
				
				//At the very very end!
				updateLoaders();
				
			});
		</script>
		
		<!--<style type="text/css">
		
			@font-face {
 				font-family: FranchiseBold;
				src: url(fonts/Franchise-Bold.woff);
				font-weight: bold;
			}
		
			body,ul,li,h1{border:0;margin:0;padding:0;font-family:FranchiseBold}
			#top-bar{height:64px;box-shadow:0 3px 0.4em rgba(0,0,0,0.5);background-color:white;position:relative}
			#back-button{position:absolute;left:19px;top:50%;width:12px;height:21px;background:url('back-arrow.png');
			background-size:100% 100%;margin-top:-10px;}
			h1{position:absolute;top:50%;left:50%;
			-ms-transform: translate(-50%,-50%);
			-webkit-transform: translate(-50%,-50%);
			transform: translate(-50%,-50%);
			font-size: 28pt;color:rgb(83,83,83)}
			li{position:relative;display:block;margin-top:10px}
			/*TODO: IT DID NOT WORK WHEN I ADDED POSITION RELATIVE HERE */
			.item{background-color:white}
			.item>a{text-decoration:none;display:block;position:relative;height:64px;line-height:64px;
			text-align:center;color:white;background-color:rgb(80,197,234);box-shadow:0 3px 0.4em rgba(0,0,0,0.5);
			font-size:20pt;color:rgb(83,83,83);color:white;font-weight:normal}
		</style>
		
		
		<script type="text/javascript">
			$(document).ready(function(){
				$(".item>a").click(function(event){
					event.preventDefault();
					$arepa.maximizeElement(this.parentNode);
				});
			});
		</script>-->
		
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
		<h1 data-localize="yourhistory.title" class='centered'> Your history </h1> 
		<a href="index.php" id="back-button"> </a>
		<!--<a href="" id="printericon"> </a>-->
		<!--<div id="button"> <a href="" data-localize="history.print"> Print</a> </div>-->
	</div>
	<?php
		function getHistoryItems($file){
			include $file;
		}
	
	?>
	
	<ul id="menuyourhistory">
		<li class="item"><a href="personal_information.php">  <div class="loader personalinfo_loader" id="loader-personal">  </div><div class='item-text submenu-text'><div>Personal information</div><div>Informations personneles</div></div> <div class="below-button noclick"> </div></a><div class="history-items" id="loader-personal-container"><?php getHistoryItems("personal_information.php"); ?></div></li>
		<li class="item"><a href="medical_contacts.php"> <div class="loader medical_contacts_loader" id="loader-medical-contacts">  </div><div class='item-text submenu-text'><div>Medical contacts</div><div>Contacts m&eacute;dicaux</div></div> <div class="below-button noclick"> </div></a><div class="history-items" id="loader-medical-contacts-container"><?php getHistoryItems("medical_contacts.php"); ?></div></li>
		<li class="item"><a href="allergies.php">  <div class="loader allergies_loader" id="loader-allergies">  </div><div class='item-text submenu-text'><div>Allergies</div><div>Allergies</div></div> <div class="below-button noclick"> </div></a><div class="history-items" id="loader-allergies-container"><?php getHistoryItems("allergies.php"); ?></div></li>
		<li class="item"><a href="current_medication.php">  <div class="loader current_medication_loader" id="loader-medication">  </div><div class='item-text submenu-text'><div>Current medication</div><div>M&eacute;dication actuelle</div></div> <div class="below-button noclick"> </div></a><div class="history-items" id="loader-medication-container"><?php getHistoryItems("current_medication.php"); ?></div></li>
		<li class="item"><a href="current_diagnosis.php"> <div class="loader current_diagnosis_loader" id="loader-diagnosis">  </div><div class='item-text submenu-text'><div>Current diagnosis</div><div>Diagnostic connu</div></div> <div class="below-button noclick"> </div></a><div class="history-items" id="loader-diagnosis-container"><?php getHistoryItems("current_diagnosis.php"); ?></div></li>
		<li class="item"><a href="medical_history.php"> <div class="loader medical_history_loader" id="loader-history">  </div><div class='item-text submenu-text'><div>Medical history</div><div>Ant&eacute;c&eacute;dents m&eacute;dicaux</div></div> <div class="below-button noclick"> </div></a><div class="history-items" id="loader-history-container"><?php getHistoryItems("medical_history.php"); ?></div></li>
		<li class="item"><a href="surgical.php"> <div class="loader surgical_loader" id="loader-surgical">  </div><div class='item-text submenu-text'><div>Surgical history</div><div>Ant&eacute;c&eacute;dents chirurgicaux</div></div> <div class="below-button noclick"> </div></a><div class="history-items" id="loader-surgical-container"><?php getHistoryItems("surgical.php"); ?></div></li>
		<li class="item"><a href="living_habits.php"> <div class="loader living_habits_loader" id="loader-habits">  </div><div class='item-text submenu-text'><div>Living Habits</div><div>Habitudes de vie</div></div> <div class="below-button noclick"> </div></a><div class="history-items" id="loader-habits-container"><?php getHistoryItems("living_habits.php"); ?></div></li>
	</ul>
	</body>
</html>
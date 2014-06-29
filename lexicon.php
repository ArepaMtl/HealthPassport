<!DOCTYPE html>
<html>
	<head>
		<title>
			Health Passport Web App - Lexicon
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="javascript/arepa.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$(".item>a:first-child").click(function(event){
					event.preventDefault();
					var this_item = this;
					var $items = $(this).parent().find(".lexicon-items");
					var $downButton = $(this).parent().find(".below-button");
					if ($items.css("display")==="none"){
						$items.show(200);
						$downButton.css({"transform":"rotate(180deg)"},2000);
						$('html, body').animate({
        					"scrollTop": $(this_item).offset().top
    					}, 500);
					}else{
						$items.hide(200);
						$downButton.css({"transform":"rotate(0deg)"},2000);
					}
				});
			});
		</script>
	</head>
	<body>
	<div class="top-bar">
		<h1 data-localize="lexicon.title" class='centered'> Lexicon </h1>
		<a href="index.php" id="back-button"></a> 
		<a id="informationicon" href="">  </a>
	</div>	
	<div class="white-box">
		<input type="text" name="checkListItem" class="search-box"/> <a href="" id="search-button"> </a> 
	</div>
	<ul id="menulexicon">
	
<?php
	$handle = @fopen("lexicon.txt", "r");
	if ($handle) {
		$started = FALSE;
    	while (($buffer = fgets($handle, 4096)) !== false) {
        	if (substr($buffer,0,1)==="["){
        		if ($started){
        			print("</ul></li>");
        		}
        		$title = substr($buffer,1,strlen($buffer)-3);
        		$pos = strpos($title," / ");
        		if ($pos===FALSE){
        			$englishTitle = $title;
					$frenchTitle = " ";
        		}else{
        			$englishTitle = substr($title,0,$pos);
        			$frenchTitle = substr($title,$pos+3);
        		}
				$englishTitle = htmlentities($englishTitle);
				$frenchTitle = htmlentities($frenchTitle);
				print("<li class='item'><a href='' data-localize=''><div class='item-text submenu-text'><div>$englishTitle</div><div>$frenchTitle</div></div><div class='below-button noclick'></div></a><ul class='lexicon-items'>");
				$started = TRUE;
        	}else{
        		$pos = strpos($buffer," / ");
        		if ($pos===FALSE){
        			$englishLine = $buffer;
					$frenchLine = NULL;
        		}else{
        			$englishLine = substr($buffer,0,$pos);
        			$frenchLine = substr($buffer,$pos+3);
        		}
				if (substr($englishLine,0,1)==="-"){
					$englishLine = substr($englishLine,1);
					$dash = "&mdash;&nbsp;&nbsp;";
				}else{
					$dash = "";
				}
        		$englishLine = htmlentities($englishLine);
        		if ($frenchLine != NULL){
					$frenchLine = htmlentities($frenchLine);
				}
				print("<li><span>$dash$englishLine</span><span>");
				if ($frenchLine != NULL){
					print("&nbsp;&nbsp;&frasl;&nbsp;&nbsp;</span><span>$frenchLine</span>");
				}
				print("</li>");
        	}
    	}
    	if (!feof($handle)) {
        	//echo "Error: unexpected fgets() fail\n";
    	}
    	fclose($handle);
	}
?>
	
		
			<!--<li class="item"><a href="" data-localize="greetings" ><div class="item-text submenu-text"><div>Greetings</div><div>Salutation</div></div></a><ul class="lexicon-items"><li><span>Hello</span><span> &frasl; </span><span>Bonjour</span></li></ul> <div class="below-button noclick"></div></li>
			<li class="item"><a href="" data-localize="type_of_pain"><div class="item-text submenu-text"><div>Type of pain</div><div>Salutation</div></div></a> <div class="below-button noclick"></div></li>
			<li class="item"><a href="" data-localize="pain_scale"> Pain Scale</a> <a href="" class="below-button"></a></li>
			<li class="item"><a href="" data-localize="timing"> Timing</a><a href="" class="below-button"></a></li>-->
		</ul></li></ul>
	<!--	
	<div class="white_box"> 
		<p data-localize="no_results_popup"> No results available for "word"</p> 
		<p> <a href="" id="close-popup-button"> </a></p>
	</div>
	<div class="white_box"> 
		<p data-localize="help_popup"> This section will help you describe your symptoms to a health professional 
		who cannot speak English/Cette section vous aidera a decrire vos symptomes a un 
		professionnel de la sante qui ne peut pas parler francais. 		</p>
	 	<p><a href="" id="close-popup-button"> </a></p>
	</div>
	-->

	</body>
</html>
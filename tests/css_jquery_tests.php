<?php

//Parameters



?><!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style type="text/css">
			#element
			{
				position:fixed;
				background-color:red;
				-webkit-transition: all 0.2s linear;
				transition: all 0.2s linear;
				-webkit-transition-property: top,left,right,width,height;
				transition-property: top,left,right,width,height;
			}
			
			#element-1
			{
				position:fixed;
				background-color:blue;
				-webkit-transition: all 0.2s linear;
				transition: all 0.2s linear;
				-webkit-transition-property: top,left,right,width,height;
				transition-property: top,left,right,width,height;
			}
			
			#click
			{
				position:fixed;
				top:100px;
				left:10px;
			}
			
			.top-left
			{
				top:200px;
				left:0px;
				width:20px;
				height:20px;
			}
			
			.top-right
			{
				top:200px;
				left:100px;
				width:50px;
				height:50px;
			}
			
			.top-left-1
			{
				top:220px;
				left:0px;
				width:20px;
				height:50px;
			}
			
			.top-right-1
			{
				top:250px;
				left:100px;
				width:50px;
				height:20px;
			}
			
			
		</style>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#click").click(function(){
					$("#element").toggleClass("top-left");
					$("#element").toggleClass("top-right");
					$("#element-1").toggleClass("top-left-1");
					$("#element-1").toggleClass("top-right-1");
				});
			});
			
			
		</script>
	</head>
	<body>
		<div id="element" class="top-left"></div>
		<div id="element-1" class="top-left-1"></div>
		
		<a href="#" id="click">CLICK</a>
	    
	</body>
</html>

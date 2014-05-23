<!DOCTYPE html>
<html>
	<head>
		<style type="text/css">
		
			body
			{
				margin:0px;
				padding:0px;	
			}
		
			.section,.section-wrapper,input[type=radio],.section-header,.section-content{
				-webkit-transition: all 0.25s;
				transition: all 0.25s;
				-webkit-transition-property: width,height,opacity;
				transition-property: width,height,opacity;
			}
			
			.no-transition, .no-transition *
			{
				-webkit-transition: none;
				transition: none;
			}
		
			/*.section{
				background-color:red;
				position:relative;
				overflow:hidden;
			}*/
			
			/*.section input[type=checkbox]{
				z-index:1;
				position:absolute;
				left:0px;
				top:0px;
				width:100%;
				height:50px;
				opacity:1;
			}
			
			.section input + div{
				overflow:hidden;
				z-index:0;
				-webkit-transition: all .2s;
				transition: all .2s;
			}
			
			.section input[type=checkbox] + div > div:first-child{
				font-family:sans-serif;
				display:block;
				height:50px;
				background-color:blue;
			}
			
			.section input[type=checkbox] + div{
				background-color:yellow;
				height:50px;
			}
			
			.section input[type=checkbox]:checked + div{
				height:200px;
			}*/
			
			/*new stuff*/
			
			/*.section > input{
				position:absolute;
				left:0px;
				top:0px;
				width:100%;
				height:50px;
				background-color:yellow;
				
			}
			
			.section > .section-wrapper{
				padding-top:50px;
				background-color:blue;
			}
			
			.section .section-content{
				height:0px;
				background-color:blue;
				overflow:hidden;
			}
			
			.section > input:checked + .section-header > .section-content
			{
				height:200px;
			}
			*/
			
			.section
			{
				background-color:yellow;
				position:relative;
			}
			
			.section input
			{
				opacity:0;
			}
			
			.section > input
			{
				z-index:1;
				display:block;
				position:absolute;
				left:0px;
				top:0px;
				width:100%;
				height:50px;
			}
			
			.section > input:checked
			{
				display:none;
			}
			
			.section .section-wrapper
			{
				z-index:0;
				overflow:hidden;
				position:relative;
			}
			
			input + .section-wrapper
			{
				height:50px;
			}
			
			input:checked + .section-wrapper
			{
				height:400px;
			}
			
			.section-wrapper > input
			{
				z-index:1;
				position:absolute;
				left:0px;
				top:0px;
				width:100%;
				height:50px;
			}
			
			.section-wrapper > .section-header
			{
				z-index:0;
				position:absolute;
				left:0px;
				top:0px;
				right:0px;
				height:50px;
			}
			
			input + .section-content
			{
				position:absolute;
				left:0px;
				top:50px;
				right:0px;
				bottom:0px;
				overflow:hidden;
				opacity:1;
				background:red;
			}
			
			input:checked + .section-content
			{
				position:absolute;
				left:0px;
				top:50px;
				right:0px;
				bottom:0px;
				overflow:hidden;
				opacity:0;
			}
			
			
		</style>
	</head>
	<body>
	
	    <!--<div class="section">
	    	<input type="checkbox" id="checkbox-1">
	    	<div>
	    		<div>
	    			section header
	    		</div>
	    		section content!
	    	</div>
	    </div>-->
	    <div>Title.<br/>And such.</div>
	    <div class="section">
	    	<input type="radio" name="section-1">
	    	<div class="section-wrapper">
	    		<div class="section-header">
	    		section header
	    		</div>
	    		<input type="radio" name="section-1" checked>
	    		<div class="section-content">
	    		section content
	    		</div>
	    	</div>
	    	
	    </div>
	    
	    <div class="section">
	    	<input type="radio" name="section-2">
	    	<div class="section-wrapper">
	    		<div class="section-header">
	    		section header
	    		</div>
	    		<input type="radio" name="section-2" checked>
	    		<div class="section-content">
	    		section content
	    		</div>
	    	</div>
	    	
	    </div>
	    
	    <div class="section">
	    	<input type="radio" name="section-3">
	    	<div class="section-wrapper">
	    		<div class="section-header">
	    		section header
	    		</div>
	    		<input type="radio" name="section-3" checked>
	    		<div class="section-content">
	    		section content
	    		</div>
	    	</div>
	    	
	    </div>
	    <div>Footer.<br/>And such.</div>
	    
	</body>
</html>

<!DOCTYPE html>
<html>
	<head>
		<style type="text/css">
		
			body
			{
				margin:0px;
				padding:0px;	
			}
		
			.section-wrapper{
				-webkit-transition: all 0.25s linear;
				transition: all 0.25s linear;
				-webkit-transition-property: height;
				transition-property: height;
			}
			
			.section-content{
				-webkit-transition: all 0.25s linear;
				transition: all 0.25s linear;
				-webkit-transition-property: opacity;
				transition-property: opacity;
			}
			
			.no-transition, .no-transition *
			{
				-webkit-transition: none;
				transition: none;
			}
			
			.section
			{
				background-color:yellow;
				position:relative;
			}
			
			.section input
			{
				opacity:0;
			}
			
			.section > input, .section > label
			{
				z-index:1;
				display:block;
				position:absolute;
				left:0px;
				top:0px;
				width:100%;
				height:50px;
				cursor:pointer;
			}
			
			.section > label
			{
				z-index:2;
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
				z-index:1000;
			}
			
			.section-wrapper > input, .section-wrapper > label
			{
				z-index:1;
				position:absolute;
				left:0px;
				top:0px;
				width:100%;
				height:50px;
				cursor:pointer;
			}
			
			.section-wrapper > label
			{
				z-index:2;
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
	    	<label for="section-input-2"></label>
	    	<input type="radio" name="section-2" id="section-input-2">
	    	<div class="section-wrapper">
	    		<div class="section-header">
	    		section header
	    		</div>
	    		<label for="section-wrapper-input-2"></label>
	    		<input type="radio" name="section-2" checked id="section-wrapper-input-2">
	    		<div class="section-content">
	    		section content
	    		</div>
	    	</div>
	    	
	    </div>
	    
	    <div>Footer.<br/>And such.</div>
	    
	</body>
</html>

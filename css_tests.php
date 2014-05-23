<!DOCTYPE html>
<html>
	<head>
		<style type="text/css">
			.section{
				background-color:red;
				position:relative;
			}
			
			.section input[type=checkbox]{
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
			}
			
			
		</style>
	</head>
	<body>
	
	    <div class="section">
	    	<input type="checkbox" id="checkbox-1">
	    	<div>
	    		<div>
	    			section header
	    		</div>
	    		section content!
	    	</div>
	    </div>
	    
	</body>
</html>

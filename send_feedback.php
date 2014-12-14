<?php

if (array_key_exists("message", $_POST)) {
	$message = $_POST["message"];
	
	if (!file_exists('../HealthPassportFeedback')) {
    	mkdir('../HealthPassportFeedback', 0777, true);
	}
	
	file_put_contents("../HealthPassportFeedback/feedback.txt","\n---- NEW MESSAGE ----\n".$_SERVER["HTTP_USER_AGENT"]." / ".$_SERVER["REMOTE_ADDR"]." / ".date("F j, Y, g:i a")."\n---------------------\n".$message,FILE_APPEND);
}

?>
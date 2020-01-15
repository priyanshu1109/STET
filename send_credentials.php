<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
 </head>
 <body>
	<?php
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$application_no = $_GET["application_no"];
		$password = $_GET["password"];
		$message = "<p>You are successfully registered on the portal.Your login credentials are as follows:</p><br /><br /><h4>Application_no: ".$application_no."</h4><h4>password:".$password."</h4>";
		if(mail($_GET["email"],"Registration done!!",$message,$headers))
			echo "message sent";
	?>
 </body>
</html>

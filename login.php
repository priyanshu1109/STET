<?php 
	include("top.php");
?>

<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <link rel="stylesheet" href="style/main.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</title><meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge" /><meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">
	<!-- The core Firebase JS SDK is always required and must be listed first -->
	<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-app.js"></script>

	<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
	<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-analytics.js"></script>
  <title>STET</title>
 </head>
 <body>
	<div class="container-fluid">
	<!---          HEADER-START          ------->
		
		<!------          Header   End             -------------------->
		<div class="row">
			<div class="col-md-6">
				<div class="row" id="notice">
					<h4 style="margin:0px auto;color:white;">LOGIN</h4>
				</div>
				<div class="row" id="login-bg">
					<div class="login_form">
			
					  <div class="form-group">
						<label for="exampleInputEmail1">Application number</label>
						<input type="text" class="form-control" id="application_no" aria-describedby="application_noHelp" autocomplete="application_no">
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" id="Password1" />
					  </div>
					  <button type="submit" class="btn btn-primary" id="login">Submit</button>
					</div>
				</div>

			</div>
			<div class="col-md-6">
				<div class="row" id="notice">
					<h4 style="margin:0px auto;color:white;">NEW USER</h4>
				</div>
				<div class="row" id="login-bg">
					<div class="login_form">
				
					  <div class="form-group">
						<label for="exampleInputPassword1">Username</label>
						<input type="text" class="form-control" id="username">
					  </div>
					  <div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" class="form-control" id="Email" aria-describedby="emailHelp" autocomplete="email">
						<small id="emailHelp2" class="form-text text-muted">Your login credentials will be sent to this mail</small>
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Create Password</label>
						<input type="password" class="form-control" id="Password" autocomplete="new-password">
					  </div>
					  <button type="submit" class="btn btn-primary" id="register">Register</button>
					
					</div>
				</div>

			</div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="script/init.js"></script>
	<script src="script/signup.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-auth.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-firestore.js"></script>
	<script src="script/login.js"></script>
 </body>
</html>

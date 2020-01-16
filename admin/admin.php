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
	<script src="https://cdn.jsdelivr.net/npm/pdfjs-dist@2.0.943/build/pdf.min.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- The core Firebase JS SDK is always required and must be listed first -->
	<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-app.js"></script>
	<link rel="stylesheet" href="../style/main.css">
	<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
	<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-analytics.js"></script>
  <title>Document</title>
 </head>
 <body>
	<div class="container-fluid">
	<div class="row">
			<div class="col-md">
				<div class="row" id="notice">
					<h4 style="margin:0px auto;color:white;">ADMIN LOGIN</h4>
				</div>
				<div class="row" id="login-bg">
					<div class="login_form">
					<!--<form>-->
					  <div class="form-group">
						<label for="exampleInputEmail1">Email Id</label>
						<input type="text" class="form-control" id="email" aria-describedby="application_noHelp" autocomplete="application_no">
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" id="Password2" />
					  </div>
					  <div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="Check1">
						<label class="form-check-label" for="exampleCheck1">Check me out</label>
					  </div>
					  <button type="submit" class="btn btn-primary" id="login1">LOGIN</button>
					<!--</form>-->
					</div>
				</div>

			</div>
	</div>
	</div>  <!-- container-fluid -->
 </body>
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="../script/init.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-auth.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-firestore.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-storage.js"></script>
	<script src="../script/admin.js"></script>
 </html>

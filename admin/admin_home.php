<!doctype html>
<?php
	include("top.php");
?>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <link rel="stylesheet" href="../style/main.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- The core Firebase JS SDK is always required and must be listed first -->
	<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-app.js"></script>

	<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
	<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-analytics.js"></script>
  <title>STET</title>
 </head>
 <body>
	<div class="container-fluid">
			<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Application Form<i class="fa fa-caret-down"></i></a>
			</h4>
		</div>
		<div class="row">
			<div class="col-md">
					<a href="form1.html"  class="btn btn-primary" id="start_application" style="margin:0px auto;">Start Application Form</a>
			</div>
			<div class="col-md">
					<a href="form1.html"  class="btn btn-primary" id="close_application" style="margin:0px auto;">Close Application Form</a>
			</div>
		</div>
		<br/><br/>
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Admit Card<i class="fa fa-caret-down"></i></a>
			</h4>
		</div>
		<div class="row">
			<div class="col-md">
					<button  class="btn btn-primary" id="release_admit" style="margin:0px auto;">Release Admit Card</button>
			</div>
		</div>
		<br/><br/>
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Result<i class="fa fa-caret-down"></i></a>
			</h4>
		</div>
		<div class="row">
			<div class="col-md">
					<input type="file" name="upload" class="form-group" accept="application/pdf" id="upload_aadhar" required/><br/>
					<a href="form1.html"  class="btn btn-primary" id="fill_form" style="margin:0px auto;">Upload Result</a>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="../script/init.js"></script>
	<script src="../script/admin_home.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-firestore.js"></script>
 </body>
</html>

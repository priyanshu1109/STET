<?php
	include("top.php")
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
	<!-- The core Firebase JS SDK is always required and must be listed first -->
	<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-app.js"></script>

	<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
	<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-analytics.js"></script>
  <title>STET</title>
 </head>
 <body>
	<div class="container-fluid">
	
		<div class="container1">
	<ul class="progressbar">
	<li class="active">Fill Form</li>
		<li class="active">Payment</li>
		<li class="active">Registration completed</li>
	</ul>
	</div>
		<div class="row" style="border:1px solid black;margin:0px auto;width:50%;margin-top:20px;" id="status1">
			<div class="col-md-4">
				<img src="" style="width:200px" id="image"/>
			</div>
			<div class="col-md-8">
				<h3><marquee id="top_status">Succesfully Registered</marquee></h3>
				<h5 id="status"></h6>
				<h6>Txn_amount: 1</h6>
				<h6><?php echo("Application_no:".$_GET["application_no"]) ?></h6>
			</div>
		</div>
		<div class="row">
			<button class="btn btn-primary" style="margin:0px auto;margin-top:10px;width:100px"	id="print"></button>
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
	<script src="script/feespaid.js"></script>
	</body>
</html>

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
	<link rel="stylesheet" href="style/main.css">
	
</title><meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge" /><meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
	<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-analytics.js"></script>
  <title>Document</title>
 </head>
 <body>
	<div class="container-fluid">
	<!---          HEADER-START          ------->
		<!---                Header End                 ---->
	<div class="container1">
	<ul class="progressbar">
	<li class="active">Fill Form</li>
		<li class="active">Payment</li>
		<li>Registration completed</li>
	</ul>
	</div>
	<table style="margin:0px auto;
	border: 2px solid blue;
	margin-top:100px;">
		<tr>
			<td style="width:700px;text-align:center;border:1px solid blue;">Application Fee</td>
			<td style="width:350px;text-align:center;border:1px solid blue;">1</td>
		</tr>
		<tr>
			<td style="width:700px;text-align:center;border:1px solid blue;">SGST</td>
			<td style="width:350px;text-align:center;border:1px solid blue;">0</td>
		</tr>
		<tr>
			<td style="width:700px;text-align:center;border:1px solid blue;">CGST</td>
			<td style="width:350px;text-align:center;border:1px solid blue;">0</td>
		</tr>
		<tr>
			<td style="width:700px;text-align:center;border:1px solid blue;">Service Fee</td>
			<td style="width:350px;text-align:center;border:1px solid blue;">0</td>
		</tr>
		<tr>
			<th style="width:700px;text-align:center;border:2px solid blue;">TOTAL</th>
			<th style="width:350px;text-align:center;border:2px solid blue;">1</th>
		</tr>
	</table>
	<div class="row">
		<button class="btn btn-primary" style="margin:0px auto;margin-top:10px;width:100px;" id="pay">Pay</button>
	</div>
	</div>  <!-- container-fluid -->
 </body>
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="script/init.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-auth.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-firestore.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-storage.js"></script>
 <script src="script/form.js"></script>
 <script>
	function getUrlVars() {
		var vars = {};
		var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
			vars[key] = value;
		});
		return vars;
	}
	var application_no = decodeURIComponent(getUrlVars()["application_no"])
	var user_id = decodeURIComponent(getUrlVars()["user_id"])
	var pay = document.getElementById("pay")
	pay.onclick = function(){
		window.location.href = "pay.php?application_no="+application_no+"&user_id="+user_id
	}
 </script>
</html>

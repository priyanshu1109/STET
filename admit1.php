<!DOCTYPE html>
<html>
<head>
	<title>12</title>
	<style type="text/css">
		 th, td {
			height: 25px;
			border: 1px solid black;
}
td{
	font-size: 25px;
	color: #020000;
	text-align:center;
}

	</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- The core Firebase JS SDK is always required and must be listed first -->
	<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-app.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">
	<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
	<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-analytics.js"></script>
</head>
<body>
	<div class="container-fluid";">
	<div class="row">
	<div class="col-md-4">
	<img src="images/logo.jpg" style="width: 150px;
	height: 150px;
	margin: 10px 10px 10px 10px;">
	</div>
	<div class="col-md">
	<p style="font-size:35px;margin:0px auto;">SIKKIM BOARD OF EXAMINATION</p>
	<p style="font-size:30px;margin-left:10px;">
		STATE TEACHER ELIGIBILTY TEST-2020
	</p>
	<p style="font-size:25px;
			 margin-left:20px;">
		address address address,address , address.
	</p>
	</div>
	</div>
	<div id="ADMITCARD" style="width: 100%;
	height: 50px;
	border-style:solid;
	border-width: 3px;
	border-left: 0;
	border-right: 0;
	text-align: center;
	border-collapse: collapse;">
		<p style="font-size: 30px;"><u>ADMIT CARD</u></p>
	</div>
	<div id="divphoto" style="width=100%;
	height: 300px;
	">
	<div style="width: 200px;
	height: 300px;
	float: right;
	margin-right: 50px;
	margin-top: 10px;
	">
	<img style="width: 200px;
	height: 250px;
	" id="idphoto">
	<img src="sign.jpg" style="width:200px;
		height: 50px;
		 " id="idsign">
	</div>	
	</div>
	<br/>
	<div style="width: 100%;
	height: auto;">
		<table style="width:100%;
		height: auto;">
			
			<tr style="width: 70%;">
				<td style="width: 30%; background-color: #686868;">NAME
				</td>
				<td style="width: 70%;" id="name1"></td>
			</tr>
			<tr style="width: 70%;">
				<td style="width: 30%; background-color: #686868;">ROLL NO.
				</td>
				<td style="width: 70%;" id="roll_no">
				</td>	
			</tr>
			<tr style="width: 70%;">
				<td style="width: 30%; background-color: #686868">DATE OF BIRTH
				</td>
				<td style="width: 70%;" id="DOB">
				</td>
	
			</tr>
			<tr>
				<td style="width: 30%; background-color: #686868">VERNACULAR OPTION
				</td>
				<td style="width: 70%;" id="vernacular_option">
				</td>
			</tr>
			<tr style="width: 70%;">
				<td style="width: 30%; background-color: #686868">LEVEL
				</td>
				<td style="width: 70%;" id="level">
				</td>
				
				
			</tr>
			</tr><tr style="width: 70%;">
				<td style="width: 30%; background-color: #686868">MOTHER'S NAME
				</td>
				<td style="width: 70%;" id="mothers_name1">
				</td>
				
				
			</tr>
			</table>
			<table style="width:100%;
		height: auto;">
		    <tr>
		    	<td style="font-size: 25px;
		    	width: 33%;
		    	background-color: #686868">
		    		DATE OF EXAM	
		    	</td>
		    	<td style="font-size: 25px;
		    	width: 33%;
		    	background-color: #686868">
		    		VENUE
		    	</td>
                <td style="font-size: 25px;
                width: 33%;
                background-color: #686868">
		    		TIMING
		    	</td>



		    </tr>
		    <tr>
		    	<td style="font-size: 25px;
		    	width: 33%;"
		    	id="exam_date"> 		
		    	</td>
		    	<td style="font-size: 25px;
		    	width: 33%;"
		    	id="venue">	
		    	</td>
                <td style="font-size: 25px;
                width: 33%;
                " id="timing">
		    	</td>



		    </tr>
		    	
		   
			
		</table>


	<div style="
	width: 100%;
	height: 200px;
	border-style: solid;	border-top: 0;
	border-right: 0;
	border-left: 0; ">
		<div style="width: 400px;
		height: 200px;
		
		float: right;
		margin: 50px;
		">
		<div style="width: 395px;
		height: 100px;
		"><img src="sign.jpg" style="width: 395px;
		height: 100px;" id="idsign">
			

		</div>
		<p style="font-size: 20px;
		text-align: center;"> CONTROLLER OF EXAMINATION
		</p>

			
		</div>
        

		

	</div>
	<p style="font-size: 30px;"><u>DIRECTION FOR EXAMINAITON</u>:-</p>
	<p>1.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
<p>2.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p><p>3.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p><p>4.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p><p>5.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p><p>6.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p><p>7.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
</div>

</div>
<script src="script/init.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-storage.js"></script>
<script src="script/admit1.js"></script>
</body>
</html>
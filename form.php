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
	<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/pdfjs-dist@2.0.943/build/pdf.min.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- The core Firebase JS SDK is always required and must be listed first -->
	<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-app.js"></script>
	<link rel="stylesheet" href="style/main.css">
	<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
	<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-analytics.js"></script>
	
  <title>Document</title>
 </head>
 <body>
	<div class="container-fluid">
	<!---          HEADER-START          ------->
	<!---                Header End                 ---->
	<div class="row">
		<h6 style="margin:0px auto;color:red;" class="blinking">Please write details similar to aadhar card</h6>
	</div>
	<div class="container1">
	<ul class="progressbar">
	<li class="active">Fill Form</li>
		<li>Payment</li>
		<li>Registration completed</li>
	</ul>
	</div>
	<form id="myform" style="margin-left:128px;margin-right:128px;">
	<div class="panel-heading">
		<h4 class="panel-title">
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Personal Details </a>
        </h4>
    </div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md col-sm">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="First Name" id="first_name" name="first_name" required/>
                </div>
			</div>
			<div class="col-md col-sm">
				<div class="form-group">
					<input type="text"  placeholder="Last Name" class="form-control" id="last_name" name="last_name" required>
				</div>  
			</div>
			</div>
			<div class="row">
			<div class="col-md-4 col-sm-4">
				<div class="form-group">
					<input type="text"  placeholder="Father's name" class="form-control" name="father_name" id="father_name" required>
				</div>  
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="form-group">
					<input type="text"  placeholder="Mother's name" class="form-control" name="mother_name" id="mother_name" required>
				</div>  
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="form-group">
					<select class="form-control" name="gender" id="gender" required>
							<option>Gender</option>
							<option>Male</option>
							<option>Female</option>
							<option>Other</option>
						</select>
				</div>  
			</div>
			</div>
			<div class="row">
			<div class="col-md col-sm">
				<div class="form-group">
					<input type="text"  placeholder="Address" class="form-control" name="address" id="address" required>
				</div>  
			</div>
			</div>
			<div class="row">
			<div class="col-md-4 col-sm-4">
				<div class="form-group">
					<input type="text" class="form-control" id="city" placeholder="City" name="city" required/>
                </div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="form-group">
					<input type="text"  placeholder="State" id="state" class="form-control" name="state" required/>
				</div>  
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="form-group">
					<input type="text"  placeholder="Pincode" class="form-control" name="pincode" id="pincode" required/>
				</div>  
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="form-group">
					<input type="date" class="form-control" placeholder="Date of birth" name="dob" id="dob" required/>
                </div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="form-group">
					<input type="text"  placeholder="Mobile number" class="form-control" name="mobile_number" id="mobile_number" required/>
				</div>  
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="form-group">
					<input type="text"  placeholder="Aadhar number" class="form-control" name="aadhar_number" id="aadhar_number" required/>
				</div>  
			</div>
			</div>
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Paper Details<i class="fa fa-caret-down"></i></a>
				</h4>
			</div>
			<div class="panel-body">
				<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="form-group">
						<select class="form-control" name="examination_mode" id="examination_mode" required>
							<option>Examination Mode</option>
							<option>English</option>
							<option>Hindi</option>
							<option>Nepali</option>
						</select>
					</div>
				 </div>
				 <div class="col-md-4 col-sm-4">
					<div class="form-group">
						<select class="form-control" name="paper_type" id="paper_type" required>
							<option>Paper type</option>
							<option>Paper-1(Primary)</option>
							<option>Paper-2(Secondary)</option>
						</select>
					</div>
				 </div>
			</div>
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Educational Qualification<i class="fa fa-caret-down"></i></a>
				</h4>
			</div>
			<div class="panel-body">
				<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="form-group">
						<h6>Class X details</h6>
					</div>
				 </div>
				 </div>
				 <div class="row">
				 <div class="col-md-4 col-sm-4">
					<div class="form-group">
						<input type="text"  placeholder="Total Marks Obtained" class="form-control" name="Xtotal_obtained" id="Xtotal_obtained" required/>
					</div>
				 </div>
				 <div class="col-md-4 col-sm-4">
					<div class="form-group">
						<input type="text"  placeholder="Total Marks" class="form-control" name="Xtotal_marks" id="Xtotal_marks" required/>
					</div>
				 </div>
			</div>
			<div class="panel-body">
				<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="form-group">
						<h6>Class XII details</h6>
					</div>
				 </div>
				 </div>
				 <div class="row">
				 <div class="col-md-4 col-sm-4">
					<div class="form-group">
						<input type="text"  placeholder="Total Marks Obtained" class="form-control" name="XIItotal_obtained" id="XIItotal_obtained" required/>
					</div>
				 </div>
				 <div class="col-md-4 col-sm-4">
					<div class="form-group">
						<input type="text"  placeholder="Total Marks" class="form-control" name="XIItotal_marks" id="XIItotal_marks" required/>
					</div>
				 </div>
				 </div>
				<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="form-group">
						<h6>Higher Education</h6>
					</div>
				 </div>
				 </div>
				<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="form-group">
						<select class="form-control" name="education" id="education" required>
							<option>Education</option>
							<option>B.Ed.</option>
							<option>D.Ed.</option>
						</select>
					</div>
				 </div>
				 <div class="col-md-4 col-sm-4">
					<div class="form-group">
						<select class="form-control" name="marks_type" id="marks_type" required>
							<option>Marks type</option>
							<option>CGPA</option>
							<option>Percentage</option>
						</select>
					</div>
				 </div>
				 <div class="col-md-4 col-sm-4">
					<div class="form-group">
						<input type="text"  placeholder="Percentage or CGPA" class="form-control" name="percentage" id="percentage" required/>
					</div>
				 </div>
			</div>
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Other Details<i class="fa fa-caret-down"></i></a>
				</h4>
			</div>
			<div class="row">
			<div class="col-md-4 col-sm-4">
					<div class="form-group">
						<select class="form-control" name="impaired" id="impaired" required>
							<option>Are you orthopedically/Locomotor impaired</option>
							<option>Yes</option>
							<option>No</option>
						</select>
					</div>
				 </div>
				 <div class="col-md-4 col-sm-4">
					<div class="form-group">
						<select class="form-control" name="appeared" id="appeared" required>
							<option>Have you appeared for STET before</option>
							<option>Yes</option>
							<option>No</option>
						</select>
					</div>
				 </div>
			</div>
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Upload documents<i class="fa fa-caret-down"></i></a>
				</h4>
			</div>
			<div class="panel-body">
				<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="form-group">
						<label for="upload_aadhar" style="color:red">Upload aadhar card here.Only aadhar cards from digilocker are accepted in pdf format.</label><br/>
						<div class="row">
						<div class="col-md">
							<input type="file" name="upload" class="form-group" accept="application/pdf" id="upload_aadhar" required/>
						</div>
						<div class="col-md">
							<p id="validation1" style="color:red;background-color:#feeceb;margin:0px auto;"></p>
						</div>
						</div>
					</div>
				 </div>
				 </div>
				 <div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="form-group">
						<label for="upload_aadhar" style="color:red">Upload Photo.Size should not exceed 1.5 MB</label><br/>
						<input type="file" name="upload" class="form-group" id="upload_photo" required/>
					</div>
				 </div>
				 </div>
				 <div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="form-group">
						<label for="upload_aadhar" style="color:red">Upload Signature.Size should not exceed 1.5 MB</label><br/>
						<input type="file" name="upload" class="form-group"  id="upload_signature" required/>
					</div>
				 </div>
				 </div>
				<div class="row">
				<div class="input-group mb-3">
				 <div class="input-group-prepend">
					<div class="input-group-text">
						<input type="checkbox" aria-label="Checkbox for following text input" required>
							I hereby declare that all the information given by me in this application is true and correct to the best of my knowledge and belief.
					</div>
				</div>

				</div>
			</div>
			<div class="row">
		<input type="text" value="hidden" required hidden />
		<!--<input type="submit" class="btn btn-primary" id="submit2" hidden />-->
		<button class="btn btn-primary" id="submit1" disabled />Submit</button>
		</form>
	</div>
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
 $(document).ready(function () {
    var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn'),
        allPrevBtn = $('.prevBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-indigo').addClass('btn-default');
            $item.addClass('btn-indigo');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allPrevBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            prevStepSteps = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

            prevStepSteps.removeAttr('disabled').trigger('click');
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i< curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-indigo').trigger('click');
});
</script>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="style/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="style/style.css" />
    <link rel="stylesheet" type="text/css" href="style/responsive.css" />
	<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase-app.js"></script>
    <title>STET-2020</title>
</head>
<body>
    
    <section class="login-wrp">
        <div class="container">
            <div class="login-row">
                <div class="col-md-6 col-sm-6">
                    <div class="login-img">
                        <img src="images/login-img.svg" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="login-frm">
                        <h1>Register</h1>

                  <!--      <form> -->
                            <div class="form-group">
                                <label><i class="fa fa-user"></i>Username</label>
                                <input type="email" name="" placeholder="" class="form-control" id="username">
                            </div>
							<div class="form-group">
                                <label><i class="fa fa-user"></i>Email</label>
                                <input type="email" name="" placeholder="" class="form-control" id="Email">
								<label>Email will be sent to this mail</label>
                            </div>
                            <div class="form-group">
                                <label><i class="fa fa-lock"></i>Create A Password</label>
                                <input type="Password" name="" placeholder="" class="form-control" id="Password">
                            </div>

                          

                            <button class="btn-main" id="register">Register</button>

                            <div class="login-we">
                                <p>Already a User?<a href="login.php">Sign In</a></p>
                            </div>
                        <!--</form> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript" src="script/jquery.min.js"></script> 
    <script type="text/javascript" src="script/bootstrap.min.js"></script>
    <script type="text/javascript" src="script/owl.carousel.min.js"></script> 
	
	<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->
	<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase-auth.js"></script>
	 <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase-firestore.js"></script>
	<script src="script/init.js"></script>
	<script src="script/signup.js"></script>
</body>
</html>
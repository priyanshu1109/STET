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
    <title>Part Mart</title>
</head>
<body>
    
    <section class="login-wrp">
        <div class="container">
            <div class="login-row">
                <div class="col-md-6 col-sm-6">
                    <div class="login-img">
                        <img src="images/Main-Logo.png" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="login-frm">
                        <h1>LOGIN</h1>

                  <!--      <form> -->
                            <div class="form-group">
                                <label><i class="fa fa-user"></i>Application number</label>
                                <input type="email" name="" placeholder="" class="form-control" id="application_no">
                            </div>
                            <div class="form-group">
                                <label><i class="fa fa-lock"></i> Password</label>
                                <input type="Password" name="" placeholder="" class="form-control" id="Password1">
                            </div>

                          

                            <button class="btn-main" id="login">Login</button>

                            <div class="login-we">
                                <p>New User?<a href="register.php">Sign Up</a></p>
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
	<script src="script/login.js"></script>
</body>
</html>
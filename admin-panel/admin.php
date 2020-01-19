
<!doctype html>
<html lang="en">
  <head>
    <title>Sidebar 04</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase-app.js"></script>
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="style/admin_style.css">
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
	   <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.13.5/xlsx.full.min.js"></script>

	<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </head>
  <body>
    <div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/y6wEPDwUJNjkzODcwNjcwDxYCHhNWYWxpZGF0ZVJlcXVlc3RNb2RlAgFkZOMb+mVHLlyAKdglUgnjP3pao1W0DP480xduGtMXgFBN" />
</div>

<div>

  <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="5F9543D2" />
</div>
    
<div class="topdiv">
    
    
    <div class="topbuton container">
        
    </div>
</div>
<div class="top_banner" style="width: 79.5vw;float: right;" id="top">
    <div class="container in_banner">
      <div class="row">
        <div class=" logo col-md-3 col-sm-3 col-xs-12">
            <img id="ctl00_TopLinks1_imgLogoLeft" class="img-responsive" src="../../images/logo.jpg" style="border-width:0px;height:130px;" />
        </div>
        <div class="banner_text col-md-6 col-sm-6 col-xs-12">
            <h1>
                <span id="ctl00_TopLinks1_lblHeader text">Sikkim Teacher Eligibility Test (STET)</span>
            </h1>
            <h2>
                <span id="ctl00_TopLinks1_lblSubHeader">SIKKIM BOARD OF SECONDARY EDUCATION</span>
            </h2>
        </div>
        <div class=" logo col-md-3 col-sm-3 col-xs-12">
             <img id="ctl00_TopLinks1_imgLogoRight" class="img-responsive pull-right" src="../../images/logo.jpg" style="border-width:0px;height:130px;" />
        </div>
    </div>
</div></div>
    
    <div class="wrapper d-flex align-items-stretch">
      <nav id="sidebar" style="position: fixed; margin-top:-9.2vw;height: 100%;  ">
        <div class="custom-menu">
          <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
          </button>
        </div>
        <h1><a href="index.html" class="logo" style="padding: 4vh;">ADMIN PANEL</a></h1>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="#top"><span class="fa fa-calendar-check-o mr-3"></span>NOTICE</a>
          </li>
          <li>
              <a href="#section2"><span class="fa fa-user mr-3">&nbsp&nbsp<b>CONTENT EDITING</b></span></a>
          </li>
          <li>
            <a href="#"><span class="fa fa-sticky-note mr-3"></span>ADMIT CARDS</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-sticky-note mr-3"></span>MANUAL VERIFICATIONS </a>
          </li>
          <li>
            <a href="#"><span class="fa fa-paper-plane mr-3"></span>SOMETHING</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-paper-plane mr-3"></span>SOMETHING</a>
          </li>
        </ul>

      </nav>
      
      <div id="section1" class="container-fluid">
        <div class="row">
      <div class="col-lg-6 col-md-12" style="margin-left:50vh; margin-top: 10vh;margin-right:0vh !important; ">
              <div class="card" >
                <div class="card-header card-header-tabs" style="background-color: #066CF6 !important;">
                  <div class="nav-tabs-navigation" style="background-color: #066CF6 !important;">
                    <div class="nav-tabs-wrapper" style="background-color: #066CF6 !important;">
                      <span class="nav-tabs-title" style="font-size: 4vh;margin:10hv;background-color: #066CF6 !important;"><i class="fa fa-calendar-check-o" aria-hidden="true" style="box-shadow: 0.8vh 0.8vh 0.8vh #040975 "></i>&nbsp&nbsp&nbspNOTICE EDIT PANEL</span>
                      
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active show" id="profile">
                      <table class="table">
                        <tbody id="notice-update">
                          
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="messages">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                            </td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                              </button>
                              <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="settings">
                      <table class="table">
                        <tbody id="notice-update">
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                              </button>
                              <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                            </td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                              </button>
                              <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                              </button>
                              <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div><div  style="margin-top:10vh;  margin-right:  10vh;margin-left:0vh !important;float: right;height: 70vh;width:40vh !important;" ><div class="card" ><div class="card-header card-header-tabs" style="background-color: #066CF6 !important;">
                  <div class="nav-tabs-navigation" style="background-color: #066CF6 !important;">
                    <div class="nav-tabs-wrapper" style="background-color: #066CF6 !important;">
                      <span class="nav-tabs-title" style="font-size: 4vh;margin:10hv;background-color: #066CF6 !important;text-align: center;"><i class="fa fa-calendar-check-o" aria-hidden="true" style="box-shadow: 0.8vh 0.8vh 0.8vh #040975 "></i>&nbsp&nbsp&nbspADD NEW <br><p style="margin-left: 8vh;">NOTICE</p></span>
                      
                    </div>
                  </div>
                </div> 
                <label style="text-align: center;font-size: 2.5vh;color: #000000;margin-top: 4vh;">
                  <input type="text" placeholder="ENTER NOTICE TITLE" id="new_notice" />
                </label> 
                <div class="input-icons"> 
            <i class="fa fa-file-pdf-o icon" style="margin-left:6vh;"></i> 
            <input class="input-field" type="file"except="aplicaion/PDF" style="margin-left: 5vh;" id="new_pdf"> </div>
                <button style="width: 30vh;background-image: linear-gradient(#066CF6,#03CEF9);margin-left:5vh;" id="new_notice_btn">PDF UPLOAD</button>






              </div>

          </div></div></div></div>
         <div id="section2" class="container-fluid" style="background-color:#F214AB;height: 200vh;">
          <div class="row">
      <div class="col-lg-6 col-md-12" style="margin-left:50vh; margin-top: 10vh;margin-right:0vh !important; ">
              <div class="card" >
                <div class="card-header card-header-tabs" style="background-color: #066CF6 !important;border-radius:4vh; ">
                  <div class="nav-tabs-navigation" style="background-color: #066CF6 !important;">
                    <div class="nav-tabs-wrapper" style="background-color: #066CF6 !important;">
                      <span class="nav-tabs-title" style="font-size: 4vh;margin:10hv;background-color: #066CF6 !important;"><i class="fa fa-file" aria-hidden="true" style="box-shadow: 0.8vh 0.8vh 0.8vh #040975 "></i>&nbsp&nbsp&nbspCONTENT EDIT</span><button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task" style="width:5vh;height: 5vh; margin-left: 30vh;text-align: center;">
                                <i class="fa fa-pencil" aria-hidden="true" style=" width: 3vh;height:3vh;font-size: 6vh;margin-left: -3vh;margin-top: -9vh; "></i>
                              </button>
                      
                    </div>
                  </div>
                </div>
                <div  class="mx-auto my-auto"style="width:70vh;height:70vh;border-style: solid;border-width: 0.5vh;">
                </div>
                <p><button style="background-image: radial-gradient(#2A5CFE,#011664); width:13vh;height:7vh;border-radius:3vh;margin-left:15vh; margin-bottom: 30vh; " >
                  


                </button></p>
                </div>



              </div></div></div>
              </div>
            </div>

           



         </div>

        <!-- Page Content  -->
     
	<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase-auth.js"></script>
	 <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase-firestore.js"></script>
	 <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase-storage.js"></script>
	<script src="../../script/init.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
	<script src="scripts/admin_panel.js"></script>
  </body>
</html>
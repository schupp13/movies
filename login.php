<<<<<<< HEAD
<? include_once 'header.php'; ?>

<title>MushyBanana login</title>
  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container" style="background: url(img/avengershero3.jpg) top center; background-size: 100% 100%; background-repeat: no-repeat;">
      <h1>Log In to Mushy Banana</h1>
      <h2>Watch | Rate | Review | Repeat</h2>
      <a href="#login" class="btn-get-started">Login</a>
    </div>
  </section><!-- #hero -->

  <!-- <main id="main"> -->

    <!---form for login--->


    <section id="login">




     <div class="wow fadeInUp" >
       <div class="form-group">
         <div class="container-fluid col-lg-12" style="background-color: black;">
             <form class="form" action="process/loginProcess.php" method="POST" >
               <?
         if (isset($_SESSION["wrongPassword"])) {
         echo $_SESSION["wrongPassword"];
         $_SESSION["wrongPassword"] = '';
         }
         if (isset($_SESSION["noUser"])) {
         echo $_SESSION["noUser"];
         $_SESSION["noUser"] = '';
         }
         ?>

               <h1><strong>Log In Here:</strong></h1>

               <h2><strong>Username:*</strong></h2>
               <input type="text" name="email" size="40" placeholder="email" required>

               <h2><strong>Password:*</strong></h2>
               <input type="password" name="password" size="15"  placeholder="Enter Password" required>


               <p class="text-center"><input type="submit" name="login" value="Login"></p>

           </div>
         </div>
       </div>

      </form>
      </section>

      <!--==========================
        Facts Section
      ============================-->
      <section id="facts">
        <div class="container wow fadeIn">
          <div class="section-header">
            <h3 class="section-title">Live Feed</h3>
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
          </div>
          <div class="row counters">

            <div class="col-lg-4 col-6 text-center">
              <span data-toggle="counter-up">232</span>
              <p>User</p>
            </div>

            <div class="col-lg-4 col-6 text-center">
              <span data-toggle="counter-up">521</span>
              <p>Reviews</p>
            </div>

            <div class="col-lg-4 col-6 text-center">
              <span data-toggle="counter-up">1,463</span>
              <p>Total Movie Hours</p>
            </div>

            <!-- <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">15</span>
              <p>Hard Workers</p>
            </div> -->

          </div>

        </div>
      </section><!-- #facts -->


  <!-- </main> -->


<? include_once 'footer.php'; ?>
=======
<?session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Mushy Banana Login page</title>  
  
  
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
 
 
    <!-- ***********************************
  College Login page
  *********************************** -->
 <style>
 
   
body {
  border:2px solid black;
}

 </style>
</head>

<body>



<!-- ******************************************
    Login Form
******************************************* -->
<?          

  
  if (isset($_SESSION['failed'])) {
    echo $_SESSION['failed'];


    $_SESSION['failed'] = "";
  }
    ?> 
<div class="container-fluid" style="background-color:gold">
<img src="images/logo.jpg" style="width:180px;padding:20px 0px 20px 40px;">
</div>

<form action="loginprocess.php" method="post">

  <div class="container" style="padding-left:150px;padding-top:80px;padding-bottom:60px; font-size:22px; font-family: 'Domine', serif;  color:black;background-color:gold;">
    <div class="row">
      <div class="col-md-4" >
        <h2 style="font-family:garamond;"><strong>Login to your account</strong></h2><br>
          
        <label for="loginvalue" style="padding-right:30px;"><b>Email or Username:</b></label>
        <input type="text" placeholder="Enter Email or Username" name="loginvalue" size="40" required><br><br>

        <label for="password" style="padding-right:50px;"><b>Password:</b></label>
        <input type="password" placeholder="Enter Password" name="password"  required><br><br>
        <br>

        <button type="submit" name="login" style="border-radius:50px;margin-left:100px;font-size:20px;width:150px; background-color:#fff4b3; border: 1px solid black; height:50px;"><strong>Press to Login</strong></button><br><br>

    
        </div>
      </div>
    </div>
  </form>





    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>
>>>>>>> 6028a902b8a822b378ed04258ce0a721d8895c29

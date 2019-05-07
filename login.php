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
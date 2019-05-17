<?php session_start();?>
<?php
$emailLogin = strtolower(filter_var($_POST['email'], FILTER_SANITIZE_STRING));
$passwordLogin = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
loginSession($emailLogin,$passwordLogin);


function loginSession($userEmail, $userPassword){
      include 'config.php';

}
// ************************************
// Cancel Changes
// ************************************

if (isset($_POST["cancelchanges"])) {

  header('Location:http://movies.schupp.webfactional.com/yourProfile.php');

}
?>
<?

// ************************************
// UPDATE RECORDS
// ************************************


if (isset($_POST["updateprofile"])) {

 

  // Sanitize incoming $_POST variables
  $_SESSION['id']=$_POST['updateid'];
  $_SESSION['firstName'] = filter_var($_POST['updatefirstname'], FILTER_SANITIZE_STRING);
$_SESSION['lastName'] = filter_var($_POST['updatelastname'], FILTER_SANITIZE_STRING);
$_SESSION['email'] = filter_var($_POST['updateemail'], FILTER_SANITIZE_STRING);
$_SESSION['userName'] = filter_var($_POST['updateusername'], FILTER_SANITIZE_STRING);

$servername = "localhost";
$username = "schupp";
$password = "W53ZoOVSXmQk";
$dbname = "movies";


  // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE user SET firstName='{$_POST['updatefirstname']}', lastName ='{$_POST['updatelastname']}', email='{$_POST['updateemail']}', userName ='{$_POST['updateusername']}' WHERE id='{$_POST['updateid']}'";

if (mysqli_query($conn, $sql)) {

  header('Location:http://movies.schupp.webfactional.com/yourProfile.php');






} else {

  $_SESSION['error'] = '<div class="alert alert-danger" style = "font-size:30px;">
  <strong>Profile not updated, Please try again.</strong></div>';


  header('Location:http://movies.schupp.webfactional.com/yourProfile.php');

}

}




?>


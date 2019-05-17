<? session_start(); ?>
<?php
include 'config.php';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$firstName = ucfirst(filter_var($_POST['firstName'], FILTER_SANITIZE_STRING));
$lastName = ucfirst(filter_var($_POST['lastName'], FILTER_SANITIZE_STRING));
$email = strtolower(filter_var($_POST['email'], FILTER_SANITIZE_STRING));
$password = md5 (filter_var($_POST['password'], FILTER_SANITIZE_STRING));
$userName =filter_var($_POST['user'], FILTER_SANITIZE_STRING);
$admin = $_POST['admin'];
//calls function to see if there is already a student in the system with the same email
?><?require_once "checkProcess.php";
$checkEmail = checkEmail($email);?>
<?


require_once "checkProcess.php";
$checkUser  = checkUser($userName);


// if the the function returns true then the studnet is not in the system already
if ($checkEmail ) {

  if($checkUser){

    $sql= "INSERT INTO user (firstName, lastName, email, password, userName,admin)VALUES('{$firstName}','{$lastName}','{$email}','{$password}','{$userName}','{$admin}')";

    if (mysqli_query($conn, $sql)) {
        require_once "loginProcess.php";
        loginSession($email, $password);
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }else{
    header('Location: http://movies.schupp.webfactional.com/signup.php#register');
    $_SESSION['alreadyUser'] = '<div class="alert alert-danger">
<strong>That UserName has been taken, Please pick a new UserName.</strong>
</div>';

  }
} else {
    header('Location: http://movies.schupp.webfactional.com/signup.php#register');
    $_SESSION['alreadyEmail'] = '<div class="alert alert-danger">
<strong>That email is already a memeber in the account.</strong>
</div>';


}
mysqli_close($conn);
?>

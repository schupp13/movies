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

//calls function to see if there is already a student in the system with the same email
require_once "checkProcess.php";
$check = checkUsers($email);
// if the the function returns true then the studnet is not in the system already
if ($check) {
    $sql= "INSERT INTO user (firstName, lastName, email, password)VALUES('{$firstName}','{$lastName}','{$email}','{$password}')";

    if (mysqli_query($conn, $sql)) {
        require_once "loginProcess.php";
        loginSession($email, $password);
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    $_SESSION['alreadyUser'] = "<h1 style='color:red'>That email is already a memeber in the account.</h1> ";
    header('Location: ../movies.php');
}
mysqli_close($conn);
?>

<?php session_start();?>
<?php
include '../process/config.php';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT Count(*) FROM user";
$result = mysqli_query($conn, $sql);
$_SESSION['numUsers'] = $result;
mysqli_close($conn);
?>

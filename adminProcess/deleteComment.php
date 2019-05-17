<?php session_start();?>
<?php
include '../process/config.php';
$id = $_POST['id'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM rating WHERE id='{$id}'";

if (mysqli_query($conn, $sql)) {
  unset($_SESSION['commentID']);

  header('Location:http://movies.schupp.webfactional.com/admin.php#form2');
  $_SESSION["commentDeleted"] = '<div class="alert alert-success">
<strong>The comment has been deleted from the database. </strong>
</div>';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

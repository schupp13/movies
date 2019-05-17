<?php
include 'config.php';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$id = $_POST['id'];
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$imdb = $_POST['id'];
// sql to delete a record
$sql = "DELETE FROM rating WHERE id=$id";

if (mysqli_query($conn, $sql)) {
  header('Location:http://movies.schupp.webfactional.com/yourProfile.php');
  $_SESSION["userDeletedReview"] = '<div class="alert alert-success">
<strong>This comment has been deleted. </strong>
</div>';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

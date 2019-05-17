<?php session_start();?>
<?php
include '../process/config.php';
$imdb = $_POST['imdb'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM movies WHERE imdb='{$imdb}'";

if (mysqli_query($conn, $sql)) {
  unset($_SESSION['deletemovieid']);


  header('Location:http://movies.schupp.webfactional.com/admin.php#form2');
  $_SESSION["movieDeleted"] = '<div class="alert alert-success">
<strong>The movie has been deleted from the database. </strong>
</div>';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

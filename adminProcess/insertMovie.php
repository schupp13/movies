<?php session_start();?>
<?php
include '../process/config.php';

$image = filter_var($_POST['image'], FILTER_SANITIZE_STRING);
$title = ucwords(filter_var($_POST['title'], FILTER_SANITIZE_STRING));
$imdb = strtolower(filter_var($_POST['imdb'], FILTER_SANITIZE_STRING));
$type = filter_var($_POST['type'], FILTER_SANITIZE_STRING);

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO movies (title, imdb, type, image)
VALUES ('{$title}','{$imdb}','{$type}',' {$image}')";

if (mysqli_query($conn, $sql)) {


    unset($_SESSION["moviePoster"]);
    unset($_SESSION["movieTitle"]);
    unset($_SESSION["movieImdb"]);

    header('Location:http://movies.schupp.webfactional.com/admin.php#form');
    $_SESSION["movieAdded"] = '<div class="alert alert-success">
  <strong>The movie has been added to the database </strong>
  </div>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

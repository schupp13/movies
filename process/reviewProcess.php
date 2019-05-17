<?session_start();?>
<?php
include 'config.php';
$review = filter_var($_POST['review'], FILTER_SANITIZE_STRING);
$user = $_POST['user'];
$movie = $_POST['movie'];
$title = $_POST['title'];
$userName = $_POST['userName'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO rating (movie_id, user_id, review, movieTitle, userName)
VALUES ('{$movie}','{$user}','{$review}','{$title}','{$userName}')";

if (mysqli_query($conn, $sql)) {
  $movie_url =  strtolower(preg_replace('/\s+/', '_',$title));
  header("Location: http://movies.schupp.webfactional.com/process/film/$movie_url.php");

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

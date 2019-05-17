<?
include 'config.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$title = ucwords(filter_var($_POST['title'], FILTER_SANITIZE_STRING));
$description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);
$actors = filter_var($_POST['actors'], FILTER_SANITIZE_STRING);
$dor = $_POST['dor'];
$watchOrder = filter_var($_POST['watchOrder'], FILTER_SANITIZE_STRING);
$type = filter_var($_POST['type'], FILTER_SANITIZE_STRING);
$image = filter_var($_POST['image'], FILTER_SANITIZE_STRING);

$sql = "INSERT INTO movies(title, description, actors, dor, watchOrder, type, image) VALUES ('{$title}','{$description}','{$sctors}','{$dor}','{$watchOrder}','{$type}','{$image}')";

if ($conn->query($sql) === TRUE) {
  $_SESSION['movieAdd'] = "<h1 style='color:green'>Movie Added succesfully!</h1> ";
header('Location: http://college.schupp.webfactional.com/userRegister.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

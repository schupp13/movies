<?php session_start();?>
<?php
$trimGET = trim(filter_var($_GET["imdb"], FILTER_SANITIZE_STRING));
include '../process/config.php';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM movies WHERE imdb ='{$trimGET}'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $_SESSION['deletemovieid'] = $row['id'];
      $_SESSION['deletemovieimdb'] = $row['imdb'];
      $_SESSION['deletemovietitle'] =  $row['title'];
      $_SESSION['deletemovieimage'] =  $row['image'];

header('Location:http://movies.schupp.webfactional.com/admin.php#form2');


    }
} else {
  header('Location:http://movies.schupp.webfactional.com/admin.php#form2');
  $_SESSION["notInDB"] = '<div class="alert alert-danger">
<strong>No movie with the IMDB number in the MushyBananas database.</strong>
</div>';
}

mysqli_close($conn);
?>

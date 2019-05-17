<?php session_start();?>
<?php
$trimGET = trim(filter_var($_GET["id"], FILTER_SANITIZE_STRING));
include '../process/config.php';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM rating WHERE id ='{$trimGET}'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $_SESSION['commentID'] = $row['id'];
      $_SESSION['commentReview'] = $row['review'];
      $_SESSION['commentuser'] =  $row['userName'];

      header('Location:http://movies.schupp.webfactional.com/admin.php');
    }
} else {
  header('Location:http://movies.schupp.webfactional.com/admin.php#form2');
  $_SESSION["noComment"] = '<div class="alert alert-danger">
<strong>No comment with the id number in the MushyBananas database.</strong>
</div>';
}


mysqli_close($conn);
?>

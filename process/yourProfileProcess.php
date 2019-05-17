<?php
include 'process/config.php';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM user WHERE id='{$_SESSION["id"]}'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

      $_SESSION['firstName'] = filter_var($row['firstName'], FILTER_SANITIZE_STRING);
      $_SESSION['lastName'] = filter_var($row['lastName'], FILTER_SANITIZE_STRING);
      $_SESSION['email'] = filter_var($row['email'], FILTER_SANITIZE_STRING);
      $_SESSION['userName'] = filter_var($row['userName'], FILTER_SANITIZE_STRING);

    ?>
        <div  id="card" class="card">
  <div class="card-body">
    <h3 class="card-title"><?=$_SESSION["firstName"]?> <?=$_SESSION["lastName"]?></h3>
    <h6 class="card-subtitle mb-2 text-muted">Profile Info:</h6>
    <p class="card-text">UserEmail:<?=$row["email"]?></p>
    <p class="card-text"><b>UserID:</b><?=$row["id"]?></p>
    <p class="card-text">UserName:<?=$row["userName"]?></p>
    <button href="http://movies.schupp.webfactional.com/movies.php" class="card-link">Check Out the Marvel Movies and Make a Review.</button><br>
    <a href="http://movies.schupp.webfactional.com/updateprofile.php"><button class="card-link">Update your profile</button></a>
  </div>
</div>
<?
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

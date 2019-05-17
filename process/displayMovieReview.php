<?php
include 'config.php';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM rating WHERE movie_id = $movie->imdbID";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

        // style one card
?>
  <div class="media">
  <div class="media-left">
    <h4><?=$row['id']?></h4>
  </div>
  <div class="media-body">
    <h4 class="media-heading"><?=$row['userName']?></h4>
    <p><?=$row['review']?></p>
    <p>Posted on: <?=$row['time']?></p>
  </div>
</div>
<?
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

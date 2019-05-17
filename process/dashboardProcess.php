<?php
include 'config.php';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM movies";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

        // style one card
?>
    <?$filter=  strtolower(preg_replace('/\s+/', '_',$row['type']));?>
<div class="col-lg-4 col-md-12 portfolio-item filter-<?=$filter?>">
  <?$movie_url =  strtolower(preg_replace('/\s+/', '_',$row['title']));?>
  <a href="process/film/<?php echo $movie_url; ?>.php">
  <img  src="<?=$row['image']?>" alt="<?=$row['title']?> image"  >

    <div class="details">
      <h4><?=$row['title']?></h4>
    </div>
  </a>
</div>
  <?
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

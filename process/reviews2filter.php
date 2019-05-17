<?php
include 'config.php';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM  rating ORDER BY time DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

        // style one card
?>
    <?$filter=  strtolower(preg_replace('/\s+/', '_',$row['movieTitle']));?>
    <?$filter = str_replace(array('.', ':'), '_' , $filter);?>


<div class="col-lg-4 col-md-12 portfolio-item filter-<?=$filter?>">
                    <div id="media">
                    <div class="media-left">
                      <h4 class="id"><?=$row['id']?></h4>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading-title"><?=$row['movieTitle']?></p></h4>
                      <!-- <h4 class="media-heading"><?//=$row['userName']?></h4> -->
                      <p class="view" style="line-height:1.2em; height:3.6em; overflow:hidden;"><?=$row['review']?></p>
                      <p class="date">Posted on: <?=$row['time']?></p>
                    </div>
                  </div>
    <div class="details">
      <h4><?=$row['userName']?></h4>
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

<?
$sql2 = "SELECT * FROM rating WHERE imdb ='{$row["imdb"]}' ORDER BY time DESC";
$result2 = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result2) > 0) {
    // output data of each row
    while($row2 = mysqli_fetch_assoc($result2)) {?>
      <div id="media">
    <div class="media-left">
      <h4 class="id"><?=$row2['id']?></h4>
    </div>
    <div class="media-body">
      <h4 class="media-heading-title"><?=$row2['movieTitle']?></p></h4>
      <h4 class="media-heading"><?=$row2['userName']?></h4>
      <p class="date">Posted on: <?=$row2['time']?></p>
      <p class="view"><?=$row2['review']?></p>
    </div>
  </div>
    <?}
} else {
    echo "0 results";
}

?>

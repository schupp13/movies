<?
include 'process/config.php';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM  rating  WHERE user_id='{$_SESSION["id"]}' ORDER BY time DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {?>
      <div id="media">
      <div class="media-left">
        <h4 class="id"><?=$row['id']?></h4>
      </div>
      <div class="media-body">
        <h4 class="media-heading-title"><?=$row['movieTitle']?></p></h4>
        <h4 class="media-heading"><?=$row['userName']?></h4>
        <p class="date">Posted on: <?=$row['time']?></p>
        <p class="view"><?=$row['review']?></p>
      </div>
      <form class="" action="process/deleteProfileReviews.php" method="post">
        <input type="hidden" name="id" value="<?=$row['id']?>">
        <button type="submit" name="button" class="btn btn-danger">Delete</button>
      </form>
    </div>
    <?}
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

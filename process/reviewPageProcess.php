<?session_start();?>
<?
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
    while($row = mysqli_fetch_assoc($result)) {?>
      <div class="media">
      <div class="media-left">
        <h4 style="font-size: 12px; color: #fff; margin-right: 15px; margin-top: 3px;"><?=$row['id']?></h4>
      </div>
      <div class="media-body">
        <h4 class="media-heading" style="font-size: 35px; color: #111; text-transform: uppercase; text-align: left; font-weight: 700;  color: #FACF11;"><?=$row['movieTitle']?></p></h4>
        <h4 class="media-heading" style="font-size: 24px; color: #111; text-transform: uppercase; text-align: left; font-weight: 700; color: lightgrey; margin-top: 3px;"><?=$row['userName']?></h4>
        <p class="date" style="text-align: left; font-size: 12px; color: white; margin-top: 2px;">Posted on: <?=$row['time']?></p>
        <p class="review" style="text-align: center; font-size: 18px; color: white; margin-bottom: 20px;"><?=$row['review']?></p>
      </div>
    </div>
    <?}
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

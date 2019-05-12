<?
//checks to see if email is already in the students Table
function checkUsers ($emailCheck) {
  include 'config.php';
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  $sqlSelect = "SELECT email FROM user";
  $resultSelect = mysqli_query($conn, $sqlSelect);
  $test=true;
  if (mysqli_num_rows($resultSelect) > 0) {
      // output data of each row

      while($row = mysqli_fetch_assoc($resultSelect)) {
        if($row["email"] == $emailCheck){
        $test=false;
      }
  }
  }
  mysqli_close($conn);

  return $test;
}

function checkMovie($imbd){
  include 'config.php';
  // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT imbd FROM movies";
$result = mysqli_query($conn, $sql);
$test=true;

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      if($row["imdb"] == $imbd){
          $test=false;
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
return $test;
}
}
?>

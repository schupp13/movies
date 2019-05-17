<?
//checks to see if email is already in the students Table
<<<<<<< HEAD
function checkEmail ($emailCheck) {
=======
function checkUsers ($emailCheck) {
>>>>>>> 6028a902b8a822b378ed04258ce0a721d8895c29
  include 'config.php';
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
<<<<<<< HEAD
  $sql = "SELECT email FROM user";
  $result = mysqli_query($conn, $sql);
  $test=true;
  if (mysqli_num_rows($result) > 0) {
      // output data of each row

      while($row = mysqli_fetch_assoc($result)) {
=======
  $sqlSelect = "SELECT email FROM user";
  $resultSelect = mysqli_query($conn, $sqlSelect);
  $test=true;
  if (mysqli_num_rows($resultSelect) > 0) {
      // output data of each row

      while($row = mysqli_fetch_assoc($resultSelect)) {
>>>>>>> 6028a902b8a822b378ed04258ce0a721d8895c29
        if($row["email"] == $emailCheck){
        $test=false;
      }
  }
  }
<<<<<<< HEAD

  mysqli_close($conn);
  return $test;
}

function checkUser ($userCheck) {
  include 'config.php';
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  $sql = "SELECT userName FROM user";
  $result = mysqli_query($conn, $sql);
  $test=true;
  if (mysqli_num_rows($result) > 0) {
      // output data of each row

      while($row = mysqli_fetch_assoc($result)) {
        if($row["userName"] == $userCheck){
        $test=false;
      }
  }
  }

  mysqli_close($conn);
  return $test;
=======
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
>>>>>>> 6028a902b8a822b378ed04258ce0a721d8895c29
}
?>

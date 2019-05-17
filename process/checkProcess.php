<?
//checks to see if email is already in the students Table
function checkEmail ($emailCheck) {
  include 'config.php';
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  $sql = "SELECT email FROM user";
  $result = mysqli_query($conn, $sql);
  $test=true;
  if (mysqli_num_rows($result) > 0) {
      // output data of each row

      while($row = mysqli_fetch_assoc($result)) {
        if($row["email"] == $emailCheck){
        $test=false;
      }
  }
  }

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
}
?>

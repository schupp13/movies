<?php
<<<<<<< HEAD
  include 'process/config.php';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM movies";
$result = mysqli_query($conn, $sql);
$movie_array = array();

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $curl = curl_init();
=======


$curl = curl_init();
>>>>>>> 6028a902b8a822b378ed04258ce0a721d8895c29

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://www.omdbapi.com/?i=tt3896198&apikey=ba9640da",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_HTTPHEADER => array(
<<<<<<< HEAD
    "Postman-Token: 879e2d65-28dd-414c-80fc-3f37b583722e",
=======
    "Accept: */*",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Host: www.omdbapi.com",
    "Postman-Token: 5d99145a-3066-4e3c-8f2a-28d4ea0df0b2,938366a0-71db-4f0d-bd2d-b8976ede7064",
    "User-Agent: PostmanRuntime/7.11.0",
    "accept-encoding: gzip, deflate",
>>>>>>> 6028a902b8a822b378ed04258ce0a721d8895c29
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
  $something = json_decode( $response);
  echo $something->Poster;
<<<<<<< HEAD
  
}
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
=======
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="card" style="width:400px">
        <img class="card-img-top" src="<?=$something->Poster?>" alt="Card image">
        <div class="card-body">
          <h4 class="card-title"><?=$something->Title?></h4>
          <p class="card-text"><?=$something->Title?></p>
        <a href="#" class="btn btn-primary">See Profile</a>
      </div>
      </div>
    </div>
  </body>
</html>
>>>>>>> 6028a902b8a822b378ed04258ce0a721d8895c29

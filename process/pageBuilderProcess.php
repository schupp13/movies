<<<<<<< HEAD
<?session_start();?>
=======

>>>>>>> 6028a902b8a822b378ed04258ce0a721d8895c29
<?php
include 'config.php';
define("KEY",     "579b4fff");

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
<<<<<<< HEAD
=======

>>>>>>> 6028a902b8a822b378ed04258ce0a721d8895c29
            $curl = curl_init();

            curl_setopt_array($curl, array(
              CURLOPT_URL => "http://www.omdbapi.com/?i=".$row["imdb"]."&apikey=579b4fff",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "GET",
              CURLOPT_POSTFIELDS => "",
              CURLOPT_HTTPHEADER => array(
                "Accept: */*",
                "Cache-Control: no-cache",
                "Connection: keep-alive",
                "Host: www.omdbapi.com",
                "Postman-Token: 449809bd-f5de-4a4a-8ba5-ff2b716daf8c,3f2a4464-c597-4d85-84cd-54b0451838e1",
                "User-Agent: PostmanRuntime/7.11.0",
                "accept-encoding: gzip, deflate",
                "cache-control: no-cache",
                "cookie: __cfduid=df03888916cd765f2a7c266c88e5a58f21557296800"
              ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
              echo "cURL Error #:" . $err;
            } else {
              //turning json object into php object
              $movie = json_decode($response);
              //updating the poster value to the high quality api
              $movie->Poster = 'http://img.omdbapi.com/?i='.$row["imdb"].'&h=600&apikey=579b4fff';

<<<<<<< HEAD
              include 'process/eotTest.php';
=======
              include 'process/eotProcess.php';
>>>>>>> 6028a902b8a822b378ed04258ce0a721d8895c29

            }
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

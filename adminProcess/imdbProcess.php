<?php session_start();?>
<?
$trimPost = trim(filter_var($_GET["imdb"], FILTER_SANITIZE_STRING));
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://www.omdbapi.com/?i=".$trimPost."&apikey=579b4fff",
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
    "Postman-Token: 6219ddd1-a9c0-46ac-bc61-c3c8e67cfa9c,46d73b1a-5d50-4558-bfc1-3d9fdada5ea0",
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
  header('Location:http://movies.schupp.webfactional.com/admin.php#form');
  $_SESSION["imdbFail"] = '<div class="alert alert-danger">
<strong>That is not a Valid IMDB #. Please check the number and Try again. </strong>
</div>';
} else {
  //turning json object into php object
  $movie = json_decode($response);
  //updating the poster value to the high quality api
  $movie->Poster = 'http://img.omdbapi.com/?i='.$trimPost.'&h=600&apikey=579b4fff';

  $_SESSION['moviePoster'] =$movie->Poster;
  $_SESSION['movieTitle'] =$movie->Title;
  $_SESSION['movieImdb'] =$movie->imdbID;
  header('Location:http://movies.schupp.webfactional.com/admin.php#form');

}
?>

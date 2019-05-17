<?
include 'config.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$title = ucwords(filter_var($_POST['title'], FILTER_SANITIZE_STRING));
<<<<<<< HEAD
$description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);
$actors = filter_var($_POST['actors'], FILTER_SANITIZE_STRING);
$dor = $_POST['dor'];
=======
$imbd = ucwords(filter_var($_POST['imbd'], FILTER_SANITIZE_STRING));
>>>>>>> 6028a902b8a822b378ed04258ce0a721d8895c29
$watchOrder = filter_var($_POST['watchOrder'], FILTER_SANITIZE_STRING);
$type = filter_var($_POST['type'], FILTER_SANITIZE_STRING);
$image = filter_var($_POST['image'], FILTER_SANITIZE_STRING);

<<<<<<< HEAD
$sql = "INSERT INTO movies(title, description, actors, dor, watchOrder, type, image) VALUES ('{$title}','{$description}','{$sctors}','{$dor}','{$watchOrder}','{$type}','{$image}')";
=======
$sql = "INSERT INTO movies(title, description, actors, dor, watchOrder, type, image) VALUES ('{$title}','{$imbd}','{$watchOrder}','{$type}','{$image}')";
>>>>>>> 6028a902b8a822b378ed04258ce0a721d8895c29

if ($conn->query($sql) === TRUE) {
  $_SESSION['movieAdd'] = "<h1 style='color:green'>Movie Added succesfully!</h1> ";
header('Location: http://college.schupp.webfactional.com/userRegister.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<<<<<<< HEAD
=======


<?
if(isset($_POST['imdb'])){
  $_POST['imdb'] = trim($_POST['imdb']);
              $curl = curl_init();

              curl_setopt_array($curl, array(
                CURLOPT_URL => "http://www.omdbapi.com/?i=".$_POST['imdb']."&apikey=579b4fff",
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
                //disoplaying error if the movie doest not exist in api
                header('Location: http://movies.schupp.webfactional.com/admin.php');
                $_SESSION['imdbError'] = "Sorry, but there is no such movie in the IMBD. Please check the input and try agin.";
              } else {

                //checking to see if the movie is already in the DB
                require_once "checkProcess.php";
                $check = checkUsers($_POST['imdb']);
                //turning json object into php object

                if($check){
                  $title = $movie->Title;
                  $imbd = ucwords(filter_var($_POST['imbd'], FILTER_SANITIZE_STRING));
                  $watchOrder = filter_var($_POST['watchOrder'], FILTER_SANITIZE_STRING);
                  $type = filter_var($_POST['type'], FILTER_SANITIZE_STRING);
                  $image =  'http://img.omdbapi.com/?i='.$movie->imdbID.'&h=600&apikey=579b4fff';

                }else{
                  //displaying error if the movie is already in db
                  header('Location: http://movies.schupp.webfactional.com/admin.php');
                  $_SESSION['dbError'] = "The movie ".$movie->Title." is in the DB already!";
                }
                $movie = json_decode($response);
                //updating the poster value to the high quality api
                $movie->Poster = 'http://img.omdbapi.com/?i='.$row["imdb"].'&h=600&apikey=579b4fff';


              }
}
?>
>>>>>>> 6028a902b8a822b378ed04258ce0a721d8895c29

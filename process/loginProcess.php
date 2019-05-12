<?php session_start();?>
<?
$emailLogin = strtolower(filter_var($_POST['email'], FILTER_SANITIZE_STRING));
$passwordLogin = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
loginSession($emailLogin,$passwordLogin);


function loginSession($userEmail, $userPassword){
      include 'config.php';

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql ="SELECT * FROM user WHERE email = '{$userEmail}'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          if($row["email"] == $userEmail && $row['password'] == md5($userPassword)){
            $_SESSION["id"]= $row["id"];
            $_SESSION["firstName"] = $row["firstName"];
            $_SESSION["lastName"] = $row["lastName"];
            $_SESSION["email"] = $row["email"];
            $_SESSION["password"] = $row["password"];
            header('Location:http://movies.schupp.webfactional.com/movies.php');
        }else{

        if($row["email"] == $userEmail && $row['password'] != $userPassword){
          $_SESSION["wrongPassword"] ="That is the wrong password. Please reset your password.";
          header('Location: ../login.php');
        }
        if($row["email"] != $userEmail && $row['password'] == $userPassword){
          $_SESSION["noUser"] = "<h1 style='color:red'>You are currently not registered Please fill out the form below to register.</h1>";
          header('Location: ../login.php');
        }
      }

}
}else {
   echo "0 results";
}
mysqli_close($conn);
}
?>

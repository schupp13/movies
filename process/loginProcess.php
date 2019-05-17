<?php session_start();?>
<?php
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
            $_SESSION["userName"] = $row["userName"];
            if( $row["admin"] == 1){
              $_SESSION["admin"] = $row["admin"];
            }
            header('Location:http://movies.schupp.webfactional.com/movies.php');
        }else{

        if($row["email"] == $userEmail && $row['password'] != $userPassword){
            header('Location:http://movies.schupp.webfactional.com/login.php#login');

          $_SESSION["wrongPassword"] ='<div class="alert alert-danger">
<strong>That is the wrong password. Please reset your password.!</strong>
</div>';


        }
        if($row["email"] != $userEmail && $row['password'] == $userPassword){
          header('Location:http://movies.schupp.webfactional.com/login.php#login');
          $_SESSION["noUser"] = '<div class="alert alert-danger">
<strong>That emial is currently not Registered please sign up </strong>
</div>';
        }
      }
}
}else{
  header('Location:http://movies.schupp.webfactional.com/login.php#login');
  $_SESSION["noUser"] = '<div class="alert alert-danger">
<strong>That emial is currently not Registered<a href="http://movies.schupp.webfactional.com/signup.php" style="color:red;">Click HERE to register!</a></strong>
</div>';
}
mysqli_close($conn);
}
?>

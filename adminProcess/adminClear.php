<?php session_start();?>
<?php
unset($_SESSION['commentID']);
unset($_SESSION['deletemovieid']);

unset($_SESSION["moviePoster"]);
unset($_SESSION["movieTitle"]);
unset($_SESSION["movieImdb"]);
unset($_SESSION["movieAdded"]);
unset($_SESSION["imdbFail"]);

unset($_SESSION['deletemovieid']);
unset($_SESSION['deletemovieimdb']);
unset($_SESSION['deletemovietitle']);
unset($_SESSION['deletemovieimage']);

unset($_SESSION['commentID']);
unset($_SESSION['commentReview'] );
unset($_SESSION['commentuser']);




header('Location:http://movies.schupp.webfactional.com/admin.php#form2');
?>

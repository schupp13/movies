<?session_start();?>
<?php

session_unset();
// destroy the session
session_destroy();

header('Location: http://movies.schupp.webfactional.com/movies.php');
 ?>

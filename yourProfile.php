<?session_start();?>
<? include_once 'header.php'; ?>

<title>MushyBanana Tour Profile</title>
<?
if (isset($_POST["cancelchanges"])) {
}
?>
<!--==========================
  Hero Section
============================-->
<section id="hero">
  <div class="hero-container" style="background: url(img/moviespagebg.png); background-size: cover; background-repeat: no-repeat;">
    <h1>Marvel Cinema</h1>

<h1>Hello <?=$_SESSION['firstName']?></h1>
<h2>Below you will find your profile information and the reviews that you've made.</h2>

    <!-- <a href="#reviews" class="btn-get-started">Movies</a> -->
  </div>
</section>
<!--==========================
  End Hero Section
============================-->

<section id="sectionbg">
  <div class="container"><!--wow fadeInUp-->
    <div class="col-lg-12">

      <div class="section-header">
        <h3 class="section-title">Your Profile</h3>
        <p class="section-description">Watch | Review | Repeat</p>
      </div>

<!-- START YOUR PROFILE PROCESS FILE -->

<? include 'process/yourProfileProcess.php'; ?>


<!-- END YOUR PROFILE PROCESS FILE -->

<div class="section-header">
  <h3 class="section-title">Your Reviews</h3>
</div>
<?if($_SESSION["userDeletedReview"]){
  echo $_SESSION["userDeletedReview"];
  $_SESSION["userDeletedReview"] = '';
}?>

<!-- START YOUR PROFILE REVIEw FILE -->

<? include 'process/yourProfileReviews.php'; ?>


<!-- END YOUR PROFILE reviews PROCESS FILE -->
</div>
</div>
</section>

<? include_once 'footer.php'; ?>

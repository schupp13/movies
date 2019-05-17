<? include_once 'header.php'; ?>

<title>MushyBanana Movies</title>

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container" style="background: url(img/moviespagebg.png); background-size: cover; background-repeat: no-repeat;">
      <h1>Marvel Cinema</h1>

      <?   if(isset($_SESSION["firstName"])){
           echo '<h1>Welcome '.$_SESSION["firstName"]. ' ' .$_SESSION["lastName"].'!</h1><br>';
           echo '<p style="color:white; font-size:30px;">Check out your favorite Marvel movies below and leave a review.</p>';
     }  ?>

      <a href="#portfolio" class="btn-get-started">Movies</a>
    </div>
  </section><!-- #hero -->



    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio">
      <div class="container wow fadeInUp">

      <div class="col-lg-12">

        <div class="section-header">
          <!-- <h3 class="section-title">Marvel Cinema</h3> -->
          <!-- <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p> -->
        </div>
        <div class="row">


            <ul id="portfolio-flters">
              <li data-filter=".filter-captain_america, .filter-captain_marvel, .filter-iron_man, .filter-hulk, .filter-thor, .filter-avengers, .filter-guardians_of_the_galaxy, .filter-ant-man, .filter-doctor_strange, .filter-spider-man, .filter-black_panther" class="filter-active">Optimal Viewing Order</li>
              <li data-filter=".filter-captain_america">Captain America</li>
              <li data-filter=".filter-captain_marvel">Captain Marvel</li>
              <li data-filter=".filter-iron_man">Iron Man</li>
              <li data-filter=".filter-hulk">Hulk</li>
              <li data-filter=".filter-thor">Thor</li>
              <li data-filter=".filter-avengers">Avengers</li>
              <li data-filter=".filter-guardians_of_the_galaxy">Guardians of the Galaxy</li>
              <li data-filter=".filter-ant-man">Ant-man</li>
              <li data-filter=".filter-doctor_strange">Doctor Strange</li>
              <li data-filter=".filter-spider-man">Spider-Man</li>
              <li data-filter=".filter-black_panther">Black Panther</li>
            </ul>
          </div>
        </div>

        <div class="row" id="portfolio-wrapper">

          <? include 'process/dashboardProcess.php'; ?>
          <? include 'process/pageBuilderProcess.php'; ?>

        </div>

      </div>
    </section><!-- #portfolio -->


    <!--==========================
      Facts Section
    ============================-->
  <section id="facts">
    <div class="wow fadeIn">
      <div class="container-fluid col-lg-12" style="background-color: white; padding: 70px 0;">
        <div class="section-header">
          <h3 class="section-title">Live Feed</h3>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row counters">

          <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up">232</span>
            <p>User</p>
          </div>

          <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up">521</span>
            <p>Reviews</p>
          </div>

          <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up">1,463</span>
            <p>Total Movie Hours</p>
          </div>

          <!-- <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">15</span>
            <p>Hard Workers</p>
          </div> -->

        </div>
       </div>
      </div>
    </section><!-- #facts -->


    <!--==========================
    Call To Action Section
    ============================-->
    <section id="call-to-action">
      <div class="wow fadeIn">
        <div class="container col-lg-12">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Join In</h3>
            <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="signup.php">Sign Up</a>
          </div>
        </div>
        </div>
      </div>
    </section><!-- #call-to-action -->




<? include_once 'footer.php'; ?>

<? include_once 'header.php'; ?>

<title>MushyBanana Reviews</title>

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container" style="background: url(img/caherobg.jpg); background-size: cover; background-repeat: no-repeat;">
      <h1>Marvel Cinema Reviews</h1>

      <?   if(isset($_SESSION["firstName"])){
           echo '<h1>Welcome '.$_SESSION["firstName"]. ' ' .$_SESSION["lastName"].'!</h1><br>';
           echo '<p style="color:white; font-size:30px;">Check out your favorite Marvel movies below and leave a review.</p>';
     }  ?>

      <a href="#sectionbg" class="btn-get-started">Reviews</a>
    </div>
  </section><!-- #hero -->



    <!--==========================
      Revie Section
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
              <li data-filter=".filter-captain_america__the_first_avenger, .filter-captain_marvel, .filter-iron_man, .filter-iron_man_2, .filter-the_incredible_hulk, .filter-the_incredible_hulk .filter-thor, .filter-the_avengers, .filter-iron_man_3, .filter-thor__the_dark_world, .filter-captain_america__the_winter_soldier, .filter-guardians_of_the_galaxy, .filter-guardians_of_the_galaxy_vol__2, .filter-avengers__age_of_ultron, .filter-ant-man, .filter-doctor_strange, .filter-captain_america__civil_war, .filter-spider-man__homecoming, .filter-thor__ragnarok, .filter-black_panther, .filter-avengers__infinity_war, .filter-ant-man_and_the_wasp, .filter-avengers__endgame" class="filter-active">All Reviews</li>
              <li data-filter=".filter-captain_america__the_first_avenger">Captain America: The First Avenger</li>
              <li data-filter=".filter-captain_marvel">Captain Marvel</li>
              <li data-filter=".filter-iron_man">Iron Man</li>
              <li data-filter=".filter-iron_man_2">Iron Man 2</li>
              <li data-filter=".filter-the_incredible_hulk">The Incredible Hulk</li>
              <li data-filter=".filter-thor">Thor</li>
              <li data-filter=".filter-the_avengers">The Avengers</li>
              <li data-filter=".filter-iron_man_3">Iron Man 3</li>
              <li data-filter=".filter-thor__the_dark_world">Thor: The Dark World</li>
              <li data-filter=".filter-captain_america__the_winter_soldier">Captain America: The Winter Soldier</li>
              <li data-filter=".filter-guardians_of_the_galaxy">Guardians of the Galaxy</li>
              <li data-filter=".filter-guardians_of_the_galaxy_vol__2">Guardians of the Galaxy Vol. 2</li>
              <li data-filter=".filter-avengers__age_of_ultron">The Avengers: Age of Ultron</li>
              <li data-filter=".filter-ant-man">Ant-man</li>
              <li data-filter=".filter-doctor_strange">Doctor Strange</li>
              <li data-filter=".filter-captain_america__civil_war">Captain America: Civil War</li>
              <li data-filter=".filter-spider-man__homecoming">Spider-Man: Homecoming</li>
              <li data-filter=".filter-thor__ragnarok">Thor: Ragnarok</li>
              <li data-filter=".filter-black_panther">Black Panther</li>
              <li data-filter=".filter-avengers__infinity_war">Avengers: Infinity War</li>
              <li data-filter=".filter-ant-man_and_the_wasp">Ant-man and the Wasp</li>
              <li data-filter=".filter-avengers__endgame">Avengers: Endgame</li>
            </ul>
          </div>
        </div>

        <div class="row" id="portfolio-wrapper">

          <? include 'process/reviews2filter.php'; ?>

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

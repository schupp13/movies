<? include_once 'header.php'; ?>

<title>MushyBanana Reviews</title>

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container" style="background: url(img/caherobg.jpg); background-size: cover; background-repeat: no-repeat;">
      <h1>Marvel Cinema Reviews</h1>
      <a href="#reviewspage" class="btn-get-started">Reviews</a>
    </div>
  </section><!-- #hero -->



    <!--==========================
      Revie Section
    ============================-->
    <section id="sectionbg">
      <div class="container wow fadeInUp">

      <div class="col-lg-12">
        <div class="section-header">
          <h3 class="section-title">Marvel Reviews</h3>
          <p class="section-description">Watch | Rate | Review</p>
        </div>

        <div id="reviews" class="row">
          <div class="container">
              <div class="row">
                <div class="col-lg-12">

                 <?
                  include 'process/config.php';
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }

                  $sql = "SELECT * FROM  rating ORDER BY time DESC";
                  $result = mysqli_query($conn, $sql);

                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {?>
                        <div id="media">
                        <div class="media-left">
                          <h4 class="id"><?=$row['id']?></h4>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading-title"><?=$row['movieTitle']?></p></h4>
                          <h4 class="media-heading"><?=$row['userName']?></h4>
                          <p class="date">Posted on: <?=$row['time']?></p>
                          <p class="view"><?=$row['review']?></p>
                        </div>
                      </div>
                      <?}
                  } else {
                      echo "0 results";
                  }

                  mysqli_close($conn);
                ?>

                  <!-- <div>
                    <h1>$Username</h1>
                  </div>
                </div>
                 <div class="col-lg-9">
                   <div>
                      <h3>$Reviews</h3>
                   </div>
                 </div> -->
              </div>
            </div>
        </div>
      </div>
      </div>
    </div>
    </section><!-- #reviews -->


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

<? include_once 'header.php'; ?>

<title>MushyBanana login</title>
  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container" style="background: url(img/avengershero3.jpg) top center; background-size: 100% 100%; background-repeat: no-repeat;">
      <h1>Log In to Mushy Banana</h1>
      <h2>Watch | Rate | Review | Repeat</h2>
      <a href="#login" class="btn-get-started">Login</a>
    </div>
  </section><!-- #hero -->

  <!-- <main id="main"> -->

    <!---form for login--->


    <section id="login">




     <div class="wow fadeInUp" >
       <div class="form-group">
         <div class="container-fluid col-lg-12" style="background-color: black;">
             <form class="form" action="process/loginProcess.php" method="POST" >
               <?
         if (isset($_SESSION["wrongPassword"])) {
         echo $_SESSION["wrongPassword"];
         $_SESSION["wrongPassword"] = '';
         }
         if (isset($_SESSION["noUser"])) {
         echo $_SESSION["noUser"];
         $_SESSION["noUser"] = '';
         }
         ?>

               <h1><strong>Log In Here:</strong></h1>

               <h2><strong>Username:*</strong></h2>
               <input type="text" name="email" size="40" placeholder="email" required>

               <h2><strong>Password:*</strong></h2>
               <input type="password" name="password" size="15"  placeholder="Enter Password" required>


               <p class="text-center"><input type="submit" name="login" value="Login"></p>

           </div>
         </div>
       </div>

      </form>
      </section>

      <!--==========================
        Facts Section
      ============================-->
      <section id="facts">
        <div class="container wow fadeIn">
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
      </section><!-- #facts -->


  <!-- </main> -->


<? include_once 'footer.php'; ?>

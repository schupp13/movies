<? include_once 'header.php'; ?>

<title>MushyBanana signup</title>
  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container" style="background: url(img/avengershero2.jpg) top center; background-size: 100%;">
      <h1>Create a Mushy banana Account</h1>
      <h2>Watch | Rate | Review | Repeat</h2>
      <a href="#register" class="btn-get-started">Register</a>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!---form for registration--->


    <section id="register">


     <div class="wow fadeInUp" >
       <div class="form-group">
         <div class="container-fluid col-lg-12" style="background-color: black;">
             <form class="form" action="process/registerProcess.php" method="POST" >
               <?if (isset($_SESSION['alreadyUser'])) {
                         echo $_SESSION['alreadyUser'];
                         $_SESSION['alreadyUser'] = '';
                       }
                        ?>
                         <?if (isset($_SESSION['alreadyEmail'])) {
                                   echo $_SESSION['alreadyEmail'];
                                   $_SESSION['alreadyEmail'] = '';
                                 }
                                   ?>


               <h1><strong>Register Here:</strong></h1>

               <h2><strong>First Name:*</strong></h2>
               <input type="text" name="firstName" size="25" placeholder="First Name" required>

               <h2><strong>Last Name:*</strong></h2>
               <input type="text" name="lastName" size="35" placeholder="Last Name" required>

               <h2><strong>Email:*</strong></h2>
               <input type="email" name="email"  size="50" placeholder="Email" required>

               <h2><strong>User:*</strong></h2>
               <input type="text" name="user"  size="20" placeholder="User" required>

               <h2><strong>Create password:*</strong></h2>
               <input type="password" name="password" size="15" placeholder="Password" required>

               <h2><strong>Confirm password:*</strong></h2>
               <input type="password" name="confirmpassword" size="15" placeholder="Confirm Password" required>


               <p class="text-center"><input type="submit" name="newrecord" value="Register"></p>

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


  </main>


<? include_once 'footer.php'; ?>

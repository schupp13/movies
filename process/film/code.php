<? if(isset($_SESSION['id'])) { ?>
                   <li><a href="../../yourProfile.php" style="text-decoration: none; color: white;">Your Profile</a></li>
                   <li><a href="../signOut.php" style="text-decoration: none; color: white;">Sign Out</a></li>
            <? } else { ?>
               <li><a href="../../signup.php" style="text-decoration: none; color: white;">Sign Up</a></li>
               <li><a href="../../login.php" style="text-decoration: none; color: white;">Log In</a></li>
            <? }
        if(isset($_SESSION['admin'])){ ?>
               <li><a href="../../admin.php" style="text-decoration: none;">Admin</a></li>
            <? } ?>

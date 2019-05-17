<?php  session_start();?>
    <? if(isset($_SESSION['id'])) {?>
      <button data-toggle="collapse" data-target="#demo">Review</button>
    <? } else {?>
                   <button>Review</button>
                  <h1 style="color:white;">Log in to Review the Movie</h1>;
                <? }?>

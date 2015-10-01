<?php  

/** 
* 
* home.php
* ––––––––––––––––––––––––––––––––––––––––––––––––––
*
* 
*
* avoided using index.php because requirements need it the 
* doc to be called home.php to be graded!
*
*
*
**/






/* 
* includes, global variables and functionalities
* –––––––––––––––––––––––––––––––––––––––––––––––––– */
include 'inc/config.inc.php';


/* 
* local variables
* –––––––––––––––––––––––––––––––––––––––––––––––––– */
$page_title = 'Homepage';

/* 
* !! html content prints after this line !!
* –––––––––––––––––––––––––––––––––––––––––––––––––– */
include 'inc/header.inc.php';


?>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  
  <section class="section">
    <div class="container">
      <div class="row">
        <h2 class="section-title"><?php echo $page_title; ?></h2>
      </div>
      <div class="row">
        <div class="twelve columns">
          <p>
            <strong>Welcome To Hexia!</strong><br>
            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam voluptas unde cum sunt esse minus sequi quidem earum, quo nulla autem nobis! Quisquam odio, hic, dolore possimus adipisci dolorum illum.</span>
            <span>Praesentium optio facere, quasi excepturi commodi assumenda rerum earum explicabo accusantium eum laborum! Ut numquam, enim doloremque libero vero illo voluptatibus odit laudantium error, autem facilis sint. Earum, iste, dicta?</span>
            <span>Saepe praesentium velit ipsa aliquid ducimus harum consectetur esse nihil, recusandae doloremque dolorum rem aliquam voluptate obcaecati, quam laboriosam quibusdam quia laborum. Quasi voluptatum harum eius alias distinctio aliquid animi.</span>
          </p>
        </div>
      </div>
    </div>
  </section>


<?php

/* 
* php footer
* –––––––––––––––––––––––––––––––––––––––––––––––––– */
include 'inc/footer.inc.php';
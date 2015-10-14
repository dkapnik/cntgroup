<?php
/*
 * Setting variables for this specific page
 * before they are used in header.php
 */

  // Set the title of this page
  $pageTitle = "Home";
?>


  <!-- Include the header and navigation -->
  <?php include 'header.php'; ?>



  <!-- Our site's hero area -->
  <div class="hero">
      <h1>Eliminating fear, doubt, and uncertainty in your health matters.</h1>
  </div>


  <!-- A row of two 1/2 width columns -->
<div class="who">
  <div class="row">
      <div class="column one-third">
          <img src="icons/medical/07.jpg">
      </div>
    <div class="column two-third">
        <h2>Who We Are</h2>
      <p>We provide compassionate guidance in navigating the health care system. We are Licensed
Clinical Social Workers (LCSW) with more than 25 years combined experience in the health
care system.</p> 
        <p>We are able to serve as a liaison between patients, providers and families by
facilitating shared decision making, improving communication and health literacy.</p>
        </div>
    </div>
</div>

<div class="info">
    <div class="row">
        <div class="column one-third">
            <img src="icons/people.png">
        <h2>Patient Advocacy</h2>
            <p>Learn how a patient advocate can help you navigate the healthcare system, understand your healthcare matters, and empower you to take charge of your healthcare.</p>
        </div>
        <div class="column one-third">
            <img src="icons/compass.png">
        <h2>Services we Provide</h2>
            <p>
From helping you understand your treatment options to getting your personal medical record  established- see all the ways that we can help you.</p>
        </div>
        <div class="column one-third">
            <img src="icons/list.png">
        <h2>Our Process</h2>
            <p>We personalize our process and our services based on your needs and goals starting with an initial, free 30 minute consultation.</p>
        </div>
    </div>
</div>

<div class="touch">
    <h1>Get in Touch</h1>
    <h2>Let's get the conversation started!</h2>
    <h2>Contact us to setup a free 30 minute consultation so that we can start helping you.</h2>
</div>


  <!-- Include the footer -->
  <?php include 'footer.php'; ?>

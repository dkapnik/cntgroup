<?php
  // Convert Page Title to lower case for use in body ID tag
  $pageID = strtolower($pageTitle);
?>

<!DOCTYPE html>
<html>
  <head>
    <!-- Adding the Page Title from the index, about, or contact pages -->
    <title><?php echo $pageTitle; ?> | Patient Advocacy Matters</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body id="<?php echo $pageID; ?>">
    <header>
      <div class="row">
	<a href="index.php">Home</a>
    <a href="services.php">Services + Our Process</a>
        <a href="index.php"><img class="logo" src="logos/palogo2.png"/></a>
          <a href="about.php">About Us</a>
    <a href="contact.php">Contact</a>
    <a href="faqs.php">FAQs</a>
         </div>
    </header>

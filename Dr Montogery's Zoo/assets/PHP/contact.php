<?php
 if(isset($_POST['submit'])) {
	 $to = 'blakedominator@gmail.com';
	 $subject = 'inquiry';
	 $msg = 'Name: '. $_POST['name']."\r\n";
	 $msg .= 'Email: ' . $_POST['email']."\r\n";
	 $msg .= $_POST['message'];
	 $success = mail($to, $subject, $msg);
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="The purpose of this site is to provide you an understanding of how I use my work experience and education to mentor undergraduate and graduate students in classroom, research and service opportunities.">
	<meta name="keywords" content="portfolio, agricultural communication, Utah State University, Kelsey Hall, Dr. Hall">
	<meta name="author" content="Kelsey L Hall">
	<title>Kelsey Hall's Portfolio</title>	
	<script src="validation.js" type="text/javascript"></script>
	<script type="text/javascript" src="contact.php"></script>
	<!-- CSS -->
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../main.css" rel="stylesheet" type="text/css">
</head>
  <body>
	<div class="container">
	  <div class="container-fluid">
		  <?php if (isset($success) && $success) { ?>
		  <h1>Thank You</h1>
		  <p>Your message has been sent.</p>
		  <?php } else { ?>
		  <h1>Oops!</h1>
		  <p>Sorry, there was a problem sending your message.</p>
		  <?php } ?>
		</div>
    </div>
</body>
</html>
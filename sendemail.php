<?php include_once('pre_title.inc.php'); ?>
  <title>Email Kevin Meixner about web software development and programming in PHP SQL MySQL PostgreSQL JavaScript JQuery Mobile XML JSON REST HTML5 CSS3 OOP OpenLaszlo Java C++ AJAX</title>
<?php include_once('post_title.inc.php'); ?>
</head>
<body>

<div data-role="page">

  <?php include('header.inc.php'); ?>

  <div data-role="content" id="home">

  <?php
  
    // Sends email:
  
    $to = "kmit@rogers.com";
    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['message'];
    $from = "emailform@kevinmeixner.com";
    $headers = "From:" . $from;	
	
	if (strlen($_REQUEST['field3'])) {
		// robot detected, send fake success message but do not actually send email
	    echo 'The email was sent successfully.';
	}	
	else if ($subject == NULL && $message == NULL){
	  echo 'ERROR: Both the subject and the message were blank.';
	}
	else {
	
      $blnSuccessful = mail($to, $subject, $message, $headers);
      
	  if ($blnSuccessful){
	    echo 'The email was sent successfully.';
	  }
	  else {
	    echo 'ERROR: The email could not be sent. Please contact me via one of the social media links instead.';
	  }
	  
	}
	
  ?>

  </div><!-- /content -->

  <?php include('footer.inc.php'); ?>

</div><!-- /page -->

</body>
</html>

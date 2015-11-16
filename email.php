<?php include_once('pre_title.inc.php'); ?>
  <title>Email Kevin Meixner about web software development and programming in PHP SQL MySQL PostgreSQL JavaScript JQuery Mobile XML JSON REST HTML5 CSS3 OOP OpenLaszlo Java C++ AJAX</title>
<?php include_once('post_title.inc.php'); ?>
</head>
<body>

<div data-role="page">

  <?php include('header.inc.php'); ?>

  <div data-role="content" id="home">
	  
    <h4>Email contact form:</h4>	  
	
	<form method="post" action="sendemail.php" data-ajax="false">
	
    <div id="subject" data-role="fieldcontain">
      <fieldset data-role="controlgroup">
        <label for="subject">
		  Subject
        </label>
        <input name="subject" id="subject" placeholder="" value="" type="text" />
      </fieldset>
    </div>
		
    <div id="message" data-role="fieldcontain">
      <fieldset data-role="controlgroup">
        <label for="message">
          Message
        </label>
        <textarea name="message" id="message" placeholder=""></textarea>
      </fieldset>
    </div>
		
    <input id="submit" value="Send" type="submit" data-inline="true" data-icon="arrow-r" data-iconpos="right" />

  </div><!-- /content -->

  <?php include('footer.inc.php'); ?>

</div><!-- /page -->

</body>
</html>  
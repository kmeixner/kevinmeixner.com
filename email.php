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
	
    <div id="subjectDiv" data-role="fieldcontain">
      <fieldset data-role="controlgroup">
        <input name="subject" id="subject" placeholder="Subject" value="Re: Contacting You From kevinmeixner.com Email Form" type="text" />
      </fieldset>
    </div>
		
    <div id="messageDiv" data-role="fieldcontain">
      <fieldset data-role="controlgroup">
        <textarea name="message" id="message" placeholder="Message"></textarea>
      </fieldset>
    </div>
	
    <input id="submit" value="Send" type="submit" data-inline="true" data-icon="arrow-r" data-iconpos="right" />	
	
    <div id="field3Div" data-role="fieldcontain">
      <fieldset data-role="controlgroup">
        <input name="field3" id="field3" placeholder="Leave blank to prove your human" value="" type="text" />
      </fieldset>
    </div>
		
  </div><!-- /content -->

  <?php include('footer.inc.php'); ?>
  
  <script>
	document.getElementById('field3Div').style['visibility'] = 'hidden';
  </script>

</div><!-- /page -->

</body>
</html>  
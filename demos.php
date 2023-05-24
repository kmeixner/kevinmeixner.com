<?php include_once('pre_title.inc.php'); ?>
  <title>Demos - Web Software Developer PHP SQL MySQL PostgreSQL JavaScript JQuery Mobile XML JSON REST HTML5 CSS3 OOP OpenLaszlo Java C++ AJAX programming Kevin Meixner</title>
<?php include_once('post_title.inc.php'); ?>
</head>
<body>

<div data-role="page">

  <?php include('header.inc.php'); ?>

  <div data-role="content">
	  
    <h4>Demos:</h4>	  

	<ol>
	
	<li>
	<h3>Memory Card Game</h3>
	
	<p>
	This is an object-oriented PHP card game that I was once asked to write to demonstrate my PHP skills:
	</p>
	
	<p>
	<a href="cardgame?action=new" target="_blank" rel="external" data-ajax="false">Memory Card Game</a> (PHP)
	</p>
	
	<p>
	The game is written in object-oriented PHP and uses sessions to track the user's game progress. It is cross-browser compatible, platform independent, 
	and mobile compatible. The game will even work on systems that don't have JavaScript. The JQuery Mobile libraries have been added for aesthetic 
	purposes for an improved user experience on modern web devices but the game does not rely on the JQuery library or JavaScript for its functionality.
	</p>
	
	<p>
	<a href="https://github.com/kmeixner/kevinmeixner.com/tree/master/cardgame" target="_blank" rel="external" data-ajax="false">Source code</a>
	</p>
	
	</li>
  
	<li>
	<h3>Tic Tac Toe</h3>
	
	<p>
	This is a JavaScript Tic Tac Toe game that I was once asked to write to demonstrate my JavaScript skills:
	</p>
	
	<p>
	<a href="/tictactoe/index.html" target="_blank" rel="external" data-ajax="false">Tic Tac Toe</a> (JavaScript)
	</p>
	
	<p>
	This is mostly a pure JavaScript application except it uses a single JQuery call after the document has finished loading to initialize the board object.
    </p>
	
	
	<p>
	<a href="https://github.com/kmeixner/kevinmeixner.com/tree/master/tictactoe" target="_blank" rel="external" data-ajax="false">Source code</a>
	</p>	
	
	</li>  
	
	<li>
	
	<!--a href="http://www.sarolta.tv/site/sarolta_joomlaiframe/sarolta_joomlaiframe_editor.php?cuid=0&advanced=1" target="_blank" rel="external"-->
	Online Video Editor by Sarolta Technologies Inc. (<b>Sorry, online demo is no longer available</b>)
	<!--/a-->
	
	<p>
	Please give this application a couple of minutes to load.
	</p>
	
	<p>
	This is an online video editor that I created for Sarolta Technologies. It is capable of video on video, multiple audio track, image and text 
	title layers, text-to-speech (TTS) generation and much more. It features WYSISYG (What You See Is What You Get) previews of complex video effects
	that are found in professional video creation software today.
	</p>
	
	<p>
	Some of the effects are as follows:
	</p>
	
	<ul>
	<li>colour keying (green screen)</li>
	<li>x-Ray</li>
	<li>invert</li>
	<li>greyscale</li>
	<li>sepia</li>
	<li>RGB</li>
	<li>HSV</li>
	<li>blur</li>
	<li>sharpen</li>
	<li>emboss</li>
	<li>brightness</li>
	<li>opacity</li>
	<li>(visual) fade-in and fade-out</li>
	<li>drop shadow</li>
	</ul>
	
	<p>
	I created the front-end, the back-end PHP layer and the supporting database. The database was originally in PostgreSQL for the first couple of 
	years but was ported to use MySQL after that. Once the user is happy with the preview of the video in the web browser they send a publish request 
	to the back-end and a C++ program at the backend will composite all of the images, video frames together, combine the audio tracks and produce 
	a flat MP4 video.
	</p>
	
	<p>
	The original requirements were for the application to be cross-browser compatible, platform independent and not require any software installation 
	by the user. Initially an pure JavaScript+AJAX prototype was created back in late 2006, but it had cross-browser compatibility issues. A pure 
	Adobe Flash prototype was made but it was soon discovered that traditional Flash was not very friendly to programming large applications. At that 
	point OpenLaszlo was chosen, which is an Object-Oriented programming platform with XML and JavaScript syntax that compiles to Flash or DHTML/HTML5 
	(DHTML/HTML5 capability was added around 2009). An intial version was created using OpenLaszlo 3.3.3 compiled to Flash 8. In 2010 the application 
	was refactored and ported to work in OpenLaszlo 4.9.0 compiled to Flash 10 which is the version linked above. I have also done most of the work to 
	make this application ready to be ported to pure HTML5+JavaScript but it is a low priority project for my employer right now so it is not finished yet.
	</p>
	
	</li>
	
	<li>
	<h3>More Coming Soon...</h3>
	
	<p>
	More to come soon...
	</p>
	
	</li>
	
	</ol>
	  
  </div><!-- /content -->

  <?php include('footer.inc.php'); ?>

</div><!-- /page -->

</body>
</html>  
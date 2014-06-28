<!DOCTYPE html>
<html>
	<head>
	<meta charset=utf-8 />
	<title></title>
	<link rel="stylesheet" type="text/css" media="screen" href="css/BaseCSS.css" />
	<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> -->
	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php
	include 'functions.php';
	?>


	</head>

	<body>
	
	<div id="wrapper">
	
		<?php
		DisplayHeader();
		?>
		
		<?php
		DisplayNav();
		?>
		 
		<div id="body">
			
			<!-- <iframe name="window" frameborder=2 width=580 height=440 src="EliasColeResume.docx"></iframe> -->
			<!--  <a href="http://docs.google.com/viewer?url=[EliasColeResume.docx]" target="awindow">Doc 2</a> -->
			
			<div class="download">
				<a href="EliasColeResume.docx">Download as a docx</a>
			</div>
			
			<iframe class="iframe" name="window" frameborder=2 width=900 height=1100 src="EliasColeResumePDF.pdf"></iframe>
			
			
		</div>
		
	</div>
		
	 
	 
	 
	 
	 
	 
	 
	 
	 
	</body>
</html>






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
	
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
	<link rel="stylesheet" href="css/JQMenu.css">
	
	<script>
		$(function() {
			$( "#menu" ).menu();
		});
	</script>
	
	<style>
		
	</style>

	<?php
	include 'functions.php';
	?>
	

	</head>

	<body>
	
	<div id="wrapper">
	
		<?php
			DisplayHeader();
		?>
		
		<div id="nav">
		<?php
			//DisplayNav();
			RenderMenu();
		?>
		</div>
		 
		<div id="body">
			
			
			
			<?php
				Spacer();
			?>
			
			
			
			
		</div>
		
	</div>
		
	 
	 
	 
	 
	 
	 
	 
	 
	 
	</body>
</html>




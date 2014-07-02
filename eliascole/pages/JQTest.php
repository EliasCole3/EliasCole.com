<?php
	include '../functions.php';
	RenderSkeleton1();
?>

<div id="wrapper">

	<?php
		DisplayHeader();
		// DisplayNav();
	?>
		 
	<div id="body">		
	
		<ul id="sddm">
			<li><a href="index.php">Home</a></li>
			<li><a href="resume.php">Resume</a></li>
			
			<li><a href="#" onmouseover="mopen('div1')" onmouseout="mclosetime()">Portfolio</a>
				<div id="div1" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
					<a href='Assembly.php' > Assembly MASM </a> 
					<a href='MatchingGame.php' > Matching Game </a> 
					<a href='AndroidFragments.php' > Android Fragments </a> 
				</div>
			</li>
		</ul>
		<div style="clear:both"></div>
		
	</div>
</div>


<?php
	RenderSkeleton2();
?>


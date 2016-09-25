<?php
	include '../functions.php';
	RenderSkeleton1();
?>

<div id="wrapper">

	<?php
		DisplayHeader();
		DisplayNav2();
	?>
	<br />
	<br />
		 
	<div id="body">		
	
		<div class="DisplayText">
			Many of these programs reflect my developing skills.
			When I see them I have to resist completely rewriting them using the tools and skill I've learned since the last time I looked at them. 
			I leave them the way they are to be mileposts, showing how much I've grown.
			<br />
			<br />
			<br />
			
				<a href='Assembly.php' > Assembly MASM </a> <br />
				<a href='MatchingGame.php' > Matching Game </a> <br /> 
				<a href='AndroidFragments.php' > Android Fragments </a> 
				
			
		</div>
		
		<?php
			Spacer();
		?>
		
	</div>
</div>


<?php
	RenderSkeleton2();
	//<a href='AndroidFragments.php' > Android Fragments </a> <br />	
?>

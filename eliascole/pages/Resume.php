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
	
			
		<!-- <iframe name="window" frameborder=2 width=580 height=440 src="EliasColeResume.docx"></iframe> -->
		<!--  <a href="http://docs.google.com/viewer?url=[EliasColeResume.docx]" target="awindow">Doc 2</a> -->
			
		<div class="download" >
			<a href="../files/EliasColeResume.docx">Download as a docx</a>
		</div>
			
		<div id="iframediv">	
			<iframe class="iframe" name="window" frameborder=2 width=900 height=1100 src="../files/EliasColeResumePDF.pdf"></iframe>
		</div>
		
		<?php
			Spacer();
		?>
		
		
	</div>
</div>


<?php
	RenderSkeleton2();
?>



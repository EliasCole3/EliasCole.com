<?php

function DisplayNav() {
	echo(
	"<div id='nav'>" .
	"<ul id=\"menu\">\n" .
		"<li> <a href='index.php' > Home </a> </li>\n" .
		"<li> <a href='Resume.php' > Resume </a> </li>\n" .
		"<li> <a href='Portfolio.php' > Portfolio </a> 
		<ul>
			<li> <a href='Assembly.php' > Assembly MASM </a> </li>\n
			<li> <a href='MatchingGame.php' > Matching Game </a> </li>\n
			<li> <a href='AndroidFragments.php' > Android Fragments </a> </li>\n
		</ul>
		</li>\n" .
		 "<li> <a href='JQTest.php' > JQTest </a> </li>\n" .
	"</ul>\n" .
	"</div>"
	);
};


function DisplayHeader() {
	echo(
	"<div id='header'>" .
	"<b>Elias Cole III</b>" .
	"</div>"
	);
};



function Spacer(){
	echo "<br />\n"; 
	echo "<br />\n"; 
	echo "<br />\n"; 
	echo "<br />\n"; 
	echo "<br />\n"; 
	echo "<br />\n"; 
	echo "<br />\n"; 
	echo "<br />\n"; 
	echo "<br />\n"; 
	echo "<br />\n"; 
	echo "<br />\n"; 
	echo "<br />\n";
};




function RenderSkeleton1(){
	echo "<!DOCTYPE html>\n"; 
	echo "<html>\n"; 
	echo "<head>\n"; 
	echo "<meta charset=utf-8 />\n"; 
	echo "<title></title>\n"; 
	echo "<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"../css/BaseCSS.css\" />\n"; 
	echo "\n"; 
	echo "\n"; 
	echo "<script src=\"//code.jquery.com/jquery-1.10.2.js\"></script>\n"; 
	echo "<script src=\"//code.jquery.com/ui/1.11.0/jquery-ui.js\"></script>\n"; 
	echo "<script src=\"../JS/functions.js\"></script>\n"; 
	// echo "<link rel=\"stylesheet\" href=\"../css/JQMenu.css\">\n"; 
	// echo "\n"; 
	// echo "<script>\n"; 
	// echo "		$(function() {\n"; 
	// echo "			$( \"#menu\" ).menu();\n"; 
	// echo "		});\n"; 
	// echo "</script>\n";
	echo "\n"; 
	echo "\n"; 
	echo "</head>\n"; 
	echo "\n"; 
	echo "<body>\n";
};


function RenderSkeleton2(){
	echo "</body>\n"; 
	echo "</html>\n";
};


function DisplayNav2(){

	echo "
	<div></div>
	<div id=\"menu2\">
		<ul id=\"sddm\">
			<li><a href=\"index.php\">Home</a></li>
			<li><a href=\"Resume.php\">Resume</a></li>
			
			<li><a href=\"Portfolio.php\" onmouseover=\"mopen('div1')\" onmouseout=\"mclosetime()\">Portfolio</a>
				<div id=\"div1\" onmouseover=\"mcancelclosetime()\" onmouseout=\"mclosetime()\">
					<a href='Assembly.php' > Assembly MASM </a> 
					<a href='MatchingGame.php' > Matching Game </a> 
					<a href='AndroidFragments.php' > Android Fragments </a> 
				</div>
			</li>
			
		</ul>
	</div>
	";
	//<li><a href=\"JQTest.php\">Testing</a></li>
	
};
















































?>
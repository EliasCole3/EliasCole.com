

<?php

function DisplayNav() {
	echo(
	"<div id='nav'>" .
	"<a href='index.php' > Home </a> <br />" .
	"<a href='Portfolio.php' > Portfolio </a> <br />" .
	"<a href='Resume.php' > Resume </a> <br />" .
	"<a href='JQTest.php' > JQTest </a> <br />" .
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


function RenderMenu(){
	echo "			<ul id=\"menu\">\n"; 
	echo "				<li>Aberdeen</li>\n"; 
	echo "				<li>Ada</li>\n"; 
	echo "				<li>Adamsville</li>\n"; 
	echo "				<li>Addyston</li>\n"; 
	echo "				<li>Delphi\n"; 
	echo "					<ul>\n"; 
	echo "					<li>Ada</li>\n"; 
	echo "					<li>Saarland</li>\n"; 
	echo "					<li>Salzburg an der schönen Donau</li>\n"; 
	echo "					</ul>\n"; 
	echo "				</li>\n"; 
	echo "				<li>Saarland</li>\n"; 
	echo "				<li>Salzburg\n"; 
	echo "					<ul>\n"; 
	echo "					<li>Delphi\n"; 
	echo "						<ul>\n"; 
	echo "						<li>Ada</li>\n"; 
	echo "						<li>Saarland</li>\n"; 
	echo "						<li>Salzburg</li>\n"; 
	echo "						</ul>\n"; 
	echo "					</li>\n"; 
	echo "					<li>Delphi\n"; 
	echo "						<ul>\n"; 
	echo "						<li>Ada</li>\n"; 
	echo "						<li>Saarland</li>\n"; 
	echo "						<li>Salzburg</li>\n"; 
	echo "						</ul>\n"; 
	echo "					</li>\n"; 
	echo "					<li>Perch</li>\n"; 
	echo "					</ul>\n"; 
	echo "				</li>\n"; 
	echo "				<li>Amesville</li>\n"; 
	echo "			</ul>\n";
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















?>
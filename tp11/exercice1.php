
<?php 
include "exercice2.php";
include "exercice3.php";
?>

<?php
function addition ($a,$b)
	{
		echo "Addition = ";
		$c = $a + $b;
		print ($c);}
addition (2,5);

print "<br />\n";

function soustraction ($z,$e)
	{
		echo "Soustraction = ";
		$d = $z - $e;
		print ($d);}
soustraction (5,5);

print "<br />\n";

function multi ($a,$b)
	{
		echo "Multiplication = ";
		$c = $a * $b;
		print ($c);}
multi (2,5);

print "<br />\n";

function div ($a,$b)
	{
		echo "Division = ";
		$c = $a / $b;
		print ($c);}
div (10,2);

print "<br />\n";

echo operation(5,5,"addition");

echo createHTMLtable(10,10)
?>
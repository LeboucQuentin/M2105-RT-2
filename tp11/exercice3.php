<?php 
  function createHTMLtable($nbLignes,$nbCols){
		echo "<table border='1'>";
		for($i=0;$i<$nbLignes;$i++) {
			echo "<tr>";
			for($j=0;$j<$nbCols;$j++) {
				echo "<td>{$i} - {$j}</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
    }

?>
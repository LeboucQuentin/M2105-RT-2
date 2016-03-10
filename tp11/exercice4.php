<?php
/**
 * Created by PhpStorm.
 * User: quentin.lebouc
 * Date: 10/03/2016
 * Time: 16:36
 */


function createHTMLtable($nbLignes,$nbCols)

<!doctype html>
<html>
<meta charset="utf-8">
<head></head>
<body>

<?php
$cols=0;$rows=0;
if(array_key_exists("rows",$_POST)) {
    $rows=$_POST["rows"];
    $cols=$_POST["cols"];

}

?>

<fieldset>
    <legend>Création de tableau</legend>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
<label>Lignes : <input type="number" name="rows" id="rows" value="<?php echo $rows?>"></label>
<label>Colonnes : <input type="number" name="cols" id="cols" value="<?php echo $cols?>"></label>
<input type="submit" value="Créer le tableau">
</form>
</fieldset>

<?php
echo createHTMLtable($rows,$cols);
?>
</body>
</html>

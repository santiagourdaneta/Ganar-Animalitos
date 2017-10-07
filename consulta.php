<?php 
require("config.php");
$query = "SELECT * FROM `animalitos` ORDER BY `descripcion` ASC";
	$sth = $dbh->prepare($query); 
	//Execute the statement.
	$sth->execute();
	$data = $sth->fetchAll();
	  
	foreach ($data as $row): ?>
	
    <option value="<?= $row['numero']; ?>"><?= $row['descripcion']; ?></option>
<?php endforeach ?>
 ?>
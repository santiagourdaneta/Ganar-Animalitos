<?php 

if(isset($_POST["ganador1"])) {
$ganador1=$_POST["ganador1"];
}
else
{
	header('Location: index.php'); 
	exit;
	 
}
if(isset($_POST["ganador1"])) {
$ganador2=$_POST["ganador2"]; 
}else{
	 header('Location: index.php'); 
	exit;
}


$pilar1=$ganador1-1;
$cero_pilar1=$pilar1;  
$uno_pilar1=$pilar1+3; 
$dos_pilar1=$pilar1+6;  
$tres_pilar1=$pilar1+9;

if($cero_pilar1>36){$cero_pilar1="";}
if($uno_pilar1>36){$uno_pilar1="";}
if($dos_pilar1>36){$dos_pilar1="";}
if($tres_pilar1>36){$tres_pilar1="";}

 require("config.php");

$query = "SELECT * FROM `animalitos` WHERE numero='$cero_pilar1'";
	$sth = $dbh->prepare($query); 
	//Execute the statement.
	$sth->execute();
	$data = $sth->fetchAll();


foreach ($data as $row):   
	$cero_pilar1 = $row["descripcion"];
    
 endforeach  ?> 

<?php 

$query = "SELECT * FROM `animalitos` WHERE numero='$uno_pilar1'";
	$sth = $dbh->prepare($query); 
	//Execute the statement.
	$sth->execute();
	$data = $sth->fetchAll();

foreach ($data as $row):   
	$uno_pilar1 = $row["descripcion"];
    
 endforeach
?>

<?php 

$query = "SELECT * FROM `animalitos` WHERE numero='$dos_pilar1'";
	$sth = $dbh->prepare($query); 
	//Execute the statement.
	$sth->execute();
	$data = $sth->fetchAll();

 foreach ($data as $row):   
	$dos_pilar1 = $row["descripcion"];
    
 endforeach

?>

<?php 

$query = "SELECT * FROM `animalitos` WHERE numero='$tres_pilar1'";
	$sth = $dbh->prepare($query); 
	//Execute the statement.
	$sth->execute();
	$data = $sth->fetchAll();

 foreach ($data as $row):   
	$tres_pilar1 = $row["descripcion"];
    
 endforeach
?>

<?php 
$escalera_pilar1= $cero_pilar1."-".$uno_pilar1."-".$dos_pilar1."-".$tres_pilar1;

 

 
$pilar2=$ganador2+1;
$cero_pilar2=$pilar2;  
$uno_pilar2=$pilar2-3;  
$dos_pilar2=$pilar2-6;  
$tres_pilar2=$pilar2-9; 

if($cero_pilar2>36){$cero_pilar2="";}
if($uno_pilar2>36){$uno_pilar2="";}
if($dos_pilar2>36){$dos_pilar2="";}
if($tres_pilar2>36){$tres_pilar2="";}

$query = "SELECT * FROM `animalitos` WHERE numero='$cero_pilar2'";
	$sth = $dbh->prepare($query); 
	//Execute the statement.
	$sth->execute();
	$data = $sth->fetchAll();


foreach ($data as $row):   
	$cero_pilar2 = $row["descripcion"];
    
 endforeach  ?> 

<?php

$query = "SELECT * FROM `animalitos` WHERE numero='$uno_pilar2'";
	$sth = $dbh->prepare($query); 
	//Execute the statement.
	$sth->execute();
	$data = $sth->fetchAll();


foreach ($data as $row):   
	$uno_pilar2 = $row["descripcion"];
    
 endforeach  ?> 

<?php

$query = "SELECT * FROM `animalitos` WHERE numero='$dos_pilar2'";
	$sth = $dbh->prepare($query); 
	//Execute the statement.
	$sth->execute();
	$data = $sth->fetchAll();


foreach ($data as $row):   
	$dos_pilar2 = $row["descripcion"];
    
 endforeach  ?>

 <?php

 $query = "SELECT * FROM `animalitos` WHERE numero='$tres_pilar2'";
	$sth = $dbh->prepare($query); 
	//Execute the statement.
	$sth->execute();
	$data = $sth->fetchAll();


foreach ($data as $row):   
	$tres_pilar2 = $row["descripcion"];
    
 endforeach  ?>

 <?php

$escalera_pilar2= $cero_pilar2."-".$uno_pilar2."-".$dos_pilar2."-".$tres_pilar2;
 

require("head_procesar.php");
require("body_procesar.php");

 ?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<style>

	table{
		
		border:solid;
		
	}
	
</style>


</head>

<body>
<?php

	$familias=array("simpsons"=>array("padre"=>"homer","madre"=>"marge","hijos"=>"bart y lisa"),"padre de familia"=>array("padre"=>"peter","madre"=>"lois","hijos"=>"chris,meg y stewie"));
	//echo $familias["simpsons"]["padre"];
	
	print_r($familias);
	
	echo "<br>";
	
	//version mostrando indices
	
		echo "<ul>";
	
	foreach($familias as $indice=>$valores){
		
		foreach($valores as $Otroindice=>$valor){
		echo "<li>" . $indice . "  " . $Otroindice . "  "  .  $valor . "</li>";
		}
	}
	
	echo "</ul>";
	
	
		echo "<br>";	echo "<br>";	echo "<br>";
		
	//version sin mostrar indices
	
	foreach($familias as $indice=>$valores){
		
		foreach($valores as $valor){
		echo "<li>" . $indice . "  " .  $valor . "</li>";
		}
	}
	
		
?>
</body>
</html>
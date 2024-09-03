<?php
	
	//Teste de variáveis!//
	
	$val = -69;
	$resultado = "";
	
	if ($val > 0) {
	  $resultado = "Valor positivo";
	}elseif ($val < 0){
	  $resultado = "valor negativo";
	}else{
	  $resultado = "igaul a zero";
	}
	echo $resultado;
	?>
	
	
	<?php

	//Definição!!!//

	$a = 9;
	$b = 20;
	$c = 1;
	$d = 45;
	$e = 125;
	$f = 2;
	$g = 45;
	$h = 7;
	$i = 14;
	$resultado = "";
	$resultadob = "";
	$resultadoc = "";
	$resultadod = "";
	$resultadoe = "";
	$resultadof = "";
	$resultadog = "";
	$resultadoh = "";
	$resultadoi = "";
	
	//Variáveis//
	
	if ($a > 10) {
	  $resultado = "maior que 10";
	}elseif ($a < 15) {
	  $resultado = "Menor que 15";
	} 
	echo "\n O resultado de A, {$resultado}.";
	
  if ($b = 20) {
    $resultadob = "Igual a 20";
  }elseif ($b < 20) {
    $resultadob = "menor que 20";
  } 
  echo "\n O resultado de B, {$resultadob}.";
  
	if ($c < 3) {
	  $resultadoc = " Maior que 3";
	}elseif ($c = 2) {
	  $resultadoc ="Igual a 2";
	}elseif ($c = 1) {
	  $resultado = "Igual a 1";
	}
	echo "\n O resultado de C,{$resultadoc}.";
	
	if ($d = 25) {
	  $resultadod = "Igual a 25";
	}elseif ($d < 40) {
	  $resultadod = "menor que 40";
	}elseif ($d >= 40) {
	  $resultadod = "maior ou igual a 40";
	}
	echo "\n o resultado de D, {$resultadod}.";
	
	if ($e <= 100) {
	  $resultadoe ="Menor ou igual a 100";
	}elseif ($e >= 100) {
	  $resultadoe = "Maior ou igual a 100";
	}
	echo "\n O resultado de E, {$resultadoe}.";
	
	if ($f = 3) {
	  $resultadof = "Igual a 3";
	}elseif ($f > 3) {
	  $resultadof = "maior que 3";
	}elseif ($f <= 2) {
	  $resultadof = "menor ou igual a 2";
	}
 	echo "\n O resultado de F, {$resultadof}.";
	

  if ($g = $d ) {
   $resultadog = "Igual a D";
  }elseif ($g = $a) {
    $resultadog = "igual a A";
  }
  echo "\n O resultado de G, {$resultadog}.";

  if ($soma1 = $h + $a = 9) {
    $resultadoh = "True";
  }elseif ($soma2 = $h + $a = 10) {
    $resultadoh = "False";
  }
   echo "\n O resultado de H, {$resultadoh}";

  if ($h + $h = 14) {
    $resultadoi = "valor de H*H = 14";
  }elseif ($h + $h < 14) {
    $resultadoi = "Menor que 14";
  }
  echo "\n O resultado de I, {$resultadoi}";

  $Soma = $a + $b + $c + $d + $e + $f + $g + $h +$i;
  echo "\n A soma de todas as variáres, {$Soma}";


 $product = $a * $b - $d + $i * $h + $c - $f;
 echo "\n A * B - D + I * H + C - F = {$product}";
 


?>

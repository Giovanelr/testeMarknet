<?php
/*
 *
 *
 *
Faça um algoritmo em PHP que calcule a soma dos valores do array abaixo. Não é
permitido utilizar funções já definidas no PHP para realizar a soma, como por
exemplo array_sum, mas você pode utilizar if, while, for, foreach caso queira.
$valores = array(1,3,5,9,12,10);
*
*
*
*/
$valores = array(1,3,5,9,12,10);
$total_valores = 0;
//
for ( $i = 0; $i < count($valores); $i++) { 
	$total_valores += $valores[$i];
}
echo "O total dos valores do array (".implode(",", $valores).") é:".$total_valores;
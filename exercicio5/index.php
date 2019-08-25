<?php
/*
*
*
*
Crie uma classe PHP chamada "MyDate". Crie um método estático nessa classe
chamado "toAmerican" que recebe como parâmetro uma data em formato brasileiro
(dd/mm/YYYY) e retorne essa data em formato americano (YYYY-mm-dd).
*
*
*
*/
require 'myDate.php';
//
$data_atual = date("d/m/Y");
$converte_data = myDate::toAmerican($data_atual);
echo "Formato Brasileiro:".$data_atual;
echo "<br>Formato Americano:".$converte_data['data'];
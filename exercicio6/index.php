<?php
/*
*
*
*
Utilizando a classe "MyDate" criada anteriormente, crie um método estático chamado
"toggle" que recebe como parâmetro uma data. Este método deverá detectar através
de uma expressão regular (RegEx) se a data está em formato brasileiro e, caso
esteja, retorne essa data em formato americano. Caso não esteja em formato
brasileiro, o método deverá testar se a data está em formato americano, e caso
esteja, deverá retorná-la em formato brasileiro. Caso tenha sido passado um formato
diferente do formato americano ou brasileiro, deve-se lançar uma exceção com a
mensagem "Formato de data inválido".
*
*
*
*/
require 'myDate.php';
$data_br = date("d/m/Y");
$data_eua = date("Y-m-d");
$data_br_erro = date("d/Y/m");
$data_eua_erro = date("Y-d-m");
$retorno = myDate::toggle($data_br);
echo "Data BR ".$data_br." toggle ".$retorno['data'];
$retorno = myDate::toggle($data_eua);
echo "<br>Data EUA ".$data_eua." toggle ".$retorno['data'];
$retorno = myDate::toggle($data_br_erro);
echo "<br>Data BR erro ".$data_br_erro." toggle ".$retorno['erro'];
$retorno = myDate::toggle($data_eua_erro);
echo "<br>Data EUA erro ".$data_eua_erro." toggle ".$retorno['erro'];
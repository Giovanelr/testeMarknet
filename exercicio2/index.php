<?php
/*
 *
 *
 *
 Faça um algoritmo em PHP que receba uma data através de um parâmetro da url,
em formato brasileiro (dd/mm/YYYY), e calcule a quantidade de dias passados até a
data atual. A data atual não deve estar fixa no código, deve-se pegar a data atual
automaticamente no momento em que o script for executado.
*
*
*
*/
//
if (empty($_GET['data'])) {
	echo "Você não inseriu a data.";
	exit;
}
$data = $_GET['data'];
// Quebra a data para modificar para o formato americano
$data = explode("/",$data);
$aux = $data[0];
$data[0] = $data[2];
$data[2] = $aux;
$data = implode("-",$data);
$data = strtotime($data);
// Verifica se é maior que a data atual
// Recebe a data atual já tratada em timestamp
$data_atual = strtotime(date("Y-m-d"));
// Calcula a diferença, em dias, das duas datas
// Tempo em segundos /60 -> tempo em minutos/60 ->tempo em horas/24 -> tempo em dias
$diferenca = ($data_atual - $data)/60/60/24;
echo "A diferença entre ".$_GET['data']." e ".date("d/m/Y")." é de :".$diferenca." dias";
// Alternativa

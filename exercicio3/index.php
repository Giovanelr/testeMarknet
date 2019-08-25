<?php
/*
 *
 *
 *
 Crie um banco de dados mysql com uma tabela "usuarios", contendo as colunas "id",
"nome", "login", "senha". Crie um arquivo php que se conecte à esse banco de
dados utilizando PDO. Em seguida faça uma consulta na tabela "usuarios" filtrando
pela coluna "id", que deverá ser igual ao valor recebido através de um parâmetro "id"
na url.
*
*
*
*/
if (empty($_GET['id'])) {
	echo "Você não inseru o id";
	exit;
}
$id = $_GET['id'];
// Valida a entrada
if (!is_numeric($id)) {
	echo "O Id fornecido não é valido.";
	exit;
}
// Require a conexão com o banco
require 'banco.php';
$dados = Banco::consultaItem("*","usuarios","id",$id);
//
echo "Dados do Usuário";
echo "<br>Nome: ".$dados[0]["nome"];
echo "<br>Login: ".$dados[0]["login"];
echo "<br>Senha: ".$dados[0]["senha"];
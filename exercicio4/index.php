<?php
/*
 *
 *
 *
 Utilizando a tabela "usuarios" já criada e a conexão via PDO, faça um script php que
ao ser executado liste os 5 primeiros registros da tabela. Implemente uma paginação
neste script, onde caso seja passado um parâmetro "p=2" na url, o script deverá
retornar a "segunda página" da consulta, ou seja, os próximos 5 registros. Caso
receba "p=3", retorne a "terceira página, ou seja, os próximos 5 registros e assim
sucessivamente.
*
*
*
*/
if (empty($_GET['pagina'])) {
	$pagina = 1;
}else{
	$pagina = $_GET['pagina'];
}
// Valida a entrada
if (!is_numeric($pagina)) {
	echo "A pagina fornecida não é valida.";
	exit;
}
// Require a conexão com o banco
require 'banco.php';
$dados = Banco::consultaPagina("*","usuarios",$pagina,5);
if (empty($dados)) {
	echo "Não existem mais registros.";
	exit;
}
// Busca o total de paginas
$total_itens = Banco::contaTotal("id","usuarios");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Lista de Usuarios</title>
	</head>
	<body>
		<table>
			<thead>
				<tr>
					<th>Nome</th>
					<th>Login</th>
					<th>Senha</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				for ($i=0; $i < count($dados); $i++) { 
					echo "<tr><td>".$dados[$i]["nome"]."</td>";
					echo "<td>".$dados[$i]["login"]."</td>";
					echo "<td>".$dados[$i]["senha"]."</td></tr>";
				}
				?>
			</tbody>
		</table>
		<p>Paginas</p>
		<?php 
		for ($i=1; $i <= ($total_itens/5); $i++) { 
			echo '   <a href="?pagina='.$i.'">'.$i.'</a>   ';
		}
		?>
		<p><?php echo $total_itens; ?> usuários</p>
	</body>
</html>
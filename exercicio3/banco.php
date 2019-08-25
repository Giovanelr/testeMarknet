<?php
class Banco{
	public static function conectaBanco(){
		// Instancia a coneão com o banco
		$server = "localhost";
		$user = "admin";
		$pass = "adminspassword";
		try {
			//
			$conexao = new PDO("mysql:host=$server;dbname=teste_marknet", $user, $pass);
			return $conexao;
		} catch (Exception $e) {
			//
			return array("msg" => "erro", "erro" => "Erro ao conectar com o Banco.");
		}
	}
	public static function consultaItem($campos,$tabela,$chave,$valor){
		// Valida as entradas
		if (empty($campos)) {
			return array("msg" => "erro", "erro" => "Você precisa selecionar os campos.");
		}
		if (empty($tabela)) {
			return array("msg" => "erro", "erro" => "Você precisa selecionar a tabela.");
		}
		if (empty($chave)) {
			return array("msg" => "erro", "erro" => "Você precisa da chave para a pesquisa.");
		}
		if (empty($valor)) {
			return array("msg" => "erro", "erro" => "Você precisa do valor para a pesquisa.");
		}
		// Tenta executar a consulta
		try {
			$banco = Banco::conectaBanco();
			$stmt = $banco->prepare("SELECT ".$campos." FROM ".$tabela." WHERE ".$chave." = ".$valor);
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$itens = $stmt->fetchAll();
			return $itens;
		} catch (Exception $e) {
			//
			return array("msg" => "erro", "erro" => "Erro ao consutar no Banco.");
		}
	}
}
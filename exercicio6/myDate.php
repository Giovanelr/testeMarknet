<?php
class myDate{
	public static function toggle($data){
		// Explode a data no / 
		$data_exp = explode("/",$data);
		//
		if ( count($data_exp) == 3 ) {
			// Verifica se é uma data valida m-d-Y
			if ( checkdate($data_exp[1],$data_exp[0],$data_exp[2]) ) {
				$aux = $data_exp[0];
				$data_exp[0] = $data_exp[2];
				$data_exp[2] = $aux;
				$data_exp = implode('-', $data_exp);
				// Retorna no formato americano
				return array( "msg" => "sucesso", "sucesso" => "Data data altearada com sucesso", "data" => $data_exp );
			}
		}
		// Explode a data no -
		$data_exp = explode("-", $data);
		if ( count($data_exp) == 3 ) {
			// Verifica se é uma data valida m-d-Y
			if ( checkdate($data_exp[1],$data_exp[2],$data_exp[0]) ) {
				$aux = $data_exp[0];
				$data_exp[0] = $data_exp[2];
				$data_exp[2] = $aux;
				$data_exp = implode('/', $data_exp);
				// Retorna no formato brasileiro
				return array( "msg" => "sucesso", "sucesso" => "Data data altearada com sucesso", "data" => $data_exp );
			}
		}
		// 
		return array( "msg" => "erro", "erro" => "Formato de data Inválida");
	}
	public static function toAmerican($data){
		// 
		if (empty($data)) {
			return array( "msg" => "erro", "erro" => "A data não foi Inserida.");
		}
		$data = explode("/",$data);
		$aux = $data[0];
		$data[0] = $data[2];
		$data[2] = $aux;
		$data = implode("-",$data);
		return array( "msg" => "sucesso", "sucesso" => "Data convertida com Sucesso", "data" => $data );
	}
}
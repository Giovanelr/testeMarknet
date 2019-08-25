<?php
class myDate{
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
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Armada extends Model
{
	/**
	* Get list armada from database
	*/
	public static function getListArmada(){
		$json=file_get_contents("http://pw-bbg-backend.mybluemix.net/api/armadamanagements");
		$data=json_decode($json);
		return $data;
	}
}
<?php
namespace App;
session_start();
use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
	/**
	* Get list keluhan from database
	*/
	public static function getKeluhan(){
		$json=file_get_contents("http://batukotapintar.mybluemix.net/api/laporanklubas");
		$data=json_decode($json);
		return $data;
	}

	public static function getKeluhanDariID($id){
		$json=file_get_contents("http://batukotapintar.mybluemix.net/api/laporanklubas/".$id);
		$data=json_decode($json);
		return $data;
	}
	
}
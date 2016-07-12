<?php
namespace App;
session_start();
use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
	/**
	* Get list customer level from database
	*/
	public static function getAccount(){
		$json=file_get_contents("http://nbp-backend.mybluemix.net/api/MSISDNs");
		$data=json_decode($json);
		return $data;
	}
}
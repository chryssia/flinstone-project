<?php

namespace App;
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
	/**
	* Get list customer level from database
	*/
	public static function getAllContents(){
		$json=file_get_contents("http://nbp-backend.mybluemix.net/api/admins/".$_SESSION["user_id"]."/hasManyContent");
		$data=json_decode($json);
		return $data;
	}

	/**
	* Get list customer level from database
	*/
	public static function getContentById($id){
		$json=file_get_contents("http://nbp-backend.mybluemix.net/api/contents/".$id);
		$data=json_decode($json);
		return $data;
	}

	/**
	* Get list customer level from database
	*/
	public static function getContentsPerId($id){
		$json=file_get_contents("http://nbp-backend.mybluemix.net/api/services/".$id."/hasContents");
		$data=json_decode($json);
		return $data;
	}
}
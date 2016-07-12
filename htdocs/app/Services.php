<?php
namespace App;
session_start();
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
	/**
	* Get list customer level from database
	*/
	public static function getServices(){
		$json=file_get_contents("http://nbp-backend.mybluemix.net/api/admins/".$_SESSION["user_id"]."/hasServices");
		$data=json_decode($json);
		return $data;
	}

	/**
	* Get list customer level from database
	*/
	public static function getTransaction(){
		$json=file_get_contents("http://nbp-backend.mybluemix.net/api/revenues/getAllRevenuesFilters?cp_admin=".$_SESSION["user_id"]);
		$temp=json_decode($json);
		$data=$temp->result;
		return $data;
	}

	public static function getServicesById($id){
		$json=file_get_contents("http://nbp-backend.mybluemix.net/api/services/".$id);
		$data=json_decode($json);
		return $data;
	}
	/**
	* Get list customer level from database
	*/
	public static function addServices(){
		$json=file_get_contents("http://nbp-backend.mybluemix.net/api/admins/".$_SESSION["user_id"]."/hasServices");
		$data=json_decode($json);
		return $data;
	}
}
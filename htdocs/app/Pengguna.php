<?php
namespace App;
session_start();
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
	/**
	* Get list customer level from database
	*/
	
	public static function getPengguna(){
		$json=file_get_contents("http://batukotapintar.mybluemix.net/api/userklubas");
		$data=json_decode($json);
		return $data;
	}
	public static function getPenggunaDariID($id){
		$json=file_get_contents("http://batukotapintar.mybluemix.net/api/userklubas/".$id);
		$data=json_decode($json);
		return $data;
	}
	/**
	* Get list customer level from database
	*/
	// public static function tambahPengguna(){
	// 	$json=file_get_contents("http://nbp-backend.mybluemix.net/api/admins/".$_SESSION["user_id"]."/hasServices");
	// 	$data=json_decode($json);
	// 	return $data;
	// }
	// public static function hapusPengguna($id){
	// 	$json=file_get_contents("http://batukotapintar.mybluemix.net/api/userklubas/".$id);
	// 	$data=json_decode($json);
	// 	return $data;
	// }

}
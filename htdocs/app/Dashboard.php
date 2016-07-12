<?php
namespace App;
session_start();
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
	/**
	* Get list customer level from database
	*/
	public static function getPenggunaCount(){
		$json=file_get_contents("http://batukotapintar.mybluemix.net/api/userklubas/count");
		$data=json_decode($json);
		return $data;
	}

	/**
	* Get list customer level from database
	*/
	public static function getKeluhanCount(){
		$json=file_get_contents("http://batukotapintar.mybluemix.net/api/laporanklubas/count");
		$data=json_decode($json);
		return $data;
	}
	

	/**
	* Get list customer level from database
	*/
	public static function getReport(){
		$json=file_get_contents("http://nbp-backend.mybluemix.net/api/admins/".$_SESSION["user_id"]."/hasManyReports");
		$data=json_decode($json);
		return $data;
	}

		/**
	* Get list customer level from database
	*/
	public static function getTotalRevenue(){
		$json=file_get_contents("http://nbp-backend.mybluemix.net/api/revenues/getTotalRevenueCP?cp_admin_id=".$_SESSION["user_id"]);
		$data=json_decode($json);
		return $data;
	}

	/**
	* Get list customer level from database
	*/
	public static function getServices(){
		$json=file_get_contents("http://nbp-backend.mybluemix.net/api/admins/".$_SESSION["user_id"]."/hasServices/count");
		$data=json_decode($json);
		return $data;
	}

	/**
	* Get list customer level from database
	*/
	public static function getContents(){
		$json=file_get_contents("http://nbp-backend.mybluemix.net/api/admins/".$_SESSION["user_id"]."/hasManyContent/count");
		$data=json_decode($json);
		return $data;
	}
	
	/**
	* Get list customer level from database
	*/
	public static function getRevenueServices(){
		$json=file_get_contents("https://nbp-backend.mybluemix.net/api/revenues/getRevenuesServicebyCPAdmin?cp_admin_id=".$_SESSION["user_id"]);
		$data=json_decode($json);
		return $data;
	}
}
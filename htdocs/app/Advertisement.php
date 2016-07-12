<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
	/**
	* Get list customer level from database
	*/
	public static function getListAdvertisement(){
		$json=file_get_contents("http://pw-bbg-backend.mybluemix.net/api/adsmanagements");
		$data=json_decode($json);
		return $data;
	}
}
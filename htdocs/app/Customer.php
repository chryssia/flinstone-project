<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	/**
	* Get list customer level from database
	*/
	public static function getListCustomerLevel(){
		$json=file_get_contents("http://pw-bbg-backend.mybluemix.net/api/customerlevels");
        $data=json_decode($json);
		return $data;
	}
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class ModelLogIn extends Model
{
   	public static function checkLogIn($userInput){

   		$username= $userInput['UN'];
   		$password= $userInput['PW'];

   		$result = DB::table('tbl_users')
                    ->where('username', $username)
                    ->where('password', $password)
                    ->get();

        if(count($result)== 1)
		{
			return $result;
		}
		else
		{
			return false;
		}
    }
}

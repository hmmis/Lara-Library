<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class ModelBook extends Model
{
    public static function getBookList(){

    	return DB::table('bookstore')->get();
    }
    public static function insertNewBook($data){

        DB::table('bookstore')->insert($data);
    }
}

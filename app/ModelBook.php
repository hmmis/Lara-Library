<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class ModelBook extends Model
{
    public static function getBookList(){

    	return DB::table('bookstore')->paginate(5);
    	//return DB::table('bookstore')->get();
    }
    public static function insertNewBook($data){

        DB::table('bookstore')->insert($data);
    }
    public static function deleteBook($id){
    	
        DB::table('bookstore')->where('BookId', '=', $id)->delete();
    }
}

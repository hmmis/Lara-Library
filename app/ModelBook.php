<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class ModelBook extends Model
{
    //======================================================select
    public static function getBookList(){

    	return DB::table('bookstore')->orderBy('BookName', 'asc')->paginate(5);
    	//return DB::table('bookstore')->orderBy('BookName', 'asc')->get();
    }
    public static function getSuggestion($hint){

        $results = DB::table('bookstore')
                ->where('BookName', 'like', '%'.$hint.'%')
                ->get();

        return $results;
    }
    public static function getOneBook($id){
        
        return DB::table('bookstore')->where('BookId', '=' , $id)->get();
    }

    //======================================================insert
    public static function insertNewBook($data){

        DB::table('bookstore')->insert($data);
    }

    //======================================================update
    public static function editBook($data,$id){

        DB::table('bookstore')->where('BookId', '=' , $id)->update($data);
    }

    //======================================================delete
    public static function deleteBook($id){
    	
        DB::table('bookstore')->where('BookId', '=', $id)->delete();
    }
}

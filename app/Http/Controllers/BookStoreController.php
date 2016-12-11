<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\ModelBook;

class BookStoreController extends Controller
{
    public function index(){

    	$data['books'] = ModelBook::getBookList();
    	return view('view_BookList',$data);

    }
    public function addBook(){
    	$data['books'] = ModelBook::getBookList();
    	return view('view_AddBook',$data);
    }

    public function processAddBook(Request $request){

        $this->validate($request, [
            'book_name' => 'required|max:255',
            'author_name' => 'required',
            'edition' => 'required'
        ]);

        return "OK";
    }
}

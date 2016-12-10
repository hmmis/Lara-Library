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
}

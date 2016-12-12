<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\AddBookValidation;

use App\ModelBook;

use DB;

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

    public function processAddBook(AddBookValidation $request){

        $data = array(
            'BookName' => $request->input('book_name'),
            'Author' => $request->input('author_name'),
            'edition' => $request->input('edition')

        );

        ModelBook::insertNewBook($data);

        $request->session()->flash('message', 'New Book Added Successfull');
        return redirect('/');
        
    }

     public function deleteBook($id,Request $request){

        ModelBook::deleteBook($id);
        $request->session()->flash('message', 'Delete id '.$id .' Successfull');

        return back();
    }
}

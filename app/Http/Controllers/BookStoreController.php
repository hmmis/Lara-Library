<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\AddBookValidation;

use App\ModelBook;

class BookStoreController extends Controller
{
    //======================================================show data
    public function index(){

    	$data['books'] = ModelBook::getBookList();
    	return view('view_BookList',$data);

    }

    //======================================================insert
    public function addBook(){

    	return view('view_AddBook');
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

    //======================================================update
    public function editBook($id){

        $data['book'] = ModelBook::getOneBook($id);
        return view('view_EditBook',$data);
    }
    public function processEditBook($id,AddBookValidation $request){

        $data = array(
            'BookName' => $request->input('book_name'),
            'Author' => $request->input('author_name'),
            'edition' => $request->input('edition')

        );

        ModelBook::editBook($data,$id);

        $request->session()->flash('message', 'Book Edited Successfull');
        return redirect('/');
    }

    //======================================================delete
    public function deleteBook($id,Request $request){

        ModelBook::deleteBook($id);
        $request->session()->flash('message', 'Delete id '.$id .' Successfull');

        return back();
    }
}

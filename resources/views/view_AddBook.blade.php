@extends('view_layouts/view_master')		
@section('title', 'Add New Book')
@section('content')		

<div class="container">
	<h1>Add Book</h1>
	<form method="POST" action="" class="form-inline">
		Book Name
		<input type="text" name="book_name" value="{{ old('book_name') }}" class="form-control" ><br><br>
		Author
		<input type="text" name="author_name" value="{{ old('author_name') }}"class="form-control" ><br><br>
		Edtion
		<input type="text" name="edition" class="form-control" ><br><br>

		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="submit" value="Add Book" class="btn btn-success">
	</form>

	@include('view_layouts/view_ValidationErrorMessage')

</div>
@endsection
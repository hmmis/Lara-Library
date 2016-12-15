@extends('view_layouts/view_master')		
@section('title', 'Add New Book')
@section('content')		

<div class="container">
	<h1>Log In</h1>
	<form method="POST" action="" class="form-inline">
		Username
		<input type="text" name="username" value="{{ old('book_name') }}" class="form-control" ><br><br>
		Password
		<input type="text" name="password" class="form-control" ><br><br>

		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="submit" value="Login" class="btn btn-success">
	</form>

	@if (session()->has('message'))
		<div class="alert alert-danger">
			 {{session('message')}} 
		</div>    
	@endif

	@include('view_layouts/view_ValidationErrorMessage')

</div>
@endsection
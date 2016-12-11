<!DOCTYPE html>
<html>
<head>
	<title>Book List</title>
	
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap-theme.min.css') }}">


</head>
<body>
	<div class="container">
		
	
		<h1>Add Book</h1>
		<form method="POST" action="" class="form-inline">
			Book Name
			<input type="text" name="book_name" class="form-control" ><br><br>
			Author
			<input type="text" name="author_name" class="form-control" ><br><br>
			Edtion
			<input type="text" name="edition" class="form-control" ><br><br>

			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="submit" value="Add Book" class="btn btn-success">
		</form>

		<!--=======================Validation Error message-->
		@if (count($errors) > 0)
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

	</div>
</body>
</html>
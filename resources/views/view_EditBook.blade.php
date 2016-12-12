<!DOCTYPE html>
<html>
<head>
	<title>Book List</title>
	
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap-theme.min.css') }}">


</head>
<body>
	<div class="container">
		
	
		<h1>Edit Book</h1>

		<form method="POST" action="" class="form-inline">
			@foreach ($book as $row)
				Book Name
				<input type="text" name="book_name" value="{{ $row->BookName }}" class="form-control" ><br><br>
				Author
				<input type="text" name="author_name" value="{{ $row->Author }}"class="form-control" ><br><br>
				Edtion
				<input type="text" name="edition" value="{{ $row->Edition }}" class="form-control" ><br><br>

				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="submit" value="Update Book" class="btn btn-success">
			@endforeach
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
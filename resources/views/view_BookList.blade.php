@extends('view_layouts/view_master')		
@section('title', 'Book Lists')
@section('content')

<script type="text/javascript">
	function showHint(str) {
	    if (str.length == 0) {
	        document.getElementById("txtHint").innerHTML = "Please Type...";
	        return;
	    } else {
	        var xmlhttp = new XMLHttpRequest();
			
	        xmlhttp.onreadystatechange = function() {
	            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
	            }
	        };
	        xmlhttp.open("GET", "suggestion/" + str, true);
	        xmlhttp.send();
	    }
	}
</script>

<div class="container">

	Logged In As: {{$user}}
	<a  href="{{ url('LogOut') }}" > Log Out</a>
	<h1>Book List</h1>

	@if (session()->has('message'))
		<div class="alert alert-success">
			 {{session('message')}} 
		</div>    
	@endif

	<div class=text-right>
		<a  href="{{ url('add') }}" class="btn btn-primary">
			<span class="glyphicon glyphicon-plus"> </span>  Add Book
		</a>
		<br><br>

		
		<form class="form-inline">
			<input type="text" placeholder="Search Book Name...." onkeyup="showHint(this.value)" class="form-control" ">
		</form>
		<span id="txtHint"></span>
	</div><br>

	<table class="table table-bordered text-center">
		<tr>
			<th>BookName</th>
			<th>Author</th>
			<th>Edition</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		@foreach ($books as $row)
			   
		    <tr>
		    	
			    <td>{{ $row->BookName }}</td>
				<td>{{ $row->Author }}</td>
				<td>{{ $row->Edition }}</td>
				<td><a href="edit/{{$row->BookId}}">Edit</a></td>
				<td><a href="delete/{{$row->BookId}}" onclick="return confirm('Are you sure?')">Delete</a></td>
			</tr>
		@endforeach

	</table>
	<center>{!! $books->render() !!}</center>

</div>
@endsection
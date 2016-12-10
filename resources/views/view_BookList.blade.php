<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Book List</h1>
	<table class="table table-bordered text-center">
		<tr>
			<th>BookName</th>
			<th>Author</th>
			<th>Edition</th>
			<th>Details</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		@foreach ($books as $row)
		    <tr>
			    <td>{{ $row->BookName }}</td>
				<td>{{ $row->Author }}</td>
				<td>{{ $row->Edition }}</td>
				<td>Details</td>
				<td><a href="edit/{{$row->BookId}}">Edit</a></td>
				<td><a href="delete/{{$row->BookId}}">Delete</a></td>
			</tr>
		@endforeach

	</table>

</body>
</html>
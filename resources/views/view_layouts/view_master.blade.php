<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title')</title>
		<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('css/bootstrap-theme.min.css') }}">
	</head>
	<body>
		@yield('content')
	</body>
</html>
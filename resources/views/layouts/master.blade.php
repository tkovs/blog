<!DOCTYPE html>

<html>
	<head>
		<title>@yield('title')</title>
	</head>
	<body>
		<nav class='menu'>
			@include('layouts.nav')	
		</nav>

		<div class='content'>
			@yield('content')
		</div>

		<footer>
			@include('layouts.footer')
		</footer>
	</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
</head>
<body>
	
	<header class="header">
		<h1>this is header area</h1>
	</header>

	@yield('content')

	@yield("slider")

	@yield("portfolio")

	<footer class="footer">
		<p>Copyright text</p>
	</footer>
 

</body>
</html>
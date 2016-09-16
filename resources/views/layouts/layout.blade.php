<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="{{ elixir('/css/app.css') }}">
</head>
<body>
	<div class="container">
	<h1>Title</h1>

		@yield('content')

	</div>

	@yield('footer')

</body>
</html>
<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'GWHobby') }}</title>

	<!-- Styles -->
	<link href="/css/app.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet">
	<link href="//cdnjs.cloudflare.com/ajax/libs/summernote/0.7.0/summernote.css" rel="stylesheet">

	<!-- Scripts -->
	<script>window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?></script>


</head>
<body>
	<div class="wrap">
		<div class="main">
			<nav class="navbar navbar-default navbar-static-top">
				<div class="container">
					<div class="navbar-header">

						<!-- Collapsed Hamburger -->
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
							<span class="sr-only">Toggle Navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<!-- Branding Image -->
						<a class="navbar-brand" href="{{ url('/') }}">
							{{ config('app.name', 'GWHobby') }}
						</a>
					</div>



					<div class="collapse navbar-collapse" id="app-navbar-collapse">
						<!-- Left Side Of Navbar -->
						<ul class="nav navbar-nav">
							&nbsp;
						</ul>

						<ul class="nav navbar-nav navbar-left">
							<li role="presentation"><a href="/games">Spellen</a></li>
							<li role="presentation"><a href="/news">Nieuws</a></li>
							<li role="presentation"><a href="/events">Evenementen</a></li>
						</ul>

						<!-- Right Side Of Navbar -->
						<ul class="nav navbar-nav navbar-right">
							@if (Auth::check())
							<li><a href="{{ url('/profile') }}">Profiel</a></li>
							<li><a href="{{ url('/admin') }}">Admin</a></li>
							<li>
								<a href="{{ url('/logout') }}"
								onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
								Logout
							</a>

							<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
						</li>

						@endif
						<!-- Authentication Links -->
						@if (Auth::guest())
						<li><a href="{{ url('/login') }}">Login</a></li>
						<li><a href="{{ url('/register') }}">Register</a></li>
						@else
					</ul>
					@endif
				</div>
			</div>
		</nav>
		<div class="container">
			@yield('content')
		</div>
	</div>
</div>
<footer>
	&copy; <a href="/">GWHobby.net</a> <?php echo date("Y"); ?>
</footer>

</body>

<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
<script src="/js/all.js"></script>
<!-- Load all JS at footer for faster website loading.. -->

<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/summernote/0.7.0/summernote.js"></script>
<script>
	jQuery(document).ready(function() {
		if('#summernote'){
			jQuery('#summernote').summernote({
				height: 250,

			});
		}
	});
</script>

</html>
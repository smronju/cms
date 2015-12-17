<!DOCTYPE html>
<html>
<head>
	<title>@yield('title') &mdash; The Sunday Sim</title>
	<link rel="stylesheet" type="text/css" href="{{ theme('css/frontend.css') }}">
</head>
<body>
	
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header"><a href="/" class="navbar-brand">The Sunday Sim</a></div>
			<ul class="nav navbar-nav">
				@include('partials.navigation')
				<!-- <li class="dropdown">
					<a href="#">Item 1 <span class="caret"></span></a>

					<ul class="dropdown-menu">
						<li><a href="#">Item 1.1</a></li>
						<li><a href="#">Item 1.2</a></li>
						<li class="dropdown-submenu">
							<a href="#">Item 1.3 <span class="caret right"></span></a>

							<ul class="dropdown-menu">
								<li><a href="#">Item 1.3.1</a></li>
								<li><a href="#">Item 1.3.2</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="#">Item 2</a></li>
				<li><a href="#">Item 3</a></li> -->
			</ul>
		</div>
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-md-12">@yield('content')</div>
		</div>
	</div>

</body>
</html>
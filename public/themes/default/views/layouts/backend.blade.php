<!DOCTYPE html>
<html>
<head>
	<title>@yield('title') &mdash; The Sunday Sim</title>
	<link rel="stylesheet" type="text/css" href="{{ theme('css/backend.css') }}">
	<script type="text/javascript" src="{{ theme('js/all.js') }}"></script>
</head>
<body>
	
	<nav class="navbar navbar-inverse navbar-static-top">
		<div class="container">
			<div class="navbar-header"><a href="/" class="navbar-brand">The Sunday Sim</a></div>
			<ul class="nav navbar-nav">
				<li><a href="{{ route('backend.users.index') }}">Users</a></li>
				<li><a href="{{ route('backend.pages.index') }}">Pages</a></li>
				<li><a href="{{ route('backend.blog.index') }}">Blog Posts</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><span class="navbar-text">Hello, {{ $admin->name }}</span></li>
				<li><a href="{{ route('auth.logout') }}">Logout</a></li>
			</ul>
		</div>
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>@yield('title')</h3>

				@if($errors->any())
					<div class="alert alert-danger">
						<strong>We found some errors!</strong>

						<ul>
							@foreach($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>

					</div>
					@endif

					@if ($status)
					<div class="alert alert-info">
						{{ $status }}
					</div>
				@endif

				@yield('content')
			</div>
		</div>
	</div>

</body>
</html>
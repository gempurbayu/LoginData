<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewpoint" content="width-device-width, initial-scale-1">
	<title>Web Plan</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/font-awesome.min.css') }}">
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Planning</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<form class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								{{ Auth::user()->name }} <span class="caret"></span>
						</a>

						<ul class="dropdown-menu" role="menu">
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
						</ul>
				</li>
			<li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            </li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>
<div class="container">
	<div class="row">
		@yield('content')
	</div>
</div>
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
</body>
</html>

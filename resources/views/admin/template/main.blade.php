<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default')	|	Panel de Administracion</title>
	<link rel="stylesheet" type="text/css" href="{{	asset('plugins/bootstrap/css/bootstrap.css')	}}">
</head>
<body>
	@include('admin.template.partials.nav')

	<section>
		@yield('content')
	</section>	

	<!---<footer>
		@include('')
	</footer>--->

	<script type="text/javascript" src="{{	asset('plugins/jquery/js/jquery-2.2.3.js')	}}"></script>
	<script type="text/javascript" src="{{	asset('plugins/bootstrap/js/bootstrap.js')	}}"></script>
</body>
</html>
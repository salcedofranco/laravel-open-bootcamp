<!DOCTYPE html>
<html lang="en">
@php
	$version = 9;
	$temas = ['Introduccion', 'Directorios', 'Novedades', '<b>Composer</b>', 'Blade'];
@endphp

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> {{ env('APP_NAME') }} Open Bootcamp</title>	
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">

</head>

<body>
	<h1>Web Laravel {{ $version }}</h1>
	<h4>Temas vistos hasta el momento:</h4>

	<ul>
		@foreach ($temas as $t)
			<li>
				{!! $t !!}
			</li>
		@endforeach
	</ul>

	<script src="{{ asset('js/script.js') }}"></script>
</body>

</html>

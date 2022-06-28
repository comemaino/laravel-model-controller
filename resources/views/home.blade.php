<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Movies</title>

	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
	<main>
		<div class="container">
			<h1>M O V I E S</h1>
		</div>
		<div class="container">
			@foreach ($movies as $movie)
				@include('components.movie-card')
			@endforeach
		</div>
	</main>
</body>

</html>

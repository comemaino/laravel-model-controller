<div class="card">
	<img src="{{ $movie->thumb }}" alt="{{ $movie->title }}">
	<h3>{{ $movie->title }}</h3>
	<h5>{{ $movie->original_title }}</h5>
	<p class="year">{{ $movie->date }}</p>
	<p class="rating">{{ $movie->vote }}</p>
</div>

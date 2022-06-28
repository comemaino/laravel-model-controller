<div class="card">
	<img src="{{ $movie->thumb }}" alt="{{ $movie->title }}">
	<h3>{{ $movie->title }}</h3>
	<h5>{{ $movie->original_title }}</h5>
	<p class="year">{{ Str::limit($movie->date, 4, $end = '') }}</p>
	<p
		class="rating @if ($movie->vote < 5) red
    @elseif ($movie->vote < 7) yellow 
    @else green @endif">
		{{ $movie->vote }}</p>
</div>

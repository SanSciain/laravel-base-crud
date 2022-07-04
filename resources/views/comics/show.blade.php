<h2>{{ $selected_comic['title'] }}</h2>
<p>{{ $selected_comic['description'] }}</p>
<img src="{{ $selected_comic['thumb'] }}" alt="">
<p>{{ $selected_comic['price'] }}</p>
<p>{{ $selected_comic['series'] }}</p>
<p>{{ $selected_comic['sale_date'] }}</p>
<p>{{ $selected_comic['type'] }}</p>

<a href="{{ route('comics.edit', ['comic' => $selected_comic->id]) }}">Change</a>
<button>Delete</button>

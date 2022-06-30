<h1>ALL COMICS</h1>

<ul>
    @foreach ($comics_list as $item)
        <li>
            <h3>{{ $item['title'] }}</h3>
            <p>{{ $item['description'] }}</p>
            <img src="{{ $item['thumb'] }}" alt="">
            <p>{{ $item['price'] }}</p>
            <p>{{ $item['series'] }}</p>
            <p>{{ $item['sale_date'] }}</p>
            <p>{{ $item['type'] }}</p>
        </li>
    @endforeach
</ul>

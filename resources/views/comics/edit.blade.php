        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('comics.update', ['comic' => $comic_to_update->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="title">title</label>
            <input type="text" id="title" name="title"
                value="{{ old('title') ? old('title') : $comic_to_update->title }}">
            <label for="description">description</label>
            <input type="text" id="description" name="description"
                value="{{ old('description') ? old('description') : $comic_to_update->description }}">
            <label for="thumb">thumb</label>
            <input type="text" id="thumb" name="thumb"
                value="{{ old('thumb') ? old('thumb') : $comic_to_update->thumb }}">
            <label for="price">price</label>
            <input type="text" id="price" name="price"
                value="{{ old('price') ? old('price') : $comic_to_update->price }}">
            <label for="series">series</label>
            <input type="text" id="series" name="series"
                value="{{ old('series') ? old('series') : $comic_to_update->series }}">
            <label for="sale_date">sale_date</label>
            <input type="text" id="sale_date" name="sale_date"
                value="{{ old('sale_date') ? old('sale_date') : $comic_to_update->sale_date }}">
            <label for="type">type</label>
            <input type="text" id="type" name="type"
                value="{{ old('type') ? old('type') : $comic_to_update->type }}">
            <button type="submit">Change</button>
        </form>

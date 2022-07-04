<h1>FORM FOR NEW COMIC</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="{{ route('comics.store') }}" method="post">
    @csrf
    <label for="title">title</label>
    <input type="text" id="title" name="title" value="{{ old('title') }}">
    <label for="description">description</label>
    <input type="text" id="description" name="description" value="{{ old('description') }}">
    <label for="thumb">thumb</label>
    <input type="text" id="thumb" name="thumb" value="{{ old('thumb') }}">
    <label for="price">price</label>
    <input type="text" id="price" name="price" value="{{ old('price') }}">
    <label for="series">series</label>
    <input type="text" id="series" name="series" value="{{ old('series') }}">
    <label for="sale_date">sale_date</label>
    <input type="text" id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
    <label for="type">type</label>
    <input type="text" id="type" name="type" value="{{ old('type') }}">
    <button type="submit">Submit</button>
</form>

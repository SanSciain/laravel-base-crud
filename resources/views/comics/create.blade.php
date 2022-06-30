<h1>FORM FOR NEW COMIC</h1>

<form action="{{ route('comics.store') }}" method="post">
    @csrf
    <label for="title">title</label>
    <input type="text" id="title" name="title">
    <label for="description">description</label>
    <input type="text" id="description" name="description">
    <label for="thumb">thumb</label>
    <input type="text" id="thumb" name="thumb">
    <label for="price">price</label>
    <input type="text" id="price" name="price">
    <label for="series">series</label>
    <input type="text" id="series" name="series">
    <label for="sale_date">sale_date</label>
    <input type="text" id="sale_date" name="sale_date">
    <label for="type">type</label>
    <input type="text" id="type" name="type">
    <button type="submit">Submit</button>
</form>

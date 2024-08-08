@extends('layout.app')
@section('title', 'Update Book')
@section('content')
<form action="{{ route('category.update', $edit->id) }}" method="post">
    @csrf
    @method('put')
    <div class="form-group">
            <label for="">Category</label>
            <select name="category_id" id="" class="form-control">
                <option value="">-- Select Category --</option>
                <option value=""></option>
            </select>
        </div>
    <div class="form-group">
        <label for="">Title</label>
        <input class="form-control" type="text" name="title" id="">
    </div>
    <div class="form-group">
        <label for="">Stock</label>
        <input class="form-control" type="number" name="stock" id="">
    </div>
    <div class="form-group">
        <label for="">Publisher</label>
        <input class="form-control" type="text" name="publisher" id="">
    </div>
    <div class="form-group">
        <label for="">Year Published</label>
        <input class="form-control" type="number" name="year_published" id="">
    </div>
    <div class="form-group">
        <label for="">Author</label>
        <input class="form-control" type="text" name="author" id="">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success btn-sm mr-2">
            Save
        </button>
        <a href="{{ url()->previous() }}">Back</a>
    </div>
</form>
@endsection

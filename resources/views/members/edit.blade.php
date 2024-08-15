@extends('layout.app')
@section('title', 'Update Book')
@section('content')
<form action="{{ route('category.update', $edit->id) }}" method="post">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="">Category</label>
        <select name="category_id" id="" class="form-control">
            <option value="{{ $edit->category_id }}">{{ $edit->category->category_name }}</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Title</label>
        <input value="{{ $edit->title }}" class="form-control" type="text" name="title" id="">
    </div>
    <div class="form-group">
        <label for="">Stock</label>
        <input value="{{ $edit->stock }}" class="form-control" type="number" name="stock" id="">
    </div>
    <div class="form-group">
        <label for="">Publisher</label>
        <input value="{{ $edit->publisher }}" class="form-control" type="text" name="publisher" id="">
    </div>
    <div class="form-group">
        <label for="">Year Published</label>
        <input value="{{ $edit->year_published }}" class="form-control" type="number" name="year_published" id="">
    </div>
    <div class="form-group">
        <label for="">Author</label>
        <input value="{{ $edit->author }}" class="form-control" type="text" name="author" id="">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success btn-sm mr-2">
            Save
        </button>
        <a href="{{ url()->previous() }}">Back</a>
    </div>
</form>
@endsection

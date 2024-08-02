@extends('layout.app')
@section('title', 'Edit Category')
@section('content')
<form action="{{ route('category.update', $edit->id) }}" method="post">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="">Category Name</label>
        <input class="form-control" type="text" value="{{ $edit->category_name}}" name="category_name" id="">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success btn-sm mr-2">
            Save
        </button>
        <a href="{{ url()->previous() }}">Back</a>
    </div>
</form>
@endsection

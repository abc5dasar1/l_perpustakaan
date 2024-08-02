@extends('layout.app')
@section('title', 'Tambah Category')
@section('content')
    <form action="{{ route('category.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Category Name</label>
            <input class="form-control" type="text" name="category_name" id="">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-sm mr-2">
                Save
            </button>
            <a href="{{ url()->previous() }}">Back</a>
        </div>
    </form>
@endsection

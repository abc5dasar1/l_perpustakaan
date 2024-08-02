@extends('layout.app')
@section('title', 'Tambah User')
@section('content')
    <form action="{{ route('user.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input class="form-control" type="text" name="name" id="">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input class="form-control" type="text" name="email" id="">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input class="form-control" type="text" name="password" id="">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-sm mr-2">
                Save
            </button>
            <a href="{{ url()->previous() }}">Back</a>
        </div>
    </form>
@endsection

@extends('layout.app')
@section('title', 'Edit User')
@section('content')
<form action="{{ route('user.update', $edit->id) }}" method="post">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="">Name</label>
        <input class="form-control" type="text" value="{{ $edit->name}}" name="name" id="">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input class="form-control" type="text" value="{{ $edit->email}}" name="email" id="">
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

@extends('layout.app')
@section('title', 'Data User')
@section('content')
    <div align="end">
        <a class="btn btn-sm btn-success mb-2" href="{{ route('user.create') }}">
            <i class="bi bi-plus"></i>
        </a>
    </div>
    <!-- <a href="">Add</a> -->
    <table class="table table-bordered">
        <thead>
            <tr style="text-align: center;">
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $key => $user )
                <tr>
                    <td style="text-align: center;">{{$key+1}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="{{ route('user.edit', $user->id)}}">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <form action="{{ route('user.destroy', $user->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin Menghapus?')">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

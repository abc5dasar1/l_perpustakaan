@extends('layout.app')
@section('title', 'Borrowing')
@section('content')
    <div class="d-flex justify-content-end">
        <a class="btn btn-sm btn-success mb-2" href="{{ route('borrowing.create') }}">
            <i class="bi bi-plus"></i>
        </a>
    </div>
    <!-- <a href="">Add</a> -->
    <table class="table table-bordered">
        <thead>
            <tr style="text-align: center;">
                <th>No</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $category )
                <tr>
                    <td style="text-align: center;">{{$key+1}}</td>
                    <td>{{$category->category_name}}</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="{{ route('borrowing.edit', $category->id)}}">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <form class="d-inline" action="{{ route('borrowing.destroy', $category->id) }}" method="post">
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

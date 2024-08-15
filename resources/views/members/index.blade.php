@extends('layout.app')
@section('title', 'Data Book')
@section('content')
    <div align="end">
        <a class="btn btn-sm btn-success mb-2" href="{{ route('member.create') }}">
            <i class="bi bi-plus"></i>
        </a>
    </div>
    <!-- <a href="">Add</a> -->
    <table class="table table-bordered">
        <thead>
            <tr style="text-align: center;">
                <th>No</th>
                <th>Category</th>
                <th>Title</th>
                <th>Stock</th>
                <th>Publisher</th>
                <th>Year Published</th>
                <th>Author</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $key => $book )
                <tr>
                    <td style="text-align: center;">{{$key+1}}</td>
                    <td>{{$book->category->category_name}}</td>
                    <td>{{$book->title}}</td>
                    <td>{{$book->stock}}</td>
                    <td>{{$book->publisher}}</td>
                    <td>{{$book->year_published}}</td>
                    <td>{{$book->author}}</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="{{ route('book.edit', $book->id)}}">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <form class="d-inline" action="{{ route('book.destroy', $book->id) }}" method="post">
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

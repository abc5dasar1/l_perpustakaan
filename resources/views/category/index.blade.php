@extends('layout.app')
@section('title', 'Data Category')
@section('content')
    <div align="end">
        <a class="btn btn-sm btn-success mb-2" href="{{ route('category.create') }}">
            <i class="bi bi-plus"></i>
        </a>
    </div>
    <!-- <a href="">Add</a> -->
    <table class="table table-bordered">
        <thead>
            <tr style="text-align: center;">
                <th >No</th>
                <th>Category Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $category )
                <tr>
                    <td style="text-align: center;">{{$key+1}}</td>
                    <td>{{$category->category_name}}</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="{{ route('category.edit', $category->id)}}">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <form class="d-inline" action="{{ route('category.destroy', $category->id) }}" method="post">
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

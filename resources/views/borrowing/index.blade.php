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
                <th>Name Member</th>
                <th>Transaction Code</th>
                <th>Borrowing Date</th>
                <th>Returning Date</th>
                <th>Operator</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($borrow as $key => $brw)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $brw->member->name }}</td>
                    <td>{{ $brw->transaction_code }}</td>
                    <td>{{ date('D, d-m-Y', strtotime($brw->borrowing_date)) }}</td>
                    <td>{{ date('D, d-m-Y', strtotime($brw->returning_date)) }}</td>
                    <td>{{ $brw->operator }}</td>
                    <td>
                        <a class="btn btn-warning btn-sm d-inline" href="">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <form class="d-inline" method="post">
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

@extends('layout.app')
@section('title', 'Borrowing Form')
@section('content')
    <form action="{{ route('borrowing.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col col-sm-6">
                <div class="form-group row">
                    <div class="col col-sm-3">
                        <label for="">Transaction Code</label>
                    </div>
                    <div class="col col-sm-6">
                        <input type="text" name="transaction_code" id="" class="form-control" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col col-sm-3">
                        <label for="">Name Members</label>
                    </div>
                    <div class="col col-sm-6">
                        <select name="" id="" class="form-control">
                            <option value="">-- Select Members --</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col col-sm-3">
                        <label for="">Borrowing Date</label>
                    </div>
                    <div class="col col-sm-6">
                        <input type="date" class="form-control" name="borrowing_date" id="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col col-sm-3">
                        <label for="">Returning Date</label>
                    </div>
                    <div class="col col-sm-6">
                        <input type="date" class="form-control" name="returning_date" id="">
                    </div>
                </div>
            </div>
            <div class="col col-sm-6"></div>
        </div>
        <div class="form-group row mt-5">
            <div class="col col-sm-2">
                <label for="">Book Category</label>
            </div>
            <div class="col col-sm-4">
                <select name="" id="category_id" class="form-control">
                    <option value="">-- Select Category --</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col col-sm-2">
                <label for="">Book Name</label>
            </div>
            <div class="col col-sm-4">
                <select name="" id="book_id" class="form-control">
                    <option value="">-- Select Book --</option>
                    <option value=""></option>
                </select>
                <input type="hidden" name="" id="publisher">
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3 d-flex justify-content-end">
                <button class="btn btn-success btn-sm" type="button" id="add-row">
                    <i class="bi bi-plus"></i>
                </button>
            </div>
            <table class="table table-bordered">
                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Publisher</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-sm mr-2">
                Save
            </button>
            <a href="{{ url()->previous() }}">Back</a>
        </div>
    </form>
@endsection

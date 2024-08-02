@extends('layout.app')
@section('content')
    <form action="{{ route('store_add') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">number 1</label>
            <input type="text" name="number1" id="">
        </div>
        <div class="form-group">
            <label for="">number 2</label>
            <input type="text" name="number2" id="">
        </div>
        <div class="form-group">
        <button type="submit">+</button>
        </div>
        <h3>Hasilnya Adalah : {{ $jumlah }}</h3>
    </form>
@endsection

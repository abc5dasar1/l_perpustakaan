<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Welcome";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Page Create";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "Page Update " . $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function add(){
        $jumlah = 0;
        return view('add', compact('jumlah'));
    }

    public function storeAdd(Request $request){
        $number1 = $request->number1;
        $number2 = $request->number2;
        $jumlah = $number1 + $number2;
        return view('add', compact('jumlah'));
        // return "Jumlahnya adalah $jumlah";
    }

    public function sub(){
        $jumlah = 0;
        return view('sub', compact('jumlah'));
    }

    public function storeSub(Request $request){
        $number1 = $request->number1;
        $number2 = $request->number2;
        $jumlah = $number1 - $number2;
        return view('sub', compact('jumlah'));
        // return "Jumlahnya adalah $jumlah";
    }

    public function mult(){
        $jumlah = 0;
        return view('mult', compact('jumlah'));
    }

    public function storeMult(Request $request){
        $number1 = $request->number1;
        $number2 = $request->number2;
        $jumlah = $number1 * $number2;
        return view('mult', compact('jumlah'));
        // return "Jumlahnya adalah $jumlah";
    }

    public function div(){
        $jumlah = 0;
        return view('div', compact('jumlah'));
    }

    public function storeDiv(Request $request){
        $number1 = $request->number1;
        $number2 = $request->number2;
        $jumlah = $number1 / $number2;
        return view('div', compact('jumlah'));
        // return "Jumlahnya adalah $jumlah";
    }
}

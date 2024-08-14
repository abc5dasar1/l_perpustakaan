<?php

namespace App\Http\Controllers;

use App\Models\Borrowing;
use App\Models\Category;
use Illuminate\Http\Request;

class BorrowingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Category::get();
        return view('borrowing.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('borrowing.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $borrowing = new Borrowing;
        $borrowing->borrowing_name = $request->borrowing_name;
        $borrowing->save();

        return redirect()->to('borrowing')->with('message', 'Success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Borrowing $borrowing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = Borrowing::find($id);
        return view('borrowing.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Borrowing::where('id', $id)->update([
           'borrowing_name' => $request->borrowing_name
        ]);
        // $user = User::find($id);
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = $request->password;
        // $user->save();

        return redirect()->to('borrowing')->with('message', 'Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Borrowing::find($id)->delete();
        return redirect()->to('borrowing')->with('message', 'Berhasil');
    }
}

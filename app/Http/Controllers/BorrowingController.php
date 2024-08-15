<?php

namespace App\Http\Controllers;

use App\Models\Borrowing;
use App\Models\BorrowingDetail;
use App\Models\Category;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
class BorrowingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $borrow = Borrowing::with('member')->get();
        return view('borrowing.index', compact('borrow'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        $members = Member::get();
        $unique_code = Borrowing::get()->last();
        $borrow_id = isset($unique_code->id) ? ($unique_code->id == "" ? 1 : $unique_code->id) : '';
        $borrow_id++;
        $transaction_code = 'BRW' . date("dmY") . sprintf("%03s", $borrow_id);
        return view('borrowing.create', compact('categories', 'members', 'transaction_code'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $borrow = Borrowing::create([
            'member_id' => $request->member_id,
            'transaction_code' => $request->transaction_code,
            'borrowing_date' => $request->borrowing_date,
            'returning_date' => $request->returning_date,
            'operator' => (Auth::user()->name ?? 'Fadiyah'),
        ]);

        if ($borrow) {
            foreach ($request->book_id as $key => $value) {
                BorrowingDetail::create([
                    'book_id' => $value,
                    'borrowing_id' => $borrow->id,
                ]);
            }
        }
        Alert::success('Oke', 'Borrow Succeed');
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

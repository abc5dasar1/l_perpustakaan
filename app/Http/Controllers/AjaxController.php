<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getBookData($category_id){
        try{
            $books = Book::where('category_id', $category_id)->get();
            return response()->json(['data' => $books, 'message' => 'Fetch Succeed!!']);
        }catch (\Throwable $th){
            return response()->json(['error' => $th->getMessage()]);
        }
    }
    public function getBook($book_id){
        try{
            $book = Book::where('id', $book_id)->first();
            // $book = Book::find($buku_id);
            // $book = Book::firstOrFail($buku_id);
            return response()->json(['data' => $book, 'message' => 'Fetch Succeed!!']);
        }catch(\Throwable $th){
            return response()->json(['error' => $th->getMessage()]);
        }
    }
}

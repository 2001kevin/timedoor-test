<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rating;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
    public function indexAuthor(){
        $topAuthors = DB::table('ratings')
                        ->select('authors.name', DB::raw('COUNT(*) as total'))
                        ->join('books', 'ratings.book_id', '=', 'books.id')
                        ->join('authors', 'books.author_id', '=', 'authors.id')
                        ->groupBy('authors.id', 'authors.name')
                        ->orderByDesc('total') // change the number as needed
                        ->get();
        return view('indexAuthor', compact('topAuthors'));
        
    }
}

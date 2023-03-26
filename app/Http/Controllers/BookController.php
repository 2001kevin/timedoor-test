<?php

namespace App\Http\Controllers;

use App\Models\author;
use App\Models\book;
use App\Models\rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index(){
        $books = book::all();

        return view('indexBook', compact('books'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(){
        $data1 = new Author();
        $authors = $data1->getAuthors();
        
        return view('authors', ['authors' => $authors]);
    }
}

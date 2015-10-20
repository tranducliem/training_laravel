<?php

namespace App\Http\Controllers;

use App\Articles;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function index(){
        $articles = Articles::all();
        return view('articles')->with('articles', $articles);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $data = $request->all();
        return $data;
    }
}

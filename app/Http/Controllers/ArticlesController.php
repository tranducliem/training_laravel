<?php

namespace App\Http\Controllers;

use App\Articles;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CheckArticlesRequest;

class ArticlesController extends Controller
{
    public function index(){
        //$articles = Articles::all();
        $articles = Articles::latest('created_at')
            ->where('created_at', '<=', Carbon::now())
            ->get();
        return view('articles')->with('articles', $articles);
    }

    public function create(){
        return view('create');
    }

    public function store(CheckArticlesRequest $request){
        $data = $request->all();
        /*$art = new Articles();
        $art->title = $data['title'];
        $art->content = $data['content'];
        $art->author = $data['author'];
        $art->category_id = $data['category_id'];
        $art->save();*/
        Articles::create($data);
        return redirect('articles');
    }

    public function edit($id){
        $article = Articles::findOrFail($id);
        return view('edit', compact('article'));
    }

    public function update($id, Request $request){
        $article = Articles::findOrFail($id);
        $article->update($request->all());
        return redirect('articles');
    }
}

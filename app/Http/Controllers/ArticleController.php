<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('articles.index', ['articles' => $articles]);
    }

    public function show($id)
    {
        $article = Article::find($id);

        return view('articles.show', ['article' => $article]);
    }

    public function store(Request $request)
    {
        $article = new Article;

        $article->name = $request->name;
        $article->body = $request->body;

        $article->save();

        return redirect('ariticles');
    }

    public function create()
    {
        return view('article.create');
    }
}

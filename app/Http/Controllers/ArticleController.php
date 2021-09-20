<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('article.index', ['articles' => $articles]);
    }

    public function show($id)
    {
        $article = Article::find($id);

        return view('article.show', ['article' => $article]);
    }
}

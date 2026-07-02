<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();

        return view('articles.index', ['articles' => $articles]);
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        return view('articles.show', ['article' => $article]);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::where('status', 'publish')->orderBy('updated_at', 'desc')->paginate(20);
        return view('article.index', ['articles' => $articles]);
    }

    public function detail(Article $article)
    {
        $anotherArticles = Article::where('status', 'publish')->inRandomOrder()->limit(5)->get();
        return view('article.detail', [
            'article' => $article,
            'anotherArticles' => $anotherArticles,
        ]);
    }
}

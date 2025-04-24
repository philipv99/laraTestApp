<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use SebastianBergmann\Type\NullType;

class ArticleController extends Controller
{
    public function index()
    {
        return view('articles', ['articles' => Article::all()]);
    }

    public function addArticle()
    {
        return view('addArticle');
    }


    public function createArticle(StoreArticleRequest $request)
    {
        Article::Create($request->validated());

        return redirect('articles');
    }

    public function editArticle($id)
    {
        $article = Article::findOrFail($id);
        return view('addArticle', compact('article'));
    }

    public function updateArticle(StoreArticleRequest $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->only('header', 'author', 'body'));
        return redirect('articles');
    }
}

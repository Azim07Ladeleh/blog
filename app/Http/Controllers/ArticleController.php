<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticlesRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function store(Article $article, ArticlesRequest $request)
    {
        Article::create([
            'titre' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->back()->with('success', 'L\'article à été bel et bien ajouté');

        // $verify = $request;
        // if ($verify) {
        //     echo 'Ces bien';
        // }else{
        //     echo 'Ces mort';
        // }
    }

    public function index()
    {
        $articles = Article::all();
        return view('voir', [
            'articles' => $articles
        ]);
    }
    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show', [
            'article' => $article
        ]);
    }

    public function update(Article $article)
    {
        return view('articles.editer', [
            'article' => $article
        ]);
    }

    public function edit(Article $article, ArticlesRequest $request)
    {
        $article->titre = $request->title;
        $article->description = $request->description;

        $article->save();

        return redirect('/test')->with('success', 'L\'article a été mis à jour');
    }

    public function delete(Article $article)
    {
        $article->delete();
        return redirect('/test')->with('success', 'L\'article  a été supprimer avec succes!');
    }
}

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
            'titre' => $request->title
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
    
}

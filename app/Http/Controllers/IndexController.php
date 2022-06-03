<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function Index() {
        $articles = Article::all();
        return view('home', compact('articles'));
    }

    function Rubric($id) {
        $articles = Article::where('rubricId', $id)->get();
        return view('home', compact('articles'));
    }

    function Article($id) {
        $article = Article::findOrFail($id);
//        dd($article->rubric);
        return view('article', compact('article'));
    }
}

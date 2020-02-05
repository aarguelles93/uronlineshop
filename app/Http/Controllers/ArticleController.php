<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::orderBy('created_at','DESC')->get();

        //dd($articles);

        return view('welcome', compact('articles'));
    }
}

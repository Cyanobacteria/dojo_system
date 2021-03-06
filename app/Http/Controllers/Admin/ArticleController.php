<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Article;

class ArticleController extends Controller
{
    //
    public function index()
    {
        return view('admin/article/index')->withArticles(article::all());
    }
}

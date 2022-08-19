<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Article;
use App\Category;

class PageController extends Controller
{
    public function index(){
        $articles = Article::with('category')->paginate(8);

        return response()->json($articles);
    }
}

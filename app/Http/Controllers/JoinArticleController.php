<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class JoinArticleController extends Controller
{
    function show2(){
        $data = Article::join('tags', 'tags.article_id', '=', 'article.article')
        ->get(['article.title','tag.tag_id']);


   }
}

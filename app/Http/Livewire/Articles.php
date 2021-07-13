<?php

namespace App\Http\Livewire;
use App\Models\Article;
use App\Models\Tag;

use Livewire\Component;

class Articles extends Component
{
    
    public function render()
    {
        
        $articles = Article::all();
        return view('livewire.articles',compact('articles'));
    }
}

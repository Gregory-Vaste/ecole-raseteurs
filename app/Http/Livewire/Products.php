<?php

namespace App\Http\Livewire;
Use App\Models\Product;

use Livewire\Component;

class Products extends Component
{
    public function render()
    {
        $products = Product::all();
        return view('livewire.products',compact('products','tag'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;
use App\Product;

class ProductController extends Controller
{
     public function index(Request $request)
    {
        $posts = Product::all()->sortByDesc('update_at');
        
        if(count($posts) > 0) {
            $headline = $posts->shift();
        } else {
            $headline = null;
        }
        
        return view('product.index', ['headline' => $headline, 'posts' => $posts]);
    }
}

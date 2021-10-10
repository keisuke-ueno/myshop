<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class UenocoffeeController extends Controller
{
    public function base()
        {
            return view('uenocoffee.base');
        }
    public function store()
       {
           return redirect('');
       }
       
    public function product()
    {
        $posts = Product::all()->sortByDesc('update_at');
        
        if(count($posts) > 0) {
            $headline = $posts->shift();
        } else {
            $headline = null;
        }
        return view('uenocoffee.product', ['headline' => $headline, 'posts' => $posts]);
    }
}

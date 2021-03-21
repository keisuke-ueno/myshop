<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Product;
use Storage;

class ProductController extends Controller
{
    public function add()
    {
        return view('admin.product');
        }
        
    public function create(Request $request)
    {
         $this->validate($request, Product::$rules);
         
         $product = new Product;
         $form = $request->all();
         
        if (isset($form['image'])){
         $path = Storage::disk('s3')->putFile('/',$form['image'],'public');
         $product->photo = Storage::disk('s3')->url($path);
      } else {
         $product->photo = null;
      }
        unset($form['_token']);
        unset($form['image']);
      
         $product->fill($form);
         $product->save();

        return redirect('admin/product'); 
    }
    
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
            if ($cond_title != '') {
              
              $posts = Product::where('name', $cond_title)->get();
        }
            else{
              
              $posts =Product::all();
          }
          return view('admin.product.index', ['posts' => $posts,'cond_title' => $cond_title]);
     }

}
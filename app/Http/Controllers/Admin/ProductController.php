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
     
    public function edit(Request $request)
     {
         $product = Product::find($request->id);
         if (empty($product)) {
             abort(404);
         }
         return view('admin.product.edit', ['product_form' => $product]);
     }
    
     public function update(Request $request)
     {
         $this->validate($request, Product::$rules);
         $product = Product::find($request->id);
         $product_form = $request->all();
         
         if ($request->remove == 'true') {
             $product_form['photo'] = null;
             
         } 
         elseif ($request->file('image')) {
             $path = Storage::disk('s3')->putFile('/', $product_form['image'],'public');
             $product_form['photo'] = Storage::disk('s3')->url($path);
             
         } 
         else {
             $product_form['photo'] = $product->photo;
         }
         
         unset($product_form['image']);
         unset($product_form['remove']);
         unset($product_form['_token']);
         
        //  $history = new History;
        //  $history->news_id = $news->id;
        //  $history->edited_at = Carbon::now();
        //  $history->save();
         
         $product_form->fill($product_form)->save();
         return redirect('admin/itiran');
     }
     public function delete(Request $request)
     {
         $product = Product::find($request->id);
         $product->delete();
         return redirect('admin/itiran/');
     }

}
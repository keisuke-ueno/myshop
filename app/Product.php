<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = array('id');
    
    //
    public static $rules = array(
        'name' => 'required',
        //'photo' => 'required',
        'price' => 'required',
        'introduction' => 'required',
        );
}

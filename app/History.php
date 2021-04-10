<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'product_id' => 'required',
        'edited_at' => 'required',
    );
}

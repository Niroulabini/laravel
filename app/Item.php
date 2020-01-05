<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function categoryname()
    {
        return $this->belongsTo('App\Category','category_id','id');
    }
}

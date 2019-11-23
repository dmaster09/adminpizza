<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $table = 'products';


public function categoria()
{
    return $this->belongsTo(Category::class,'category_id');
}

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'name',
        'category_id',
        'price',
        'updated_at'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}

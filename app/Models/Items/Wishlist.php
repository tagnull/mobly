<?php

namespace App\Models\Items;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use SoftDeletes;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id'
    ];
}

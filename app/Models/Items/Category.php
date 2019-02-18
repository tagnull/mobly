<?php

namespace App\Models\Items;

use App\Traits\UuidModel;
use App\Models\Items\Product;
use App\Models\Items\Category;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use UuidModel;
    
    public function children(){
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }
    
    public function parent(){
        return $this->hasOne(Category::class, 'id', 'parent_id');
    }
    
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}

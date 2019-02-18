<?php

namespace App\Models\Items;

use App\Traits\UuidModel;
use App\Models\Items\Image;
use App\Models\Items\Feature;
use App\Models\Items\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use UuidModel;
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at', 'deleted_at'
    ];
    
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    
    public function categoriesSearch($slug)
    {
        return $this->belongsToMany(Category::class)->where('slug', $slug);
    }
    
    public function images()
    {
        return $this->hasMany(Image::class);
    }
    
    public function features()
    {
        return $this->hasMany(Feature::class);
    }
}

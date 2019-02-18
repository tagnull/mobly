<?php

namespace App\Models\Items;

use App\Traits\UuidModel;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use UuidModel;
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id', 'uuid', 'product_id', 'created_at', 'status', 'updated_at', 'deleted_at'
    ];
}

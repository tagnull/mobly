<?php

namespace App\Models\Items;

use App\Models\Items\Order;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id', 'sku', 'barcode', 'name', 'quantity', 'url', 'single_price', 'total_price'
    ];
    
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    
}

<?php

namespace App\Models\Items;

use App\Models\User;
use App\Traits\UuidModel;
use App\Models\Items\OrderItem;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use UuidModel;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'name', 'email', 'document', 'status', 'payment_method', 'total', 'address', 'mobile', 'phone', 'info'
    ];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'address' => 'json',
    ];
    
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

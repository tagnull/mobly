<?php

namespace App\Models;

use App\Traits\UuidModel;
use App\Models\Items\Wishlist;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, UuidModel;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id', 'password', 'remember_token', 'permissions', 'deleted_at'
    ];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'meta' => 'array',
    ];
    
    public function wishlist()
    {
        return $this->hasMany(Wishlist::class);
    }
}

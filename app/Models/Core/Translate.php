<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Model;

class Translate extends Model
{
    /**
     * The database table primary key.
     *
     * @var string
     */
    protected $primaryKey = 'string';
    
    /**
     * The database table timestamps.
     *
     * @var boolean
     */
    public $timestamps = false;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // Identification
        'string',
        
        // Languages
        'en_GB', 'en_US', 'pt_BR',
    ];
}
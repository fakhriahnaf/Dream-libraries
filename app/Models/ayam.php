<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ayam
 * @package App\Models
 * @version March 19, 2018, 2:14 pm UTC
 *
 * @property number no_hp
 */
class ayam extends Model
{
    use SoftDeletes;

    public $table = 'ayams';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'no_hp'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'no_hp' => 'required'
    ];

    
}

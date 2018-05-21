<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class cantik
 * @package App\Models
 * @version March 19, 2018, 2:14 pm UTC
 *
 * @property unsigned no_hp
 */
class cantik extends Model
{
    use SoftDeletes;

    public $table = 'cantiks';
    

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

<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class nanuna
 * @package App\Models
 * @version March 19, 2018, 2:11 pm UTC
 *
 * @property string nama
 * @property string no_hp
 */
class nanuna extends Model
{
    use SoftDeletes;

    public $table = 'nanunas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nama',
        'no_hp'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nama' => 'string',
        'no_hp' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required',
        'no_hp' => 'required'
    ];

    
}
<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Film
 * @package App\Models
 * @version March 19, 2018, 1:32 pm UTC
 *
 * @property string Judul_Film
 * @property string Tanggal_rilis
 */
class Film extends Model
{
    use SoftDeletes;

    public $table = 'films';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Judul_Film',
        'Tanggal_rilis'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Judul_Film' => 'string',
        'Tanggal_rilis' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Judul_Film' => 'required',
        'Tanggal_rilis' => 'required'
    ];

    
}

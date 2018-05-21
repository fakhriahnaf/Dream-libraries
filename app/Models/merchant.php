<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class merchant
 * @package App\Models
 * @version March 19, 2018, 2:08 pm UTC
 *
 * @property string Nama_toko
 * @property string No_handphone
 * @property string tanggal_gabung
 */
class merchant extends Model
{
    use SoftDeletes;

    public $table = 'merchants';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Nama_toko',
        'No_handphone',
        'tanggal_gabung'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Nama_toko' => 'string',
        'No_handphone' => 'string',
        'tanggal_gabung' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Nama_toko' => 'required',
        'No_handphone' => 'required',
        'tanggal_gabung' => 'required'
    ];

    
}

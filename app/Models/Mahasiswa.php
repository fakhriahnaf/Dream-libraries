<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class mahasiswa
 * @package App\Models
 * @version March 18, 2018, 9:58 am UTC
 *
 * @property string Nama
 * @property string NIM
 * @property string Alamat
 */
class mahasiswa extends Model
{
    use SoftDeletes;

    public $table = 'mahasiswas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Nama',
        'NIM',
        'Alamat'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Nama' => 'string',
        'NIM' => 'string',
        'Alamat' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Nama' => 'required',
        'NIM' => 'required',
        'Alamat' => 'required'
    ];

    
}

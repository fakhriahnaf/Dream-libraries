<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class mahasiswa
 * @package App\Models
 * @version May 27, 2018, 3:13 am UTC
 *
 * @property string Nim
 * @property string Nama
 * @property string Departemen
 * @property string No_handphone
 */
class mahasiswa extends Model
{
    use SoftDeletes;

    public $table = 'mahasiswas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Nim',
        'Nama',
        'Departemen',
        'No_handphone'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Nim' => 'string',
        'Nama' => 'string',
        'Departemen' => 'string',
        'No_handphone' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Nim' => 'required',
        'Nama' => 'required',
        'Departemen' => 'required',
        'No_handphone' => 'required'
    ];

    
}

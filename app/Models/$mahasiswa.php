<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class $mahasiswa
 * @package App\Models
 * @version May 27, 2018, 3:11 am UTC
 *
 * @property string Nama
 * @property string Nim
 * @property string No_Handphone
 * @property string Alamat
 * @property string Departemen
 */
class $mahasiswa extends Model
{
    use SoftDeletes;

    public $table = '$mahasiswas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Nama',
        'Nim',
        'No_Handphone',
        'Alamat',
        'Departemen'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Nama' => 'string',
        'Nim' => 'string',
        'No_Handphone' => 'string',
        'Alamat' => 'string',
        'Departemen' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Nama' => 'required',
        'Nim' => 'required',
        'No_Handphone' => 'required',
        'Alamat' => 'required',
        'Departemen' => 'required'
    ];

    
}

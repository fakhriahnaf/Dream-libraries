<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Buku
 * @package App\Models
 * @version May 27, 2018, 3:17 am UTC
 *
 * @property string Judul_Buku
 * @property string Seri_buku
 * @property string Nama_pengarang
 * @property string Tanggal_terbit
 */
class Buku extends Model
{
    use SoftDeletes;

    public $table = 'bukus';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Judul_Buku',
        'Seri_buku',
        'Nama_pengarang',
        'Tanggal_terbit'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Judul_Buku' => 'string',
        'Seri_buku' => 'string',
        'Nama_pengarang' => 'string',
        'Tanggal_terbit' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Judul_Buku' => 'required',
        'Seri_buku' => 'required',
        'Nama_pengarang' => 'required',
        'Tanggal_terbit' => 'required'
    ];

    
}

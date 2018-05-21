<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class visitors
 * @package App\Models
 * @version March 19, 2018, 1:22 pm UTC
 *
 * @property string Nama_Mahasiswa
 * @property string NIM
 * @property string Buku_yang_dipinjam
 * @property date tanggal_pinjam
 * @property string keterangan
 */
class visitors extends Model
{
    use SoftDeletes;

    public $table = 'visitors';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Nama_Mahasiswa',
        'NIM',
        'Buku_yang_dipinjam',
        'tanggal_pinjam',
        'keterangan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Nama_Mahasiswa' => 'string',
        'NIM' => 'string',
        'Buku_yang_dipinjam' => 'string',
        'tanggal_pinjam' => 'date',
        'keterangan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Nama_Mahasiswa' => 'required',
        'NIM' => 'required',
        'Buku_yang_dipinjam' => 'required',
        'tanggal_pinjam' => 'required'
    ];

    
}

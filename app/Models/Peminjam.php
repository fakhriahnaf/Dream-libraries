<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Peminjam
 * @package App\Models
 * @version May 27, 2018, 3:19 am UTC
 *
 * @property string Nama_peminjam
 * @property string Nim
 * @property string Judul_buku
 * @property string Pengarang
 * @property string Tanggal_pinjam
 */
class Peminjam extends Model
{
    use SoftDeletes;

    public $table = 'peminjams';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Nama_peminjam',
        'Nim',
        'Judul_buku',
        'Pengarang',
        'Tanggal_pinjam'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Nama_peminjam' => 'string',
        'Nim' => 'string',
        'Judul_buku' => 'string',
        'Pengarang' => 'string',
        'Tanggal_pinjam' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Nama_peminjam' => 'required',
        'Nim' => 'required',
        'Judul_buku' => 'required',
        'Pengarang' => 'required',
        'Tanggal_pinjam' => 'required'
    ];

    
}

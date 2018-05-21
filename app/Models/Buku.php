<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Buku
 * @package App\Models
 * @version March 18, 2018, 9:49 am UTC
 */
class Buku extends Model
{
    use SoftDeletes;

    public $table = 'bukus';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Judul',
        'Pengarang',
        'seri',
        'keterangan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Judul' => 'string',
        'Pengarang' => 'string',
        'seri' => 'string',
        'keterangan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Judul' => 'required',
        'Pengarang' => 'required',
        'keterangan' => 'required'
    ];

    
}

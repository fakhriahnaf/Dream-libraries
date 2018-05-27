<?php

namespace App\Repositories;

use App\Models\Buku;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BukuRepository
 * @package App\Repositories
 * @version May 27, 2018, 3:17 am UTC
 *
 * @method Buku findWithoutFail($id, $columns = ['*'])
 * @method Buku find($id, $columns = ['*'])
 * @method Buku first($columns = ['*'])
*/
class BukuRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Judul_Buku',
        'Seri_buku',
        'Nama_pengarang',
        'Tanggal_terbit'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Buku::class;
    }
}

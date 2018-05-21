<?php

namespace App\Repositories;

use App\Models\visitors;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class visitorsRepository
 * @package App\Repositories
 * @version March 19, 2018, 1:22 pm UTC
 *
 * @method visitors findWithoutFail($id, $columns = ['*'])
 * @method visitors find($id, $columns = ['*'])
 * @method visitors first($columns = ['*'])
*/
class visitorsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Nama_Mahasiswa',
        'NIM',
        'Buku_yang_dipinjam',
        'tanggal_pinjam',
        'keterangan'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return visitors::class;
    }
}

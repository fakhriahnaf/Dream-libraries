<?php

namespace App\Repositories;

use App\Models\mahasiswa;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class mahasiswaRepository
 * @package App\Repositories
 * @version March 18, 2018, 9:58 am UTC
 *
 * @method mahasiswa findWithoutFail($id, $columns = ['*'])
 * @method mahasiswa find($id, $columns = ['*'])
 * @method mahasiswa first($columns = ['*'])
*/
class mahasiswaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Nama',
        'NIM',
        'Alamat'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return mahasiswa::class;
    }
}

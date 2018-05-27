<?php

namespace App\Repositories;

use App\Models\$mahasiswa;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class $mahasiswaRepository
 * @package App\Repositories
 * @version May 27, 2018, 3:11 am UTC
 *
 * @method $mahasiswa findWithoutFail($id, $columns = ['*'])
 * @method $mahasiswa find($id, $columns = ['*'])
 * @method $mahasiswa first($columns = ['*'])
*/
class $mahasiswaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Nama',
        'Nim',
        'No_Handphone',
        'Alamat',
        'Departemen'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return $mahasiswa::class;
    }
}

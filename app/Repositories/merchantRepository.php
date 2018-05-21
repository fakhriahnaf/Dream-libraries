<?php

namespace App\Repositories;

use App\Models\merchant;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class merchantRepository
 * @package App\Repositories
 * @version March 19, 2018, 2:08 pm UTC
 *
 * @method merchant findWithoutFail($id, $columns = ['*'])
 * @method merchant find($id, $columns = ['*'])
 * @method merchant first($columns = ['*'])
*/
class merchantRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Nama_toko',
        'No_handphone',
        'tanggal_gabung'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return merchant::class;
    }
}

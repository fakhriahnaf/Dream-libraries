<?php

namespace App\Repositories;

use App\Models\nanuna;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class nanunaRepository
 * @package App\Repositories
 * @version March 19, 2018, 2:11 pm UTC
 *
 * @method nanuna findWithoutFail($id, $columns = ['*'])
 * @method nanuna find($id, $columns = ['*'])
 * @method nanuna first($columns = ['*'])
*/
class nanunaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'no_hp'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return nanuna::class;
    }
}

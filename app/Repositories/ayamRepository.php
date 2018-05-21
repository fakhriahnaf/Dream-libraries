<?php

namespace App\Repositories;

use App\Models\ayam;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ayamRepository
 * @package App\Repositories
 * @version March 19, 2018, 2:14 pm UTC
 *
 * @method ayam findWithoutFail($id, $columns = ['*'])
 * @method ayam find($id, $columns = ['*'])
 * @method ayam first($columns = ['*'])
*/
class ayamRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'no_hp'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ayam::class;
    }
}

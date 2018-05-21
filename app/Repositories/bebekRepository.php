<?php

namespace App\Repositories;

use App\Models\bebek;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class bebekRepository
 * @package App\Repositories
 * @version March 19, 2018, 2:35 pm UTC
 *
 * @method bebek findWithoutFail($id, $columns = ['*'])
 * @method bebek find($id, $columns = ['*'])
 * @method bebek first($columns = ['*'])
*/
class bebekRepository extends BaseRepository
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
        return bebek::class;
    }
}

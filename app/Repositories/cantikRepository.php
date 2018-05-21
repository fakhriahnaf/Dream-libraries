<?php

namespace App\Repositories;

use App\Models\cantik;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class cantikRepository
 * @package App\Repositories
 * @version March 19, 2018, 2:14 pm UTC
 *
 * @method cantik findWithoutFail($id, $columns = ['*'])
 * @method cantik find($id, $columns = ['*'])
 * @method cantik first($columns = ['*'])
*/
class cantikRepository extends BaseRepository
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
        return cantik::class;
    }
}

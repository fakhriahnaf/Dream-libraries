<?php

namespace App\Repositories;

use App\Models\Film;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class FilmRepository
 * @package App\Repositories
 * @version March 19, 2018, 1:32 pm UTC
 *
 * @method Film findWithoutFail($id, $columns = ['*'])
 * @method Film find($id, $columns = ['*'])
 * @method Film first($columns = ['*'])
*/
class FilmRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Judul_Film',
        'Tanggal_rilis'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Film::class;
    }
}

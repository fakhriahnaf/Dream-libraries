<?php

namespace App\Repositories;

use App\Models\Peminjam;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PeminjamRepository
 * @package App\Repositories
 * @version May 27, 2018, 3:19 am UTC
 *
 * @method Peminjam findWithoutFail($id, $columns = ['*'])
 * @method Peminjam find($id, $columns = ['*'])
 * @method Peminjam first($columns = ['*'])
*/
class PeminjamRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Nama_peminjam',
        'Nim',
        'Judul_buku',
        'Pengarang',
        'Tanggal_pinjam'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Peminjam::class;
    }
}

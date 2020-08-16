<?php

namespace App\Repositories;

use App\Models\UsuariosPerfiles;
use App\Repositories\BaseRepository;

/**
 * Class UsuariosPerfilesRepository
 * @package App\Repositories
 * @version August 15, 2020, 12:41 pm UTC
*/

class UsuariosPerfilesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'USU_ID',
        'PRF_ID',
        'UPF_ESTADO'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return UsuariosPerfiles::class;
    }
}

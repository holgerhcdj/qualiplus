<?php

namespace App\Repositories;

use App\Models\Perfiles;
use App\Repositories\BaseRepository;

/**
 * Class PerfilesRepository
 * @package App\Repositories
 * @version August 10, 2020, 6:11 pm UTC
*/

class PerfilesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'PRF_DESCRIPCION',
        'PRF_CODIGO',
        'PRF_OBS'
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
        return Perfiles::class;
    }
}

<?php

namespace App\Repositories;

use App\Models\Comunicaciones;
use App\Repositories\BaseRepository;

/**
 * Class ComunicacionesRepository
 * @package App\Repositories
 * @version August 14, 2020, 12:12 am UTC
*/

class ComunicacionesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'CON_ID',
        'COM_FECHA',
        'COM_HORA',
        'COM_MOTIVO',
        'COM_OBS'
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
        return Comunicaciones::class;
    }
}

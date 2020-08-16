<?php

namespace App\Repositories;

use App\Models\Instituciones;
use App\Repositories\BaseRepository;

/**
 * Class InstitucionesRepository
 * @package App\Repositories
 * @version August 10, 2020, 11:43 pm UTC
*/

class InstitucionesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'USU_ID',
        'INS_DESCRIPCION',
        'INS_PAIS',
        'INS_PROVINCIA',
        'INS_CANTON',
        'INS_PARROQUIA',
        'INS_DISTRITO',
        'INS_ZONA',
        'INS_COD_CIRTCUITO',
        'INS_REGIMEN',
        'INS_DIRECCION',
        'INS_TELEFONO',
        'INS_EMAIL',
        'INS_TIPO',
        'INS_OFERTA',
        'INS_NEST_INICIAL',
        'INS_NEST_BASICA',
        'INS_NEST_BACHILLERATO',
        'INS_PROFS_INICIAL',
        'INS_PROFS_BASICA',
        'INS_PROFS_BACHILLERATO',
        'INS_ESTADO'
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
        return Instituciones::class;
    }
}

<?php

namespace App\Repositories;

use App\Models\Contactos;
use App\Repositories\BaseRepository;

/**
 * Class ContactosRepository
 * @package App\Repositories
 * @version August 13, 2020, 8:58 pm UTC
*/

class ContactosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'INS_ID',
        'CON_NOMBRES',
        'CON_CARGO',
        'CON_TELEFONO',
        'CON_EMAIL',
        'CON_OBS',
        'CON_PRINCIPAL',
        'CON_ESTADO'
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
        return Contactos::class;
    }
}

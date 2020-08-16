<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Instituciones
 * @package App\Models
 * @version August 10, 2020, 11:43 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $insContacts
 * @property string $INS_DESCRIPCION
 * @property string $INS_PAIS
 * @property string $INS_PROVINCIA
 * @property string $INS_CANTON
 * @property string $INS_PARROQUIA
 * @property string $INS_DISTRITO
 * @property string $INS_ZONA
 * @property string $INS_COD_CIRTCUITO
 * @property integer $INS_REGIMEN
 * @property string $INS_DIRECCION
 * @property string $INS_TELEFONO
 * @property string $INS_EMAIL
 * @property integer $INS_TIPO
 * @property integer $INS_OFERTA
 * @property integer $INS_NEST_INICIAL
 * @property integer $INS_NEST_BASICA
 * @property integer $INS_NEST_BACHILLERATO
 * @property integer $INS_PROFS_INICIAL
 * @property integer $INS_PROFS_BASICA
 * @property integer $INS_PROFS_BACHILLERATO
 * @property integer $INS_ESTADO
 */
class Instituciones extends Model
{

    public $table = 'institutes';
    protected $primaryKey = 'INS_ID';
    public $timestamps=false;    

    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'INS_ID' => 'integer',
        'USU_ID' => 'integer',
        'INS_DESCRIPCION' => 'string',
        'INS_PAIS' => 'string',
        'INS_PROVINCIA' => 'string',
        'INS_CANTON' => 'string',
        'INS_PARROQUIA' => 'string',
        'INS_DISTRITO' => 'string',
        'INS_ZONA' => 'string',
        'INS_COD_CIRTCUITO' => 'string',
        'INS_REGIMEN' => 'integer',
        'INS_DIRECCION' => 'string',
        'INS_TELEFONO' => 'string',
        'INS_EMAIL' => 'string',
        'INS_TIPO' => 'integer',
        'INS_OFERTA' => 'string',
        'INS_NEST_INICIAL' => 'integer',
        'INS_NEST_BASICA' => 'integer',
        'INS_NEST_BACHILLERATO' => 'integer',
        'INS_PROFS_INICIAL' => 'integer',
        'INS_PROFS_BASICA' => 'integer',
        'INS_PROFS_BACHILLERATO' => 'integer',
        'INS_ESTADO' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'INS_DESCRIPCION' => 'nullable|string|max:100',
        'INS_PAIS' => 'nullable|string|max:50',
        'INS_PROVINCIA' => 'nullable|string|max:50',
        'INS_CANTON' => 'nullable|string|max:50',
        'INS_PARROQUIA' => 'nullable|string|max:50',
        'INS_DISTRITO' => 'nullable|string|max:50',
        'INS_ZONA' => 'nullable|string|max:50',
        'INS_COD_CIRTCUITO' => 'nullable|string|max:50',
        'INS_REGIMEN' => 'nullable|integer',
        'INS_DIRECCION' => 'nullable|string|max:250',
        'INS_TELEFONO' => 'nullable|string|max:250',
        'INS_EMAIL' => 'nullable|string|max:250',
        'INS_TIPO' => 'nullable|integer',
        'INS_OFERTA' => 'nullable|string',
        'INS_NEST_INICIAL' => 'nullable',
        'INS_NEST_BASICA' => 'nullable',
        'INS_NEST_BACHILLERATO' => 'nullable',
        'INS_PROFS_INICIAL' => 'nullable',
        'INS_PROFS_BASICA' => 'nullable',
        'INS_PROFS_BACHILLERATO' => 'nullable',
        'INS_ESTADO' => 'nullable|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function insContacts()
    {
        return $this->hasMany(\App\Models\InsContact::class, 'INS_ID');
    }
}

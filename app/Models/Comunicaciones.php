<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Comunicaciones
 * @package App\Models
 * @version August 14, 2020, 12:12 am UTC
 *
 * @property \App\Models\InsContact $con
 * @property integer $CON_ID
 * @property string $COM_FECHA
 * @property time $COM_HORA
 * @property string $COM_MOTIVO
 * @property string $COM_OBS
 */
class Comunicaciones extends Model
{

    public $table = 'comunicatios';
    protected $primaryKey = 'COM_ID';
    public $timestamps=false;    

    public $fillable = [
        'CON_ID',
        'COM_FECHA',
        'COM_HORA',
        'COM_MOTIVO',
        'COM_OBS'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'COM_ID' => 'integer',
        'CON_ID' => 'integer',
        'COM_FECHA' => 'date',
        'COM_MOTIVO' => 'string',
        'COM_OBS' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'CON_ID' => 'nullable',
        'COM_FECHA' => 'nullable',
        'COM_HORA' => 'nullable',
        'COM_MOTIVO' => 'nullable|string|max:255',
        'COM_OBS' => 'nullable|string|max:255'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function con()
    {
        return $this->belongsTo(\App\Models\InsContact::class, 'CON_ID');
    }
}

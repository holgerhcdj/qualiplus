<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contactos
 * @package App\Models
 * @version August 13, 2020, 8:58 pm UTC
 *
 * @property \App\Models\Institute $ins
 * @property \Illuminate\Database\Eloquent\Collection $comunicatios
 * @property \Illuminate\Database\Eloquent\Collection $courseIncriptions
 * @property integer $INS_ID
 * @property string $CON_NOMBRES
 * @property string $CON_CARGO
 * @property string $CON_TELEFONO
 * @property string $CON_EMAIL
 * @property string $CON_OBS
 * @property integer $CON_PRINCIPAL
 * @property integer $CON_ESTADO
 */
class Contactos extends Model
{
    public $table = 'ins_contacts';
    public $timestamps=false;    
    protected $primaryKey = 'CON_ID';

    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'CON_ID' => 'integer',
        'INS_ID' => 'integer',
        'CON_NOMBRES' => 'string',
        'CON_CARGO' => 'string',
        'CON_TELEFONO' => 'string',
        'CON_EMAIL' => 'string',
        'CON_OBS' => 'string',
        'CON_PRINCIPAL' => 'integer',
        'CON_ESTADO' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'INS_ID' => 'nullable',
        'CON_NOMBRES' => 'nullable|string|max:150',
        'CON_CARGO' => 'nullable|string|max:150',
        'CON_TELEFONO' => 'nullable|string|max:50',
        'CON_EMAIL' => 'nullable|string|max:50',
        'CON_OBS' => 'nullable|string|max:150',
        'CON_PRINCIPAL' => 'nullable|integer',
        'CON_ESTADO' => 'nullable|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function ins()
    {
        return $this->belongsTo(\App\Models\Institute::class, 'INS_ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function comunicatios()
    {
        return $this->hasMany(\App\Models\Comunicatio::class, 'CON_ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function courseIncriptions()
    {
        return $this->hasMany(\App\Models\CourseIncription::class, 'CON_ID');
    }
}

<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class UsuariosPerfiles
 * @package App\Models
 * @version August 15, 2020, 12:41 pm UTC
 *
 * @property \App\Models\User $usu
 * @property \App\Models\Profile $prf
 * @property integer $USU_ID
 * @property integer $PRF_ID
 * @property integer $UPF_ESTADO
 */
class UsuariosPerfiles extends Model
{

    public $table = 'profiles_users';
    protected $primaryKey = 'UPF_ID';
    public $timestamps=false;    

    public $fillable = [
        'USU_ID',
        'PRF_ID',
        'UPF_ESTADO'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'UPF_ID' => 'integer',
        'USU_ID' => 'integer',
        'PRF_ID' => 'integer',
        'UPF_ESTADO' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'USU_ID' => 'nullable',
        'PRF_ID' => 'nullable',
        'UPF_ESTADO' => 'nullable|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function usu()
    {
        return $this->belongsTo(\App\Models\User::class, 'USU_ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function prf()
    {
        return $this->belongsTo(\App\Models\Profile::class, 'PRF_ID');
    }
}

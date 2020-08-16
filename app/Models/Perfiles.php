<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Perfiles
 * @package App\Models
 * @version August 10, 2020, 6:11 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $departments
 * @property \Illuminate\Database\Eloquent\Collection $users
 * @property string $PRF_DESCRIPCION
 * @property string $PRF_CODIGO
 * @property string $PRF_OBS
 */
class Perfiles extends Model
{

    public $table = 'profiles';
    public $timestamps=false;
   
    protected $primaryKey = 'PRF_ID';

    public $fillable = [
        'PRF_DESCRIPCION',
        'PRF_CODIGO',
        'PRF_OBS'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'PRF_ID' => 'integer',
        'PRF_DESCRIPCION' => 'string',
        'PRF_CODIGO' => 'string',
        'PRF_OBS' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'PRF_DESCRIPCION' => 'nullable|string|max:50',
        'PRF_CODIGO' => 'nullable|string|max:20',
        'PRF_OBS' => 'nullable|string|max:150'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function departments()
    {
        return $this->hasMany(\App\Models\Department::class, 'PRF_ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function users()
    {
        return $this->belongsToMany(\App\Models\User::class, 'profiles_users');
    }
}

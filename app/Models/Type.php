<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_type
 * @property string $name_type
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Film[] $films
 */
class Type extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_type';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name_type', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function films()
    {
        return $this->hasMany('App\Film', 'id_type', 'id_type');
    }
}

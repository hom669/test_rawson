<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_category
 * @property string $name_category
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Film[] $films
 */
class Category extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_category';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name_category', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function films()
    {
        return $this->hasMany('App\Film', 'id_category', 'id_category');
    }
}

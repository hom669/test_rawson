<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_film
 * @property integer $id_category
 * @property integer $id_type
 * @property string $name_film
 * @property int $year_film
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Type $type
 * @property Category $category
 */
class Film extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_film';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['id_category', 'id_type', 'name_film', 'year_film', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type()
    {
        return $this->belongsTo('App\Type', 'id_type', 'id_type');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Category', 'id_category', 'id_category');
    }
}

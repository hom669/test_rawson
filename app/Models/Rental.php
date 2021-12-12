<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * @property integer $id_rental
 * @property int $value_rental
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class Rental extends Model
{
    use SoftDeletes;
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_rental';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    /**
     * @var array
     */
    protected $fillable = ['value_rental', 'created_at', 'updated_at', 'deleted_at'];

}

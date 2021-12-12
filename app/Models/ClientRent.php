<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * @property integer $id_client_rent
 * @property integer $id_client
 * @property int $points_client
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Client $client
 */
class ClientRent extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'clients_rents';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_client_rent';

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
    protected $fillable = ['id_client', 'points_client', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client()
    {
        return $this->belongsTo('App\Client', 'id_client', 'id_client');
    }
}

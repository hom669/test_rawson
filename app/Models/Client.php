<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_client
 * @property string $name_client
 * @property string $identification_client
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property ClientsRent[] $clientsRents
 */
class Client extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_client';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name_client', 'identification_client', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clientsRents()
    {
        return $this->hasMany('App\ClientsRent', 'id_client', 'id_client');
    }
}

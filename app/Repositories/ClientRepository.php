<?php

namespace App\Repositories;

use App\Models\Client;
/**
 * Class FilmRepository
 *
 * @package App\Repositories
 * @version December 11, 2021, 8:30 pm UTC
 * @method Product getFilms($request(*))
 */
class ClientRepository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name_client', 
        'identification_client', 
        'created_at', 
        'updated_at', 
        'deleted_at'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Film::class;
    }

     /**
     * Consulta para verificar si el cliente se encuentra registrado
     *
     * @param Request $identification_client campos para realizar la consulta
     * 
     * @author Haider Oviedo @hom669
     */
    public function verifyClient($identification_client){
        $verifyClient = Client::whereNull('deleted_at')
                    ->where('identification_client','=',$identification_client)
                    ->select('id_client');
        return $verifyClient->first();
    }



   
}

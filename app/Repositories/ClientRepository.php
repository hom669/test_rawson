<?php

namespace App\Repositories;

use App\Models\Client;
/**
 * Class FilmRepository
 *
 * @package App\Repositories
 * @version December 11, 2021, 3:30 pm UTC
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
     * Consultar los productos modificados desde una fecha especifica
     *
     * @param Request $request Contiene los filtros a aplicar en la consulta
     * @return mixed Contiene una colección con los productos obtenidos de la base de datos
     * @author Jhon García
     */
    public function verifyClient($identification_client){
        $verifyClient = Client::whereNull('deleted_at')
                    ->where('identification_client','=',$identification_client)
                    ->select('id_client');
        return $verifyClient->first();
    }



   
}

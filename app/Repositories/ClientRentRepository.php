<?php

namespace App\Repositories;

use App\Models\ClientRent;

/**
 * Class ClientRentRepository
 *
 * @package App\Repositories
 * @version December 11, 2021, 3:30 pm UTC
 * @method Product getFilms($request(*))
 */
class ClientRentRepository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_client', 
        'points_client', 
        'created_at', 
        'updated_at', 
        'deleted_at'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ClientRent::class;
    }

    /**
     * Consultar los productos modificados desde una fecha especifica
     *
     * @param Request $request Contiene los filtros a aplicar en la consulta
     * @return mixed Contiene una colección con los productos obtenidos de la base de datos
     * @author Jhon García
     */
    public function getPointForClient($request)
    {
        $getPointForClient = ClientRent::join('clients','clients.id_client', '=', 'clients_rents.id_client')
                ->whereNull('clients.deleted_at')
                ->whereNull('clients_rents.deleted_at')
                ->selectRaw('clients.id_client,clients.identification_client,clients.name_client,sum(clients_rents.points_client) as points_client');
        if($request->id_client){
            $getPointForClient->where('clients.id_client','=',$request->id_client);
        }
        if($request->identification_client){
            $getPointForClient->where('clients.identification_client','=',$request->identification_client);
        }
        if($request->name_client){
            //$getPointForClient->where('clients.name_client','=',$request->name_client);
            $getPointForClient->where('clients.name_client', 'ilike', "%".$request->name_client."%");
        }

        return $getPointForClient->groupBy('clients.id_client','clients.identification_client','clients.name_client')->get();
    }

    public function insertRent($id_client,$filmsRent,$filmsPoints){

        $rentInsert = ClientRent::insert([
            'cost_rent' => $filmsRent,
            'points_client' => $filmsPoints,
            'id_client' => $id_client
        ]);

        return $rentInsert;

    }
   
}

<?php

namespace App\Services;

//Entities
use App\Models\ClientRent;
use Carbon\Carbon;

// Criteria
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Repositories\ClientRentRepository;

// Otro
/**
 * Este controlador permite definirs
 * los métodos necesarios para aplicar
 * la logica de negocio relacionada a
 * la tabla de peliculas.
 *
 * @author Haider Oviedo @hom669
 * @package App\Services
 */
class ClientRentService
{
    private $ClientRentRepository;

    /**
     * Constructor.
     */
    public function __construct(ClientRentRepository $ClientRentRepository)
    {
        $this->ClientRentRepository = $ClientRentRepository;
    }

    /**
     * Traer las peliculas segun parametros
     *
     * @author Haider Oviedo Martinez @hom669
     */
    public function getPointForClient($request)
    {
        $getPointForClient = $this->ClientRentRepository->getPointForClient($request);
        if($getPointForClient->count() > 0){
            $getPointForClient = $getPointForClient;
        }else{
            $getPointForClient = array(["request"=>"The client has no Points"]);
        }

        return $getPointForClient;
    }

}

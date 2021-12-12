<?php

namespace App\Services;

//Entities
use App\Models\Film;
use Carbon\Carbon;

// Criteria
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Repositories\FilmRepository;
use App\Repositories\ClientRepository;
use App\Repositories\ClientRentRepository;
use App\Repositories\RentalRepository;

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
class FilmService
{
    private $FilmRepository;
    private $ClientRepository;
    private $ClientRentRepository;
    private $RentalRepository;

    /**
     * Constructor.
     */
    public function __construct(FilmRepository $FilmRepository,ClientRepository $ClientRepository,ClientRentRepository $ClientRentRepository,RentalRepository $RentalRepository)
    {
        $this->FilmRepository = $FilmRepository;
        $this->ClientRepository = $ClientRepository;
        $this->ClientRentRepository = $ClientRentRepository;
        $this->RentalRepository = $RentalRepository;
    }

    /**
     * Traer las peliculas segun parametros
     *
     * @author Haider Oviedo Martinez @hom669
     */
    public function getFilms($request)
    {
        $films = $this->FilmRepository->getFilms($request);
        return $films;
    }

    public function rentFilms($request)
    {
        if(isset($request->films)){
            $filmsRent = 0;
            $filmsPoints = 0;
            $responseArray = array(["identification_client"=>$request->identification_client,"days_rent"=>$request->days_rent]);
            $verifyClient = $this->verifyClient($request->identification_client);
            if(!isset($verifyClient)){
                $responseArray = array();
                $response = array(["requests"=>array(["identification_client"=>$request->identification_client, "msg"=>"Client does not exist Cannot rent movies"])]);
                $responseArray = array_merge($responseArray,$response);
    
            }else{
                foreach ($request->films as $film_sec) {
    
                    $film = $this->FilmRepository->filmById($film_sec['id_film']);
                    if(isset($film)){
                        $filmsRent += $this->calculateRents($film['id_film'],$request->days_rent);
                        $filmsPoints += $this->calculatePoints($film['id_film']);
                        $response = array(["requests"=>array(["id_film"=>$film['id_film'],"name_film"=>$film['name_film'], "msg"=>"Movie Rent Correctly!!"])]);
                        $responseArray = array_merge($responseArray,$response);
                    }else{
                        $response = array(["requests"=>array(["id_film"=>$film_sec['id_film'],"name_film"=>$film_sec['name_film'], "msg"=>"Movie not available!!"])]);
                        $responseArray = array_merge($responseArray,$response);
                    }
                }
        
                if(isset($verifyClient)){
                    $filmInsert = $this->ClientRentRepository->insertRent($verifyClient['id_client'],$filmsRent,$filmsPoints);
                    $response = array(["cost_for_rent" => $filmsRent,"points_for_rent" => $filmsPoints,]);
                    $responseArray = array_merge($responseArray,$response);
                }
    
            }
        }else{
            $responseArray = array();
            $response = array(["requests"=>array(["msg"=>"Not Information for rent Movies!!"])]);
            $responseArray = array_merge($responseArray,$response);
        }

        return $responseArray;
    }

    public function calculateRents($id_film,$days_rent)
    {
        $film = $this->FilmRepository->filmById($id_film);
        $getRentValue = $this->RentalRepository->getRentValue();
        if(isset($film)){
            if($film->name_type == 'Nuevo Lanzamiento'){
                $rent = $getRentValue->value_rental*$days_rent;                
            }else if($film->name_type == 'Vieja'){

                $rent = $this->calculateRentExtra($days_rent,5,$getRentValue->value_rental);

            }else if($film->name_type == 'Normal'){

                $rent = $this->calculateRentExtra($days_rent,3,$getRentValue->value_rental);

            }
        }else{
            $rent = 0;
        }
        return $rent;
    }

    public function calculatePoints($id_film)
    {
        $film = $this->FilmRepository->filmById($id_film);
        if(isset($film)){
            if($film->name_type == 'Nuevo Lanzamiento'){
                $point = 2;                
            }else{
                $point = 1;
            }
        }else{
            $point = 0;
        }
        return $point;
    }


    public function calculateRentExtra($days_rent,$days,$value_rental)
    {
        if($days_rent>$days){
            $days_extra = $days_rent-$days;
            $rent_extra = $days_extra*$value_rental;
        }else{
            $rent_extra = 0;
        }

        $rent = $rent_extra+$value_rental;
        return $rent;
    }

    public function verifyClient($identification_client)
    {
        $client = $this->ClientRepository->VerifyClient($identification_client);
        return $client;
    }

    public function createFilm($request)
    {

        $film = $this->FilmRepository->createFilm($request);
        return $film;
    }

}

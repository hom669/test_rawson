<?php

namespace App\Http\Controllers;

use App\Services\FilmService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;

class FilmApiController extends AppBaseController
{
    private $FilmService;

    /**
     * Constructor.
     */
    public function __construct(FilmService $FilmService)
    {
        $this->FilmService = $FilmService;
    }

    function index(Request $request){
        $films = $this->FilmService->getFilms($request);
        return $this->sendResponse($films, 'Consume Films retrieved successfully');
    }

    function rentFilms(Request $request){
        $error = $this->validate($request, [
            'identification_client' => 'required',
            'days_rent' => 'required|numeric',
            'films' => 'required',
            'films.*.id_film' => 'required|numeric',
            'films.*.name_film' => 'required'
        ]);

        if(isset($error->errors)){
            return $this->sendResponse($error->errors, 'Consume Create Films successfully');
        }else{
            $films = $this->FilmService->rentFilms($request);
            return $this->sendResponse($films, 'Consume Rent Films successfully');
        }

        
    }

    function createFilm(Request $request){
        $error = $this->validate($request, [
            'name_film' => 'required',
            'year_film' => 'required|numeric',
            'id_type' => 'numeric',
            'id_category' => 'numeric',
            'name_category' => 'string',
            'name_type' => 'string'
        ]);
        if(isset($error->errors)){
            return $this->sendResponse($error->errors, 'Consume Create Films successfully');
        }else{
            $films = $this->FilmService->createFilm($request);
            return $this->sendResponse($films, 'Consume Create Films successfully');
        }

        
    }

}

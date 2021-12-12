<?php

namespace App\Repositories;
use App\Models\Rental;

/**
 * Class FilmRepository
 *
 * @package App\Repositories
 * @version December 11, 2021, 3:30 pm UTC
 * @method Product getFilms($request(*))
 */
class RentalRepository
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
    public function getRentValue(){
        $rentValue = Rental::whereNull('deleted_at')
                    ->select('value_rental');
        return $rentValue->first();
    }



   
}

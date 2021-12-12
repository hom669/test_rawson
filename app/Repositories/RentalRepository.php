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
     * Obtiene el Valor de la renta parametrizado en la tabla Rental
     *
     * @param Ninguno
     * 
     * @author Haider Oviedo @hom669
     */
    public function getRentValue(){
        $rentValue = Rental::whereNull('deleted_at')
                    ->select('value_rental');
        return $rentValue->first();
    }



   
}

<?php

namespace App\Services;

//Entities
use Carbon\Carbon;

// Criteria
use Illuminate\Http\Request;
use Illuminate\Support\Arr;


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
class OrderService
{

    /**
     * Ordenar Arreglo
     *
     * @author Haider Oviedo Martinez @hom669
     */
    function order($array,$sortCriterion){

    
        $keysOrder = array_keys($sortCriterion);

        if(count($keysOrder)==2){
            $s = 0;
            foreach ($sortCriterion as $type) {
                if($type == 'DESC' && $s = 0){
                    $type_order1 = SORT_DESC;
                }else{
                    $type_order1 = SORT_ASC;
                }

                if($type == 'DESC' && $s = 1){
                    $type_order2 = SORT_DESC;
                }else{
                    $type_order2 = SORT_ASC;
                }

                $s++;
            }

            $sorted = array_multisort(array_column($array, $keysOrder[0]), $type_order1 ,
            array_column($array, $keysOrder[1]), $type_order2,
            $array);

            $arrayOrder = $array;

        }else{
            $arrayOrder = $array;
        }

        

        return $arrayOrder;
    }

}

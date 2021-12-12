<?php

namespace App\Http\Controllers;

use App\Services\OrderService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;

class OrderApiController extends AppBaseController
{
    private $OrderService;

    /**
     * Constructor.
     */
    public function __construct(OrderService $OrderService)
    {
        $this->OrderService = $OrderService;
    }

    function orderArray(Request $request){

        $array = [
            ['user'=>'Oscar','age'=>18,'scoring'=>40],
            ['user'=>'Mario','age'=>45,'scoring'=>10],
            ['user'=>'Zuleta','age'=>33,'scoring'=>-78],
            ['user'=>'Mario','age'=>45,'scoring'=>78],
            ['user'=>'Patricio','age'=>22,'scoring'=>9]
           
        ];


        echo "<b>Arreglo Original</b><br>";

        echo "<pre>";print_r($array);"</pre>";

        $sortCriterion = ['age'=>'ASC','scoring'=>'ASC'];
        $result = $this->OrderService->order($array,$sortCriterion);

        echo "<b>Arreglo Ordenado</b><br>";
        dd($result);
    }

    


}

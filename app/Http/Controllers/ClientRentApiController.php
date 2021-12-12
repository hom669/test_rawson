<?php

namespace App\Http\Controllers;

use App\Services\ClientRentService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;

class ClientRentApiController extends AppBaseController
{
    private $ClientRentService;

    /**
     * Constructor.
     */
    public function __construct(ClientRentService $ClientRentService)
    {
        $this->ClientRentService = $ClientRentService;
    }

    function index(Request $request){
        $pointsForClient = $this->ClientRentService->getPointForClient($request);
        return $this->sendResponse($pointsForClient, 'Consume Point For Client retrieved successfully');
    }


}

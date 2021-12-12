<?php

namespace App\Http\Controllers;

use InfyOm\Generator\Utils\ResponseUtil;
use Illuminate\Support\Facades\Response;

/**
 * Class AppBaseController
 * @package App\Http\Controllers
 */
class AppBaseController extends Controller
{
    public function sendResponse($result, $message)
    {
        return Response::json(ResponseUtil::makeResponse($message, $result));
    }

    public function sendError($error, $code = 404)
    {
        return Response::json(ResponseUtil::makeError($error), $code);
    }
}

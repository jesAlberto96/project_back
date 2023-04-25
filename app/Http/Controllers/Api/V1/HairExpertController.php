<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\ResponseController as Response;
use App\Repositories\HairExpert\HairExpertRepository;

class HairExpertController extends Controller
{

    public function getAll()
    {
        return Response::sendResponse(HairExpertRepository::getAll() ?? []);
    }
}

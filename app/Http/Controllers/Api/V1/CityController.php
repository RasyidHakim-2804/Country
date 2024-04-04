<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CityResource;
use App\Models\City;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::paginate(25);

        return CityResource::collection($cities);
    }
}

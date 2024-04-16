<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CityResource;
use App\Models\City;

class CityController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('state_id')) {

            $id     = $request->state_id;
            $cities = City::where('state_id', $id)->orderBy('name')->get();
            
        } elseif ($request->has('country_id')){
            
            $id     = $request->country_id;
            $cities = City::where('country_id', $id)->orderBy('name')->paginate(25);
            $cities->appends(['country_id' => $id]);
            
        } else {
            $cities = City::paginate(25);
        }

        return CityResource::collection($cities);
    }
}

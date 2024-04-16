<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\CountryResource;
use App\Http\Resources\StateResource;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->id) {

            $country    = Country::find($request->id);
            
            return new CountryResource($country);
            
        } 
        $countries = $countries  = Country::all();

        return CountryResource::collection($countries);
    }
    
}

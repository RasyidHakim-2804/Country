<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\CountryResource;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries  = Country::paginate(25);
        // dd($countries);

        return CountryResource::collection($countries);
    }





    /**
     * for see column in database
     */
    public function dummy()
    {
        $countries = Schema::getColumnListing('countries');
        $regions = Schema::getColumnListing('regions');
        $states = Schema::getColumnListing('states');
        $subregions = Schema::getColumnListing('subregions');
        $cities = Schema::getColumnListing('cities');

        return response()->json([
            'countries' => $countries,
            'regions' => $regions,
            'states' => $states,
            'subregions' => $subregions,
            'cities' => $cities
        ]);
    }    
}

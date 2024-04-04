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
    public function index(Request $request)
    {
        if ($request->has('name')) {

            $name      = $request->name;
            $countries = Country::where('name','like', "%$name%")->paginate(25);
        } else {
            $countries = $countries  = Country::paginate(25);
        }

        return CountryResource::collection($countries);
    }  
}

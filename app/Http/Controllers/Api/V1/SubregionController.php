<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\SubregionResource;
use App\Models\Subregion;
use Illuminate\Http\Request;

class SubregionController extends Controller
{
    public function index()
    {
        $subregions = Subregion::all();
        
        return SubregionResource::collection($subregions);
    }
}

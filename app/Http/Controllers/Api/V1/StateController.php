<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\StateResource;
use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('country_id')) {

            $id     = $request->country_id;
            $states = State::where('country_id', $id)->orderBy('name')->paginate(25);
            $states->appends(['country_id' => $id]);

        } else {
            $states = State::paginate(25);
        }
        
        return StateResource::collection($states);
    }
}

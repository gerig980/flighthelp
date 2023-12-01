<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use Illuminate\Http\Request;

class SearchAirportController extends Controller
{

    public function selectSearch(Request $request)

    {

        $data = Airport::select("airport_name","airport_code")

                    ->where('airport_code', 'LIKE', '%'. $request->get('query'). '%')
                    ->orWhere('airport_name', 'LIKE', '%'. $request->get('query'). '%')

                    ->get();


        return response()->json($data);

    }



}

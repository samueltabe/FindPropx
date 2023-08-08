<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function getDetails(Request $request)
    {
        // return $request->all();
        if($request->key == 'red'){
            $lower = '700,00';
            $low = '500,000';
            $lowprice = $lower >= $low;
            $houses = House::where('price', $lower)->latest()->with(['types', 'status'])->get();
            return $cost =
            [
            'houses' => $houses,
            ];

        }else{
            $states = State::latest()->with('localGovernments')->get();
            $houses = House::latest()->with(['types', 'status'])->get();
            $housefeature = DB::table('features')->get();


            return $cost =
            ['states and lgas' => $states,
            'houses' => $houses,
            'house feature' => $housefeature,
            ];
        }
    }
}

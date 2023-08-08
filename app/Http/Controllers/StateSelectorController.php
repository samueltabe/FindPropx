<?php

namespace App\Http\Controllers;

use App\Models\Lga;
use App\Models\State;
use Illuminate\Http\Request;

class StateSelectorController extends Controller
{
    public function index(Request $request)
    {
        $state = State::latest()->with('localGovernments')->get();
        return ($state);
    }

    public function statelga(Request $req)

    {
        $statelga = Lga::where('state_id', $req->state_id)->get();
        return $statelga;
    }
}

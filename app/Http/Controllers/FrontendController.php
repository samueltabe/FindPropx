<?php

namespace App\Http\Controllers;

use view;
use Share;
use App\Models\Type;
use App\Models\User;
use App\Models\House;
use App\Models\State;
use App\Models\Feature;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $places = House::latest()->with(['images', 'users', 'types', 'states'])->take(8)->get();
        $houses = House::latest()->with(['images', 'types', 'users', 'states'])->take(6)->get();
        $type = Type::all();
        $state = State::all();
        $users = User::all();
        // $house = House::findorFail($houseId);
        // $houseUrl = route('house.show', ['houseId' => $house->id]);
        // $shareComponent = \Share::page(
        //     $houseUrl,
        //      'Your share text comes here',
        // )
        // ->facebook()
        // ->twitter()
        // ->linkedin()
        // ->telegram()
        // ->whatsapp()
        // ->reddit();
        return view('index' , compact('places','houses', 'type', 'state', 'users'));
    }

    public function list()
    {
        $houses = House::latest()->with(['images', 'types', 'users', 'states', 'status'])->paginate(3);
        return view('list', compact('houses'));
    }

    public function list2()
    {
        $houses = House::latest()->with(['images', 'types', 'states'])->take(12)->get();
        return view('list2', compact('houses'));
    }

    public function single($id)
    {
        $houses = House::findorFail($id);
        $house = House::latest()->with(['images', 'types', 'states'])->take(6)->get();
        $type = House::where('type_id', $houses->type_id)->where('id', '!=', $houses->id)->with(['images', 'types', 'states', 'lgas'])
        ->latest()
        ->take(3)
        ->get();
        $features = Feature::all();
        $houseUrl = route('house.show', ['id' => $houses->id]);
        $shareComponent = \Share::page(
          $houseUrl,
          'You will surely love this'
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()
        ->reddit();

        return view('single', compact('houses', 'house', 'type', 'features', 'shareComponent'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }


}

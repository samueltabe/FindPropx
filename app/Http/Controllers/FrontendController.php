<?php

namespace App\Http\Controllers;

use view;
use Share;
use App\Models\Type;
use App\Models\User;
use App\Models\House;
use App\Models\State;
use App\Models\Feature;
use App\Models\Lga;
use App\Models\Status;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $places = House::latest()->with(['images', 'users', 'types', 'states'])->take(8)->get();
        $houses = House::latest()->with(['images', 'types', 'users', 'states'])->take(6)->get();
        $type = Type::all();
        $state = State::all();
        $status = Status::all();
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
        return view('index' , compact('places','houses', 'type', 'state', 'status'));
    }

    // public function list(Request $request)
    // {
    //     if($request->input('type_id')){
    //         $query = $request->input('type_id',);
    //         $types = Type::Where('name','like', "%$query%")->paginate(10);
    //      }else{
    //         $types = Type::all();
    //      }
    // 	// return view('dashboard.books.index', compact('books'));
    //     // $types = Type::all();
    //     $houses = House::latest()->with(['images', 'types', 'users', 'states', 'status'])->paginate(6);
    //     return view('list', compact('houses', 'types'));
    // }

    public function list(Request $request)
    {
        $queryType = $request->input('type_id');
        $queryStatus = $request->input('status_id');
        $queryState = $request->input('state_id');
        $queryLga = $request->input('lga_id');
        $types = Type::with('typeCount')->get();
        $status = Status::with('statusCount')->get();
        $states = State::all();
        $lgas = Lga::all();

        if ($queryType) {
            $houses = House::whereHas('types', function ($houseQuery) use ($queryType) {
                $houseQuery->where('id', $queryType);
            })->latest()->with(['images', 'types', 'users', 'states', 'status'])->paginate(6);
            // $totalHousesForType = House::where('types', function ($houseQuery) use ($queryType) {
            //     $houseQuery->where('id', $queryType);
            // })->count();
        }
        elseif($queryState){
            $houses = House::whereHas( 'states', function ($houseQuery) use ($queryState) {
                $houseQuery->where('id', $queryState);
            })->latest()->with(['images', 'types', 'users', 'states', 'status'])->paginate(6);
        }
        elseif($queryLga){
            $houses = House::whereHas( 'lgas', function ($houseQuery) use ($queryLga) {
                $houseQuery->where('id', $queryLga);
            })->latest()->with(['images', 'types', 'users', 'states', 'status'])->paginate(6);
        }
        elseif($queryStatus){
            $houses = House::whereHas( 'status', function ($houseQuery) use ($queryStatus) {
                $houseQuery->where('id', $queryStatus);
            })->latest()->with(['images', 'types', 'users', 'states', 'status'])->paginate(6);
        }else {
            $totalHousesForType = 0;
            $houses = House::latest()->with(['images', 'types', 'users', 'states', 'status'])->paginate(6);
        }

        $recent = House::latest()->with(['images',  'types', 'users', 'states', 'status'])->paginate(4);
        $totalHouses = House::count();
        return view('list', compact('houses','status','lgas' ,'states' ,'types', 'totalHouses', 'recent'));
    }


    public function list2()
    {
        $houses = House::latest()->with(['images', 'types', 'states'])->take(12)->get();
        return view('list2', compact('houses'));
    }

    public function single($id)
    {
        $houses = House::findorFail($id);
        $house = House::latest()->with(['images', 'types', 'states', 'users'])->take(6)->get();
        $type = House::where('type_id', $houses->type_id)->where('id', '!=', $houses->id)->with(['images', 'users', 'types', 'states', 'lgas'])
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
        $users = User::all()->take(4);
        return view('about', compact('users'));
    }

    public function service()
    {
        return view('service');
    }

    public function contact()
    {
        return view('contact');
    }

    public function coming()
    {
        return view('coming');
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\Lga;
use App\Models\Type;
use App\Models\User;
use App\Models\House;
use App\Models\Image;
use App\Models\State;
use App\Models\Status;
use App\Models\Feature;
use App\Models\HouseFeature;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        $houses = House::all();
        return view('admin.index', compact('users', 'houses'));
    }

    public function stateList()
    {
        $state = State::all();
        return view('admin.states.index', compact('state'));
    }

    public function LGAList()
    {
        $lgas = Lga::all();
        return view('admin.lgas.index', compact('lgas'));
    }

    public function profile()
    {
        $state = State::all();
        $lga = Lga::all();
        return view('admin.profile.index', compact('state', 'lga'));
    }

    public function ProfileUpdate(Request $req)
    {
        $user = auth()->user();
        $user->name=$req->name;
        $user->phone=$req->phone;
        $user->email=$req->email;
        $user->address=$req->address;
        $user->bio=$req->bio;
        $user->state_id=$req->state_id;
        $user->lga_id=$req->lga_id;
        if($req->hasfile('image')){

            $destination = 'upload/admin-dp'.$user->image;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $req->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('upload/admin-dp', $filename);
            $user->image = $filename;
        }

        $user->update();

        return back()->with('message', 'Data successfully updated!');
    }


    public function Type()
    {
        $type = Type::all();
        return view('admin.type.index', compact('type'));
    }
    public function TypeCreate()
    {
        return view('admin.type.create');
    }
    public function TypeAdd(Request $req)
    {
        $type = new Type;
        $type->name=$req->name;

        $type->save();

        return redirect('/admin/type')->with('message', 'Property Type successfully Added');
    }
    public function TypeEdit($id)
    {
        $type = Type::find($id);
        return view('admin.type.edit', compact('type'));
    }
    public function TypeUpdate(Request $req, $id)
    {
        $type = Type::find($id);
        $type->name=$req->input('name');
        $type->update();

        return redirect('/admin/type')->with('message', 'Data successfully updated!');
    }
    public function TypeDelete($id)
    {
        $type = Type::find($id);
        $type->delete();
        return redirect('/admin/type')->with('message', 'Data details successfully Deleted');
    }


    public function House()
    {
        // $agentName= Auth::user()->name;
        // $house = House::latest()->with(['images', 'types'])->where('agent', $agentName)->get();
        $house = House::orderBy('created_at', 'desc')->with(['images', 'types', 'users', 'states', 'lgas'])->get();
        return view('admin.house.index', compact('house'));
    }
    public function HouseCreate()
    {
        $type = Type::all();
        $features = Feature::all();
        $state = State::all();
        $lga = Lga::all();
        $status = Status::all();
        return view('admin.house.create', compact('type','features','state','lga', 'status'));
    }
    public function houseAdd(Request $req )
    {
         //dd($req->all());
         $house = new House;
         $house->title=$req->input('title');
         $house->state_id=$req->input('state_id');
         $house->lga_id=$req->input('lga_id');
         $house->type_id=$req->input('type_id');
         $house->status_id=$req->input('status_id');
         $house->description=$req->input('description');
         $house->price=$req->input('price');
         $house->rooms=$req->input('rooms');
         $house->city=$req->input('city');
         $house->user_id=$req->input('user_id');
         $house->agent=$req->input('agent');
         $house->address=$req->input('address');
         $house->area=$req->input('area');
         $house->video=$req->input('video');

         $house->save();

        // Upload and attach images to the product
        // if ($req->hasFile('images')) {
        //     $images = $req->file('images');
        //     foreach ($images as $image) {
        //         $filename = $image->getClientOriginalName();

        //         $path = $image->move('upload/house/images/', rand(100, 999) .$filename);

        //         $productImage = new Image();
        //         $productImage->house_id = $house->id;
        //         $productImage->img_url = $path;
        //         $productImage->save();
        //     }
        // }

        if ($req->hasFile('images')) {
            $images = $req->file('images');
            foreach ($images as $image) {
                $filename = $image->getClientOriginalName();
                $randomString = Str::random(10);
                $uniqueFilename = $randomString . '_' . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('upload/house/images/'), $uniqueFilename);
                $productImage = new Image();
                $productImage->house_id = $house->id;
                $productImage->img_url = 'upload/house/images/' . $uniqueFilename;
                $productImage->save();
            }
        }



        for ($i=0; $i < count($req->features); $i++) {
            HouseFeature::create([
           'feature_id'=>$req->features[$i],
           'house_id'=>$house->id,
            ]);
        }

         return redirect('/admin/house')->with('message', 'House details successfully Added');

    }

    public function houseEdit($id)
    {
        $type = Type::all();
        $features = Feature::all();
        $state = State::all();
        $lga = Lga::all();
        $house = House::find($id);
        $status = Status::all();
        return view('admin.house.edit', compact('house', 'type','features','state','lga', 'status'));
    }

    public function HouseUpdate(Request $req, $id)
    {
        //dd($req->all());
        $house = House::find($id);
        $house->title=$req->input('title');
        $house->state_id=$req->input('state_id');
        $house->lga_id=$req->input('lga_id');
        $house->type_id=$req->input('type_id');
        $house->status_id=$req->input('status_id');
        $house->description=$req->input('description');
        $house->price=$req->input('price');
        $house->rooms=$req->input('rooms');
        $house->city=$req->input('city');
        $house->agent=$req->input('agent');
        $house->user_id=$req->input('user_id');
        $house->address=$req->input('address');
        $house->area=$req->input('area');
        $house->video=$req->input('video');

        $house->save();
       // dd($house);

       // Upload and attach images to the product
        if ($req->hasFile('images')) {
            $images = $req->file('images');
            foreach ($images as $image) {
                $filename = $image->getClientOriginalName();

                $path = $image->move('upload/house/images/', rand(100, 999) . $filename);

                // Check if the Image record exists or create a new one
                $productImage = Image::firstOrCreate(['house_id' => $house->id]);

                // Update the Image record
                $productImage->img_url = $path;
                $productImage->save();
            }
        }


       for ($i=0; $i < count($req->features); $i++) {
           HouseFeature::updated([
          'feature_id'=>$req->features[$i],
          'house_id'=>$house->id,
           ]);
       }


        return redirect('/admin/house')->with('message', 'House details successfully Added');
    }

    // public function HouseDelete($id)
    // {
    //     $house = House::find($id);
    //     $destination = 'upload/house/images/'.$house->image;
    //     if(File::exists($destination)){

    //         File::delete($destination);

    //         $house->images()->delete();

    //     }
    //     $house->delete();
    //     return redirect('/admin/house')->with('message', 'House details successfully Deleted');
    // }
    public function HouseDelete($id)
    {
        $house = House::find($id);

        if ($house) {
            foreach ($house->images as $image) {
                $destination = public_path('upload/house/images/' . $image->img_url);
                if (File::exists($destination)) {
                    File::delete($destination);
                }

                $image->delete();
            }

            $house->delete();

            return redirect('/admin/house')->with('message', 'House details and images successfully deleted');
        }

        return redirect('/admin/house')->with('message', 'House not found');
    }




    public function feature()
    {
        $feature = Feature::all();
        return view('admin.feature.index', compact('feature'));
    }

    public function featureCreate()
    {
        return view('admin.feature.create');
    }
    public function featureAdd(Request $req)
    {
        $feature = new Feature;
        $feature->name=$req->name;

        $feature->save();

        return redirect('/admin/feature')->with('message', 'Property Feature successfully Added');
    }
    public function featureEdit($id)
    {
        $feature = Feature::find($id);
        return view('admin.feature.edit', compact('feature'));
    }
    public function featureUpdate(Request $req, $id)
    {
        $featues = Feature::find($id);
        $featues->name=$req->input('name');
        $featues->update();

        return redirect('/admin/feature')->with('message', 'Data successfully updated!');
    }
    public function featureDelete($id)
    {
        $feature = Feature::find($id);
        $feature->delete();
        return redirect('/admin/feature')->with('message', 'Data details successfully Deleted');
    }




    public function Status()
    {
        $status = Status::all();
        return view('admin.status.index', compact('status'));
    }

    public function StatusCreate()
    {
        return view('admin.status.create');
    }

    public function StatusAdd(Request $req)
    {
        $status = new Status;
        $status->name=$req->name;

        $status->save();

        return redirect('/admin/status')->with('message', 'Property Feature successfully Added');
    }

    public function users(User $user)
    {
        $user->update([
            'verified' => !$user->verified,
        ]);
        $users = User::all();
        return view('admin.users.index', compact('users', 'user'));
    }

    public function toggleVerification($id)
    {
        $user = User::findOrFail($id);
        $user->update([
            'verified' => !$user->verified,
        ]);

        return redirect()->back()->with('user', $user);
    }

    public function messages()
    {
        $message = Message::orderBy('created_at', 'desc')->get();
        return view('admin.messages.index', compact('message'));
    }


}

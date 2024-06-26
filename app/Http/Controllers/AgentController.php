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
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AgentController extends Controller
{
    public function index()
    {
        return view('agents.index');
    }

    public function profile()
    {
        $state = State::all();
        $lga = Lga::all();
        return view('agents.profile.index', compact('state', 'lga'));
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
        if ($req->hasFile('image')) {
            $destination = base_path('public/upload/admin/images');
            if ($user->image) {
                $existingImagePath = $destination . '/' . $user->image;
                if (File::exists($existingImagePath)) {
                    File::delete($existingImagePath);
                }
            }

            $file = $req->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move($destination, $filename);

            $user->image = $filename;
        }

        $user->update();

        return back()->with('message', 'Data successfully updated!');
    }


    public function House()
    {
        $agentName= Auth::user()->id;
        $house = House::latest()->with(['images', 'types', 'states','status', 'lgas'])->where('user_id', $agentName)->get();
        return view('agents.house.index', compact('house'));
    }
    public function HouseCreate()
    {
        $type = Type::all();
        $features = Feature::all();
        $state = State::all();
        $lga = Lga::all();
        $status = Status::all();
        return view('agents.house.create', compact('type','features','state','lga', 'status'));
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
         $house->sale_price=$req->input('sale_price');
         $house->rooms=$req->input('rooms');
         $house->city=$req->input('city');
         $house->user_id=$req->input('user_id');
         $house->agent=$req->input('agent');
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

         return redirect('/agents/house')->with('message', 'House details successfully Added');

    }

    public function houseEdit($id)
    {
        $type = Type::all();
        $features = Feature::all();
        $state = State::all();
        $lga = Lga::all();
        $house = House::find($id);
        $status = Status::all();
        return view('agents.house.edit', compact('house', 'type','features','state','lga', 'status'));
    }

    public function houseShow($id)
    {
        $type = Type::all();
        $houseFeature = House::where('id', $id)->with('house_features.feature')->first();
        $state = State::all();
        $lga = Lga::all();
        $house = House::find($id);
        $status = Status::all();
        return view('agents.house.show', compact('house', 'type','houseFeature','state','lga', 'status'));
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
        $house->sale_price=$req->input('sale_price');
        $house->rooms=$req->input('rooms');
        $house->city=$req->input('city');
        $house->user_id=$req->input('user_id');
        $house->agent=$req->input('agent');
        $house->address=$req->input('address');
        $house->area=$req->input('area');
        $house->video=$req->input('video');

        $house->save();


        if ($req->hasFile('images')) {
            $images = $req->file('images');
            foreach ($images as $image) {
                $filename = $image->getClientOriginalName();
                $randomString = Str::random(10);
                $uniqueFilename = $randomString . '_' . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('upload/house/images/'), $uniqueFilename);
                $productImage = Image::firstOrNew(['house_id' => $house->id]);
                $productImage->img_url = 'upload/house/images/' . $uniqueFilename;
                $productImage->save();
            }
        }

       for ($i=0; $i < count($req->features); $i++) {
           HouseFeature::updated([
          'feature_id'=>$req->features[$i],
          'house_id'=>$house->id,
           ]);
       }

        return redirect('/agents/house')->with('message', 'House details successfully Added');
    }


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

            return redirect('/agents/house')->with('message', 'House details and images successfully deleted');
        }

        return redirect('/agents/house')->with('message', 'House not found');
    }
}

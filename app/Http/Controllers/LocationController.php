<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{


    public function store(Request $request){
        $data = new location;

        $image=$request->image;

        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->image->move('foodimage',$imagename);
        $data->image=$imagename;
        $data->description=$request->des;
        $data->latitude=$request->lat;
        $data->longitude=$request->lng;
        $data->title=$request->title;
        $data->save();

        return redirect()->back();

    }

    public function index()
    { 
        return Location::all();
    }
}

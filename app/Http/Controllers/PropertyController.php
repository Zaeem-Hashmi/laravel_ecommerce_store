<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        return "property";
    }
    public function store(Request $request)
    {
        $model =  new Property();
        $model->name = $request->ppt_name;
        $model->property_code = $request->ppt_code;
        $model->property_type = $request->ppt_type;
        $model->phone_number = $request->ppt_phone;
        $model->property_description = $request->ppt_desc;
        $model->country = $request->ppt_country;
        $model->town = $request->ppt_town;
        $model->address_1 = $request->ppt_address;
        $model->save();
        
        $properties = Property::all();
        return view('home',compact('properties'));

    }
    public function update(Request $request)
    {
        $model =  Property::find($request->property_id);
        $model->name = $request->ppt_name;
        $model->property_code = $request->ppt_code;
        $model->property_type = $request->ppt_type;
        $model->phone_number = $request->ppt_phone;
        $model->property_description = $request->ppt_desc;
        $model->country = $request->ppt_country;
        $model->town = $request->ppt_town;
        $model->address_1 = $request->ppt_address;
        $model->save();
        
        $properties = Property::all();
        return view('home',compact('properties'));
    }
    public function edit($id , Request $request)
    {
        $property = Property::find($id);
        return view('edit',compact('property'));
    }
    public function delete($id)
    {
        $property = Property::find($id);
        $property->delete();
        $properties = Property::all();
        return view('home',compact('properties'));
    }
}

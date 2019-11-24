<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PropertyModel;
use Validator;

class PropertyController extends Controller
{
    public function getAllProperties()
    {
        $properties = PropertyModel::all();
       
        return response()->json($properties);
    } 

    public function getProperty($id)
    {
        $property = PropertyModel::find($id);
        
        return response()->json($property);
    }

    public function addProperty(Request $request)
    {  
        $validation = Validator::make(
            $request->all(),
            [
                'addressLine1' => 'required',
                'addressLine2' => 'nullable',
                'city' => 'nullable',
                'postcode' => 'nullable'
            ]
        );

        if ($validation->fails()) {
            return response()->json($validation->getMessageBag()->all());
        }
        
        $data = $request->only('addressLine1', 'addressLine2', 'city', 'postcode');
        $property = new PropertyModel();
        $property->address = json_encode($data, JSON_UNESCAPED_UNICODE);
        $property->save(); 
        return response()->json('Ok');
    }
}

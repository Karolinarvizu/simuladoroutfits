<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Accessorie;
use Illuminate\Http\Request;

class AccessorieController extends Controller
{
    public function list() {
        $accessories = Accessorie::all();
        $list = [];

        foreach($accessories as $accessorie){
            $object = [
                "id" => $accessorie->id,
                "description" => $accessorie->description,
                "brand_id" => $accessorie->brand_id,
                "shop_id" => $accessorie->shop_id,
                "price" => $accessorie->price,
                "image" => $accessorie->image,
                "created" => $accessorie->created_at,
                "updated" => $accessorie->updated_at,
            ];
            array_push($list, $object);
        }
        return response()->json($list);
    }
    public function item($id) {
        $accessorie = Accessorie::where('id','=', $id)->first();
            $object = [
                "id" => $accessorie->id,
                "description" => $accessorie->description,
                "brand_id" => $accessorie->brand_id,
                "shop_id" => $accessorie->shop_id,
                "price" => $accessorie->price,
                "image" => $accessorie->image,
                "created" => $accessorie->created_at,
                "updated" => $accessorie->updated_at,
            ];
        return response()->json($object);
    }
    public function create(Request $request) {
        $data = $request->validate([
            'description' => 'required|min:3',
            'brand' => 'required|numeric|max:99|min:2'
        ]);
        $accessorie = Accessorie::create([
            'description' => $data['description'],
            'brand' => $data['brand']
        ]);
        if($accessorie) {
            $object = [
                "response" => 'Sucess. Item saved correctly.',
                "data" => $accessorie,
            ];
        return response()->json($object);
        }else {
            $object = [
                "response" => 'Error: Something went wrong, please try again.',
            ];
            return response()->json($object);
        }
    }
}



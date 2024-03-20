<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Shirt;
use Illuminate\Http\Request;

class ShirtController extends Controller
{
    public function list() {
        $shirts = Shirt::all();
        $list = [];

        foreach($shirts as $shirt){
            $object = [
                "id" => $shirt->id,
                "description" => $shirt->description,
                "brand_id" => $shirt->brand_id,
                "shop_id" => $shirt->shop_id,
                "price" => $shirt->price,
                "image" => $shirt->image,
                "created" => $shirt->created_at,
                "updated" => $shirt->updated_at,
            ];
            array_push($list, $object);
        }
        return response()->json($list);
    }
    public function item($id) {
        $shirt = Shirt::where('id','=', $id)->first();
            $object = [
                "id" => $shirt->id,
                "description" => $shirt->description,
                "brand_id" => $shirt->brand_id,
                "shop_id" => $shirt->shop_id,
                "price" => $shirt->price,
                "image" => $shirt->image,
                "created" => $shirt->created_at,
                "updated" => $shirt->updated_at,
            ];
        return response()->json($object);
    }

    public function create(Request $request) {
        $data = $request->validate([
            'description' => 'required|min:3',
            'brand' => 'required|numeric|max:99|min:2'
        ]);
        $shirt = Shirt::create([
            'description' => $data['description'],
            'brand' => $data['brand']
        ]);
        if($shirt) {
            $object = [
                "response" => 'Sucess. Item saved correctly.',
                "data" => $shirt,
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
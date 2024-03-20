<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Shoe;
use Illuminate\Http\Request;

class ShoeController extends Controller
{
    public function list() {
        $shoes = Shoe::all();
        $list = [];

        foreach($shoes as $shoe){
            $object = [
                "id" => $shoe->id,
                "description" => $shoe->description,
                "brand_id" => $shoe->brand_id,
                "shop_id" => $shoe->shop_id,
                "price" => $shoe->price,
                "image" => $shoe->image,
                "created" => $shoe->created_at,
                "updated" => $shoe->updated_at,
            ];
            array_push($list, $object);
        }
        return response()->json($list);
    }
    public function item($id) {
        $shoe = Shoe::where('id','=', $id)->first();
            $object = [
                "id" => $shoe->id,
                "description" => $shoe->description,
                "brand_id" => $shoe->brand_id,
                "shop_id" => $shoe->shop_id,
                "price" => $shoe->price,
                "image" => $shoe->image,
                "created" => $shoe->created_at,
                "updated" => $shoe->updated_at,
            ];
        return response()->json($object);
    }

    public function create(Request $request) {
        $data = $request->validate([
            'description' => 'required|min:3',
            'brand' => 'required|numeric|max:99|min:2'
        ]);
        $shoe = Shoe::create([
            'description' => $data['description'],
            'brand' => $data['brand']
        ]);
        if($shoe) {
            $object = [
                "response" => 'Sucess. Item saved correctly.',
                "data" => $shoe,
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

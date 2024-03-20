<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pant;
use Illuminate\Http\Request;

class PantController extends Controller
{
    public function list() {
        $pants = Pant::all();
        $list = [];

        foreach($pants as $pant){
            $object = [
                "id" => $pant->id,
                "description" => $pant->description,
                "brand_id" => $pant->brand_id,
                "shop_id" => $pant->shop_id,
                "price" => $pant->price,
                "image" => $pant->image,
                "created" => $pant->created_at,
                "updated" => $pant->updated_at,
            ];
            array_push($list, $object);
        }
        return response()->json($list);
    }
    public function item($id) {
        $pant = Pant::where('id','=', $id)->first();
            $object = [
                "id" => $pant->id,
                "description" => $pant->description,
                "brand_id" => $pant->brand_id,
                "shop_id" => $pant->shop_id,
                "price" => $pant->price,
                "image" => $pant->image,
                "created" => $pant->created_at,
                "updated" => $pant->updated_at,
            ];
        return response()->json($object);
    }

    public function create(Request $request) {
        $data = $request->validate([
            'description' => 'required|min:3',
            'brand' => 'required|numeric|max:99|min:2'
        ]);
        $pant = Pant::create([
            'description' => $data['description'],
            'brand' => $data['brand']
        ]);
        if($pant) {
            $object = [
                "response" => 'Sucess. Item saved correctly.',
                "data" => $pant,
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

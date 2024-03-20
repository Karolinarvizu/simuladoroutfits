<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function list() {
        $shops = Shop::all();
        $list = [];

        foreach($shops as $shop){
            $object = [
                "id" => $shop->id,
                "name" => $shop->name,
                "logo" => $shop->logo,
                "page" => $shop->page,
                "created" => $shop->created_at,
                "updated" => $shop->updated_at,
            ];
            array_push($list, $object);
        }
        return response()->json($list);
    }
    public function item($id) {
        $shop = Shop::where('id','=', $id)->first();
            $object = [
                "id" => $shop->id,
                "name" => $shop->name,
                "logo" => $shop->logo,
                "page" => $shop->page,
                "created" => $shop->created_at,
                "updated" => $shop ->updated_at,
            ];
        return response()->json($object);
    }
    public function create(Request $request) {
        $data = $request->validate([
            'name' => 'required|min:3',
            'logo' => 'required|numeric|max:99|min:2'
        ]);
        $shop = Shop::create([
            'name' => $data['name'],
            'logo' => $data['logo']
        ]);
        if($shop) {
            $object = [
                "response" => 'Sucess. Item saved correctly.',
                "data" => $shop,
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


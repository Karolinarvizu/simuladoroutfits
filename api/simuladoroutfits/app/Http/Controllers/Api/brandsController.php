<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\brands;
use Illuminate\Http\Request;

class brandsController extends Controller
{
    public function list() {
        $brands = brands::all();
        $list = [];

        foreach($brands as $brand){
            $object = [
                "id" => $brand->id,
                "name" => $brand->name,
                "logo" => $brand->logo,
                "page" => $brand->page,
                "created" => $brand->created_at,
                "updated" => $brand->updated_at,
            ];
            array_push($list, $object);
        }
        return response()->json($list);
    }
    public function item($id) {
        $brand = brands::where('id','=', $id)->first();
            $object = [
                "id" => $brand->id,
                "name" => $brand->name,
                "logo" => $brand->logo,
                "page" => $brand->page,
                "created" => $brand->created_at,
                "updated" => $brand->updated_at,
            ];
        return response()->json($object);
    }
}

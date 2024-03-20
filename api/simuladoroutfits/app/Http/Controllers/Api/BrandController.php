<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Brand as ModelsBrand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function list() {
        $brands = Brand::all();
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
        $brand = Brand::where('id','=', $id)->first();
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
    public function create(Request $request) {
        $data = $request->validate([
            'name' => 'required|min:3',
            'logo' => 'required|numeric|max:99|min:2'
        ]);
        $brand = Brand::create([
            'name' => $data['name'],
            'logo' => $data['logo']
        ]);
        if($brand) {
            $object = [
                "response" => 'Sucess. Item saved correctly.',
                "data" => $brand,
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

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function list() {
        $ratings = Rating::all();
        $list = [];

        foreach($ratings as $rating){
            $object = [
                "id" => $rating->id,
                "vote" => $rating->vote,
                "created" => $rating->created_at,
                "updated" => $rating->updated_at,
            ];
            array_push($list, $object);
        }
        return response()->json($list);
    }
    public function item($id) {
        $rating = Rating::where('id','=', $id)->first();
            $object = [
                "id" => $rating->id,
                "vote" => $rating->vote,
                "created" => $rating->created_at,
                "updated" => $rating ->updated_at,
            ];
        return response()->json($object);
    }

    public function create(Request $request) {
        $data = $request->validate([
            'vote' => 'required|min:3',
        ]);
        $rating = Rating::create([
            'vote' => $data['vote'],
        ]);
        if($rating) {
            $object = [
                "response" => 'Sucess. Item saved correctly.',
                "data" => $rating,
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

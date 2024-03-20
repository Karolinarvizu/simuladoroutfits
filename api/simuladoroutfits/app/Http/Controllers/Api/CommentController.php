<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function list() {
        $comments = Comment::all();
        $list = [];

        foreach($comments as $comment){
            $object = [
                "id" => $comment->id,
                "message" => $comment->message,
                "created" => $comment->created_at,
                "updated" => $comment->updated_at,
            ];
            array_push($list, $object);
        }
        return response()->json($list);
    }
    public function item($id) {
        $comment = Comment::where('id','=', $id)->first();
            $object = [
                "id" => $comment->id,
                "message" => $comment->message,
                "created" => $comment->created_at,
                "updated" => $comment ->updated_at,
            ];
        return response()->json($object);
    }

    public function create(Request $request) {
        $data = $request->validate([
            'message' => 'required|min:3',
        ]);
        $comment = Comment::create([
            'message' => $data['message'],
        ]);
        if($comment) {
            $object = [
                "response" => 'Sucess. Item saved correctly.',
                "data" => $comment,
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


<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Validator;


class PostsController extends Controller
{
     public function index(){

         return Post::all();
     }

   ///////////////////////////////////////////////////

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                "title" => ["required"],
                "body" => ["required"]
            ]
        );

        if ($validator->fails()) {
            return [
                "status" => false,
                "errors" => $validator->messages()
            ];
        }

        $post = Post::create([
            "title" => $request->title,
            "body" => $request->body
        ]);

        return [
            "status" => true,
            "post" => $post
        ];

    }

    public function show($id)
    {
        $post = Post::find($id);
        if (!$post) {
            return response()->json([
                "status" => false,
                "message" => "Post not found"
            ])->setStatusCode(404);
        }

        return $post;
    }




}







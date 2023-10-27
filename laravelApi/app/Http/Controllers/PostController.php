<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts=Post::all();
        $users=User::all();
        return response()->json([
            'status'=>1,
            "message"=>"post publier",
            "data"=>[  $users,$posts]

        ],200);
        }

        public function store(Request $request ,string $id){

        try{

            $data = new Post();
            $array = [
                "user_id" => $request->user_id,
                "text" => $request->text,
                "picture" => $request->picture,
                "video" => $request->video,

            ];
            $data->create($array);

        return response()->json([
            'status'=>1,
            "message"=>"post publier",
            "data"=>$array

        ],200);

        }
        catch(Exeception $exception){
            return response()->json([
                'status'=>1,
                "message"=>"don non enregistrer",


            ],200);

        }
        }
        public function update(Request $request){
            try {
                $data =  Post::find($id);
                $data->text = $request->text;
                $data->picture = $request->picture;
                $data->gender = $request->gender;
                $data->video = $request->video;
                $data->update();
                return response()->json([
                    'status'=>1,
                    "message"=>"modification du post reussir ",


                ],200);


            } catch (Exception $exception) {
                return response()->json([
                    'status'=>1,
                    "message"=>" modification du post echouer ",


                ],200);
            }
        }
        public function destroy(){
            $data = Post::find($id);
            if (!empty($data)) {
                $data->delete();

                // return back();
                return response()->json([
                    'status'=>1,
                    "message"=>" suppression reussir",
                    "data"=>[$data]

                ],404);
            } else {
                return response()->json([
                    'status'=>1,
                    "message"=>" suppression echouer",
                    "data"=>[$data]

                ],404);

                return back();
            }
        }

}

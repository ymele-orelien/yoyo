<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $msg=Message::all();
        $users=Users::all();

    }

    /**
     * Show the form for creating a new resource.
     */
    public function send(Request $request ,string $id){

        try{

            $data = new Message();
            $array = [
                "user_id" => $request->user_id,
                "content" => $request->content,


            ];
            $data->create($array);

        return response()->json([
            'status'=>1,
            "message"=>"message envoyer",
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
                $data =  Message::find($id);
                $data->content = $request->content;

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
            $data = Message::find($id);
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

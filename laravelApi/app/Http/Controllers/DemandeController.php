<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DemandeController extends Controller
{
    public function index(){
$dmd=Demande::all();
$users=User::all();
return response()->json([
    'status'=>1,
    "message"=>"post publier",
    "data"=>[$dmd,$users]

],200);

    }
    public function create(Request $request ){

        try{

            $data = new Demande();

             $data->motif = $request->motif;
                 $data->bloodGroup=$request->bloodGroup;
               $data->poches =$request->poches;

           $data->user_id =Auth::user()->id;
            $data->save();

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
                $data =  Demande::find($id);
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
            $data = Demande::find($id);
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

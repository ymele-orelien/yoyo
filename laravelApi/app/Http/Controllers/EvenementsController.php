<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\parteners;
use App\Models\Evenements;
use Illuminate\Http\Request;

class EvenementsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $evenements=Evenements::all();
    $users=User::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create_event(Request $request,styring $id)
    {
        try{

            $data = new Evenements();
            $array = [
                "user_id" => $request->user_id,
                "theme" => $request->theme,
                "started"=> $request->started,
                "picture"=> $request->picture,




            ];
            $data->create($array);

        return response()->json([
            'status'=>1,
            "message"=>"eveenemets creer",
            "data"=>$array

        ],200);

        }
        catch(Exeception $exception){
            return response()->json([
                'status'=>1,
                "message"=>"evenements non enregistrer",


            ],200);

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Evenements $evenements)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit_event(Evenements $evenements)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_event(Request $request, Evenements $evenements)
    {
        try {
            $data =  Evenements::find($id);
            $data->started = $request->started;
            $data->theme = $request->theme;
            $data->details = $request->detail;
            $data->picture = $request->picture;


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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy_event(){
        $data = Evenements::find($id);
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

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\parteners;
use Illuminate\Http\Request;

class PartenersController extends Controller
{

    public function index (){
$parteners=parteners::all();
$users=User::all();
    }


    public function create(){
        $parteners = parteners::with(['users'])->orderBy('created_at',"DESC")->paginate(15);
        $users=User::all();
    }
    public function store( Request $request){
        try{
            $simple=new parteners([
                'type'=>$request->type,
                'user_id'=>Auth::user()->id

            ]);
            $simple->save();

            ///********relation one to one polymorhs*****\\\\\\\\
            //****************************************\
            $users=new User([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>$request->password,
                'status'=>$request->status,
                'location'=>$request->location,
                'pictures'=>$request->pictures,
                'descriptions'=>$request->descriptions,


            ]);
            //verification par LE JSON
            $simple->users()->save($users);
            return response()->json([
                'status'=>1,
                "message"=>"etudiant  bien cree",
                "data"=>$simple
            ],200);
        }
        catch( Exception $exception){
            return response()->json([
                'status'=>1,
                "message"=>"passe pas",

            ],200);
        }


    }



    public function edit(string $id){
        $parteners=parteners::find($id);
        $users=User::find($id);
        return response()->json([
            'status'=>1,
            "message"=>"passe pas",
            "data"=>[$parteners,$users]

        ],200);
    }
    public function update( Request $request,string $id){
try{
    //recuperation et modification des informations liees aux partenaires
    $parteners=parteners::where( 'id',$id)->exists();
    if($parteners){
    $data=parteners::find($id);
    $data->type=$request->type;
    $data->update();
     //recuperation et modification des informations liees aux users

        $users=User::find($id);
        $users->name=$request->name;
        $users->email=$request->email;
        $users->password=$request->password;
        $users->status=$request->status;
        $users->location=$request->location;
        $users->pictures=$request->pictures;
        $users->descriptions=$request->descriptions;
        $users->update();



       //affichage aux format Json
       return response()->json([
        'status'=>1,
        "message"=>"Modification effectuer",

    ],200);}
}
catch(Exeception $exception){

}
    }
    public function destroy(string $id)
    {
        $data = parteners::find($id);
        if (!empty($data)) {
            $data->delete();
$users=User::find($id);
$users->delete();
            // return back();
            return response()->json([
                'status'=>1,
                "message"=>" suppression reussir",
"data"=>[
    $parteners,$users
]
            ],404);
        } else {

            return back();
        }
    }
}

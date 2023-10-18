<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\simpleUsers;
use Illuminate\Http\Request;

class SimpleUsersController extends Controller
{
    public function create( Request $request)
    {
        try{
            $simple=new simpleUsers([
                'gender'=>$request->gender,
                'bloodGroup'=>$request->bloodGroup,
                'dateBirth'=>$request->dateBirth,
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
    public function update(Request $request, string $id){
        try{
             //recuperation et modification des informations liees aux simpleUsers
$simple=simpleUsers::where( 'id',$id)->exists();
if($simple){
    $data=simpleUsers::find($id);
$data->gender=$request->gender;
$data->bloodGroup=$request->bloodGroup;
$data->dateBirth=$request->dateBirth;
$data->update();
$users=User::find($id);
$users->name=$request->name;
$users->email=$request->email;
$users->password=$request->password;
$users->status=$request->status;
$users->location=$request->location;
$users->pictures=$request->pictures;
$users->descriptions=$request->descriptions;
$users->update();
}

//affichage aux format Json
return response()->json([
    'status'=>1,
    "message"=>" Modification effectuer avec success",
    "data"=>$simple && $users

],404);
        }
        catch(Exeception $exception){

        }

    }
    public function destroy(string $id)
    {
        $data = simpleUsers::find($id);
        if (!empty($data)) {
            $data->delete();
$users=User::find($id);
$users->delete();
            // return back();
            return response()->json([
                'status'=>1,
                "message"=>" suppression reussir",

            ],404);
        } else {

            return back();
        }
    }
}

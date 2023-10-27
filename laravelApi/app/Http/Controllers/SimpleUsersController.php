<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\simpleUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;


class SimpleUsersController extends Controller
{



    public function index()
    {
        $simple=simpleUsers::all();
        $users=User::with(["usersable"])->get();
        return response()->json([
            'status'=>1,
            "message"=>" Affichage reussir",
            "simpleUsers"=>$users

        ],200);

    }


    public function create()

    {
        $simple = simpleUsers::with(['users'])->orderBy('created_at',"DESC")->paginate(15);
        $users=User::all();

    }


    public function register( Request $request){
        try{
             //validation
            $validation=Validator::make($request->all(),[
            'name'=>'required|max:191',
            'email'=>"required|unique|max:191",
            'password'=>"required",

            'gender'=>'required|max:191',
                'bloodGroup'=>"required|max:3",
                'dateBirth'=>"required|max:191",
            ]);
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
                'phone'=>$request->phone,

            ]);

            ///////////verification par LE JSON\\\\\\\\\\\\\\\\\\
            $simple->users()->save($users);
            return response()->json([
                'status'=>422,
                'message'=>'etudiant cree avec success',
                "data"=>[ $simple]

            ],422);
        }

        catch( Exception $exception)
        {
            return response()->json([
                'status'=>422,
                "errors"=>$validation->messages(),

            ],422);
        }


    }




    /////////////////

    public function edit(string $id){
        $simple=simpleUsers::find($id);
        $users=User::find($id);
        return response()->json([
            'status'=>1,
            "message"=>"passe pas",
            "data"=>[$simple,$users]

        ],200);
    }

    ///////////////////

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
    "data"=>[$simple, $users]

],404);
        }
        catch(Exeception $exception){

        }

    }

    //////////////////////////////////////

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
                "data"=>[$data,$users]

            ],404);
        } else {

            return back();
        }
    }
//     public function login(Request $request,string $id):RedirectResponse
//     {

//         $credentials = $request->validate([
//             'email' => ['required', 'email'],
//             'password' => ['required'],
//             'active'=>['1']
//         ]);
//         $users=User::all();


//         if (Auth::attempt($credentials)) {
//             $request->session()->regenerate();
//             return response()->json([
//                 'status'=>422,
//                 'message'=>'connexion effectuer',
//                 "data"=>[ $users]

//             ],422);

//         }

// }
}

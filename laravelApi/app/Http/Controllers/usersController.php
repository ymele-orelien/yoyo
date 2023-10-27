<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\simpleUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class usersController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

$users=User::all();
return response()->json([
    'status'=>1,

    "data"=>[$users]

],404);

    }

    /**
     * Show the form for creating a new resource.
     */

 public function login(Request $request)
    {
$request->validate([
    'name'=>"max:200|min:30",
    'email'=>'required|email',
    'password'=>'required'
]);
//verifier si l'uitisateur existe
$users=User::where('email','=',$request->email)->first();


if($users){
 if(Hash::check($request->password, $users->password)){
$token=$users->createToken('auth_token')->plainTextToken;
return response()->json([
    'status'=>1,
'message'=>'connexion',
'access_token'=>$token

]);
}else{
    return response()->json([
        'status'=>1,
    'message'=>'le mo de passe es incorrete',
'access_token'=>$token

    ]);

}

}else{
    return response()->json([
        'status'=>1,
    'message'=>'l\'email est introuvable'


    ]);

}





}
public function profile(Request $request){

    return response()->json([
        'status'=>1,
    'message'=>'informaions du profiles',
'data'=>Auth::user()

    ]);
}

public function logout(Request $request){


    Auth::user()->tokens()->delete();
    return response()->json([
        'status'=>1,
    'message'=>'Deconnexion reussie',


    ]);
}
}


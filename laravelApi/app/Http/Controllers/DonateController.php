<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Donate;
use Illuminate\Http\Request;

class DonateController extends Controller
{
public function index(){
$donates=Donate::all();
$users=User::all();
return response()->json([
    'status'=>1,
    "message"=>"don enregistrer",
    "data"=>[$donates,$users]

],200);
}

public function store(Request $request ,string $id){

try{

    $data = new Donate();
    $array = [
        "user_id" => $request->user_id,
        "detail" => $request->detail,
        "bloodGroup" => $request->bloodGroup,
        "poches" => $request->poches,
        "montant" => $request->montant,
    ];
    $data->create($array);

return response()->json([
    'status'=>1,
    "message"=>"don enregistrer",
    "data"=>[$data]

],200);

}
catch(Exeception $exception){
    return response()->json([
        'status'=>1,
        "message"=>"don non enregistrer",


    ],200);

}
}
}

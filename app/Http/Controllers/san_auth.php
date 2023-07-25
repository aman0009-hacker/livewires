<?php

namespace App\Http\Controllers;


use Illuminate\Auth\response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class san_auth extends Controller
{
    //   public function login(request $req)
    // {

    //     $validation = validator::make($req->all(), [
    //         "name" => "required",
           
    //         "password" => "required",
           
    //     ]);
    //     if ($validation->fails()) {
    //         return response()->json($validation->errors(), 401);
    //     }

    //     $data = Auth::user();
    //     $success['token'] = $data->createToken('my-app-token')->plainTextToken;
    //     $success['name'] = $data->name;

    //     $response = [
    //         "status" => true,
    //         'data' => $success,
    //         "message" => "Data register successfully"
    //     ];
    //     return response()->json($response, 200);
        
      
    // }
    public function register(Request $req)
    {
        $validation=validator::make($req->all(),[
            "name"=>"required",
            "email"=>"required|email",
            "password"=>"required",
            "con_password"=>"required|same:password",
        ]);
        if($validation->fails())
        {
            return response()->json($validation->errors(),401);
            //  $response=[
            //     "status"=>"401",
            //     "message"=>$validation->errors()
            // ];
            // return $response();
            
        }
        $data=$req->all();
      $data['password']=hash::make($data['password']);
      $table=user::create($data);
      
      $success['token']= $table->createToken('my-app-token')->plainTextToken;
        $success['name']=$table->name;
        
         $response=[
            "status"=>true,
            'data'=>$success,
            "message"=>"Data register successfully"
         ];
         return response()->json($response,200);
    }
  
}
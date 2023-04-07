<?php

namespace App\Http\Controllers\FE\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function LoginProcess(Request $request)
    {
        $lStatus = false;
        $cUsername = UserModel::where("username", $request->username)->count();

        if($cUsername < 1){
            $lStatus = false;
        }else{
            $userDataFromDb = UserModel::where("username", $request->username)->first();
            if (Hash::check($request->password, $userDataFromDb->password)) {
                $lStatus = true;
            }
        }

        $dr = [
            "success" => $lStatus
        ];

        return \Response::json($dr);
    }
}

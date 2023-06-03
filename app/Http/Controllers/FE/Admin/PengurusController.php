<?php

namespace App\Http\Controllers\FE\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\UserModel;

class PengurusController extends Controller
{
    public function PengurusData()
    {
        $dataUser = UserModel::all();
        echo "tes pengurus data";
    }
}

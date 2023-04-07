<?php

namespace App\Http\Controllers\FE\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function LoginPage()
    {
        return view('admin.auth.loginPage');
    }
}

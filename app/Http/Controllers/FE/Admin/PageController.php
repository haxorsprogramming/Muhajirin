<?php

namespace App\Http\Controllers\FE\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PageController extends Controller
{
    private string $year;

    public function __construct()
    {
        $this->year = Carbon::now()->format("Y");
    }

    public function LoginPage()
    {
        return view('admin.auth.loginPage');
    }
    public function DashboardPage()
    {
        $dr = [
          'year' => $this->year
        ];
        return view('admin.app.dashboardPage', $dr);
    }
}

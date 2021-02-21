<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

use Illuminate\Routing\Controller as BaseController;

class DashboardController extends BaseController
{
    public function index(){
        return view('dashboard.index');
    }
    public function applyform(){
        return view('dashboard.form');
    }
}

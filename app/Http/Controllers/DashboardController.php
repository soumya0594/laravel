<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\District;

use Illuminate\Routing\Controller as BaseController;

class DashboardController extends BaseController
{
    public function index(){
        return view('dashboard.index');
    }
    public function applyform(){
        $data = array();
        $data['district'] = District::all();
        $data['caste'] = District::getcaste('SC');
        return view('dashboard.form',['data'=>$data]);
    }
    public function getsubdivision(Request $request){
        $input = $request->all();
        $getdivisions= District::getsubdivision($input['id']);
        return $getdivisions;
    }
    public function pre_SubDivision(Request $request)
    {
        $input = $request->all();
        $data = District::pre_SubDivision($input);
        return $data;
    }
}

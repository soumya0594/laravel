<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\URL;
use App\Models\District;

use Illuminate\Routing\Controller as BaseController;

class DashboardController extends BaseController
{
    public function index(){
        // echo URL::to('/');exit;
        return view('dashboard.index');
    }
    public function applyform(){
        $data = array();
        $data['state'] = District::getstate();
        $data['district'] = District::getdistrict(8);
        $data['caste'] = District::getcaste('SC');
        return view('dashboard.form',$data);
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
    public function get_caste(Request $request)
    {
        $input = $request->all();
        $data = isset($input['subObc']) ? District::getcaste($input['caste'], $input['subObc']) : District::getcaste($input['caste']);
        return $data;
    }
}

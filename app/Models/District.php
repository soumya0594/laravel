<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class District extends Model
{
    protected $table = 'dist_mst';
    protected $primaryKey = 'id';

    protected static function getdistrict($state_id)
    {
        $result = DB::table('dist_mst')->select('id', 'name')->where(['state_id' => $state_id])->get();
        return $result;
    }
    protected static function getsubdivision($dist_id){
        if($dist_id=='' || $dist_id <0 || $dist_id>27 ){
            return false;
        }else{
            $subdivisions= DB::table('sub_div_mst')->select('id','dist_id','name')->where(['dist_id'=>$dist_id])->get();
            return response()->json($subdivisions);
        }
    }
    protected static function pre_SubDivision($inputValue){
        if($inputValue['selectOption']== 'municipality'){
            $result = DB::table('municipality_mst')->select('id', 'sub_div_id', 'name')->where(['sub_div_id' => $inputValue['id']])->get();
            return response()->json($result);
        }elseif ($inputValue['selectOption'] == 'block') {
            $result = DB::table('block_mst')->select('id', 'sub_div_id', 'name')->where(['sub_div_id' => $inputValue['id']])->get();
            return response()->json($result);
        }elseif ($inputValue['selectOption'] == 'policeStation') {
            $result = DB::table('p_station_mst')->select('id', 'dist_id', 'name')->where(['dist_id' => $inputValue['id']])->get();
            return response()->json($result);
        }else {
            return false;
        }
    }
    protected static function getcaste($m_caste,$s_caste=null){
        if(!empty($m_caste)){
            if(!isset($s_caste)){
                $result = DB::table('caste_or_tribe_mst')->select('id', 'c_name')->where(['m_caste_name' => $m_caste])->get();
                return $result;
            }else{
                $result = DB::table('caste_or_tribe_mst')->select('id', 'c_name')->where(['m_caste_name' => $m_caste, 's_caste_name'=> $s_caste])->get();
                return response()->json($result);
            }
        }else {
            return false;
        }
    }
    protected static function getstate()
    {
        $result = DB::table('state_mst')->select('id', 'name')->get();
        return $result;
    }

}

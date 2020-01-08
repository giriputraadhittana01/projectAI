<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class loginController extends Controller
{
    public function index(Request $request){
        $data=DB::select('select * from user where user_id='.$request->id.'');
        Session::put('user_id',$request->id);
        
        return view('backend.components.login',compact('data'));
    }
   public function saveRecord(Request $request)
   {
    $msg="";
    $bool=1;
    try
    {
        $user=DB::select('select weight,height,body_type,gender from user where user_id='.Session::get('user_id').'');
        if($user[0]->weight==0&&$user[0]->height==0)
        {
            DB::table('user')->where('user_id', Session::get('user_id'))->update([
                'weight' => $request->weight,
                'height' => $request->height,
            ]);
        }   
        DB::table('history')->insert([
                'user'   => Session::get('user_id'),
                'weight' => $request->weight,
                'height' => $request->height,
        ]);
        $msg="Record Has Been Saved";
        $bool=0;
    }
    catch(Exception $e)
    {
        $msg="Error";
        $bool=1;
    }
    $array = array(
        0 => array(
            'msg'        => $msg,
            'disp_error' => $bool,
        )
    );
    return $array;
   }
   public function getRecord(Request $request)
   {
    $msg="";
    $bool=1;
    try
    {
        $user=DB::select('select weight,height,body_type,gender from user where user_id='.Session::get('user_id').'');
        $base=DB::select('
            select * 
                from base
                where '.$user[0]->height.' between start_height and end_height
                and body_type='.$user[0]->body_type.'
                and gender='.$user[0]->gender.'
        ');   
        
        $result=(int)($base[0]->start_weight+$base[0]->end_weight)/2;
        $data=DB::select('select * from history where user='.Session::get('user_id').'');
        for($i=0;$i<sizeof($data);$i++)
        {
            $temp=($data[$i]->weight/(int)$result)*100;
            $chartData[$i]=array(
                'result' => $temp,
            );
        }
        $msg="Success";
        $bool=0;
    }
    catch(Exception $e)
    {
        $msg="Error";
        $bool=1;
    }
    $array = array(
        0 => array(
            'msg'        => $msg,
            'disp_error' => $bool,
            'base'       => $result,   
            'data'       => $chartData   
        )
    );
    return $array;
   }
}
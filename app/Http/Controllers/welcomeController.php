<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class welcomeController extends Controller
{
    public function index(Request $request){
        return view('welcome');
    }
    public function getBodyInformation(Request $request){
        $data=DB::select('
            select * 
                from base
                where '.$request->height.' between start_height and end_height
                and body_type='.$request->body_type.'
                and gender='.$request->gender.'
        ');   
        return $data;
    }
    public function signUp(Request $request)
    {
        $bool=0;
        $msg="";
        $exist=DB::select('select * from user where email="'.$request->email.'"');
        if($exist==null)
        {
            try
            {
                DB::table('user')->insert([
                    'username'    => $request->username,
                    'email'       => $request->email,
                    'pass'        => $request->password,
                    'gender'      => $request->gender,
                    'age'         => $request->age,
                    'body_type'   => $request->body_type
                ]);
                $msg="Account Has Been Created";
                $bool=0;
            }
            catch(Exception $e)
            {   
                $msg="Error";
                $bool=1;
            }
        }   
        else
        {
            $msg="Email Has Been Used";
            $bool=1;
        }
        $array = array(
            0 => array(
                'msg'        => $msg,
                'disp_error' => $bool
            )
        );
        return $array;
    }

    function signIn(Request $request)
    {
        $exist=DB::select('select * from user where email="'.$request->email.'" and pass="'.$request->password.'"');
        $msg="";
        $bool=1;
        if($exist!=null)
        {
            $msg=$exist[0]->user_id;
            $bool=0;
        }
        else
        {
            $msg='Email Or Password Invalid';
            $bool=1;
        }
        $array = array(
            0 => array(
                'msg'        => $msg,
                'disp_error' => $bool
            )
        );
        return $array;
    }
    public function sendEmail(Request $request)
    {
        $name       = $request->name;
        $email      = $request->email;
        $phone      = $request->phone;
        $message    = $request->message;
        Mail::to($email)->send(new SendMailable($name,$message,$phone,$email));
        $response='Email was sent';
        return response()->json($response);
    }
}
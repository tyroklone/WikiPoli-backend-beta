<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Validator;


class SuperController extends Controller{


    public function convert_to_admin(Request $request,$email){

        if(Auth::check()){

            $user= Auth::user();
            if ($user['status_id']!=3){

                $resp=response()->json([
                    'msg' => 'You are not a super admin',
                    'status' => '401'
                ]);
                echo $resp;
            }else{
                
                if(DB::table('users')->where('email', $email)->exists()){

                    if(DB::table('users')->where('email', $email)->update(['status_id' => 1])){

                        $resp=response()->json([
                            'msg' => $email.' is now an admin',
                            'status' => '200'
                        ]);
                        echo $resp;

                    }else{

                        $resp=response()->json([
                            'msg' => 'Server Error',
                            'status' => '404'
                        ]);
                        echo $resp;
                    }

                }else{

                    $resp=response()->json([
                        'msg' => 'Not found',
                        'status' => '401'
                    ]);
                    echo $resp;
                }
        
            }
        }else{

            $resp=response()->json([
                'msg' => 'You are not logged in',
                'status' => '401'
            ]);
        }
    }


    public function revert_to_user(Request $request,$email){

        if(Auth::check()){

            $user= Auth::user();
            if ($user['status_id']!=3){

                $resp=response()->json([
                    'msg' => 'You are not a super admin',
                    'status' => '401'
                ]);
                echo $resp;
            }else{
                
                if(DB::table('users')->where('email', $email)->exists()){

                    if(DB::table('users')->where('email', $email)->update(['status_id' => 2])){

                        $resp=response()->json([
                            'msg' => $email.' is now a user',
                            'status' => '200'
                        ]);
                        echo $resp;

                    }else{

                        $resp=response()->json([
                            'msg' => 'Server Error',
                            'status' => '404'
                        ]);
                        echo $resp;
                    }

                }else{

                    $resp=response()->json([
                        'msg' => 'Not found',
                        'status' => '401'
                    ]);
                    echo $resp;
                }
        
            }
        }else{

            $resp=response()->json([
                'msg' => 'You are not logged in',
                'status' => '401'
            ]);
        }
    }





}






?>
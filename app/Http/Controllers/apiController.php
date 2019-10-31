<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
class apiController extends Controller
{
    /*public function create(Request $request)
	{
		$users = new user();

		$users->full_name = $request->input('full_name');
		$users->username = $request->input('username');
		$users->email = $request->input('email');
		$users->password = $request->input('password');
		$users->status_id = $request->input('status_id');
		$users->priviledge_id = $request->input('priviledge_id');
		
		$users->save();
		return response()->json($users);
	}*/



    public function search(Request $request)
	{
		$search = $request->get('search');
		$users = user::where('full_name', 'like', '%'.$search.'%')->paginate(5);
		return response()->json($users);
		//return view('index', ['users'=>$users]);
	}


}

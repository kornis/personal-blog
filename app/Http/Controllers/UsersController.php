<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
	public function index(){
		$users = User::orderBy('id','ASC')->paginate(5);
		return view('admin.users.index')->with('users',$users);
	}
   public function create()
   {
   	return view('admin.users.create');
   }

   public function store(Request $request)
   {
   	$type = $request->type;

   	$user = new User($request->all());
   	
   	$user->password = bcrypt($request->password);
   	$user->type = $type;
   	$user->save();
   	$success='added';
   	
   	return redirect()->route('users.index');
   }

   public function destroy($id){
   		$user = User::find($id);
   		$user->delete();
   		$success="destroy";
   		return redirect()->route('users.index');
   }
}

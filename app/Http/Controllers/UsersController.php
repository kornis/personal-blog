<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequest;

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

   public function store(UserRequest $request)
   {
   	$type = $request->type;

   	$user = new User($request->all());
   	
   	$user->password = bcrypt($request->password);
   	$user->type = $type;
   	$user->save();
   	$success='<div class="alert alert-success alert-dismissible fade show" role="alert">
				  <strong>Usuario creado con éxito!</strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				  </button>
			      </div>';
   	
   	return redirect()->route('users.index')->with('success',$success);
   }

   public function destroy($id){
   		$user = User::find($id);
   		$user->delete();
   		$success='<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  <strong>Usuario eliminado con éxito</strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				  </button>
			      </div>';
   		return redirect()->route('users.index')->with('success',$success);
   }

   public function update(Request $request, $id){
   		$user = User::find($id);
   		$user->name = $request->name;
   		$user->email = $request->email;
   		$user->type = $request->type;
   		$user->save();

   		$success='<div class="alert alert-success alert-dismissible fade show" role="alert">
				  <strong>Usuario editado con éxito!</strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				  </button>
			      </div>';
   		return redirect()->route('users.index')->with('success',$success);
     }

   public function edit($id)
   {
   	$user = User::find($id);
   	return view('admin.users.edit')->with('user',$user);
   }
}

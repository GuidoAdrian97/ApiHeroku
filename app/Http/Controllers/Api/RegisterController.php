<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
class RegisterController extends Controller
{
   public function register(Reques $request)
   {
   	$this->validate($request,[
   	'email' => 'required|email|unique:users',
   	'name' => 'required',
   	'password' => 'required',
   ]);


   	$this-> User::create([
   	'email' => $request->email,
   	'name' => $request->name,
   	'password' => bcrypt($request->password),
   ]);

   	return response()->json([
   		'mesage'=> 'Usuario creado correctamente',
   		'user'=> $user->toArray(),
   	]);

   }
}

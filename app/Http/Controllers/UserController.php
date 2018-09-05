<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUserForm(){
        return view('Admin.user.add-user');
    }
    public function addUser(Request $request){
        $userregister = new User();
        $userregister->name = $request->name;
        $userregister->email = $request->email_address;
        if($request->password == $request->confirm_password){
            $userregister->password = $request->password;
        }else{
            return redirect('/user/add')->with('message', 'Password and Confirm Password Not Mutch');
        }
        $userregister->save();
        return redirect('/user/add')->with('message', 'Save User Info Successful');
    }
}

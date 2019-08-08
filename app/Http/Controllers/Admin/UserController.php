<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{


    public function changeuserinfo()
    {
        return view('admin.userinfo');

    }

    public function getuserinfo()
    {
        return auth()->user();
    }

    public function saveuserinfo(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'oldpass' => 'required|min:8',
            'newpass' => 'required|min:8',
            'repass' => 'required|min:8',
        ]);
        if(Hash::check($request->oldpass, auth()->user()->password))
        {
            if ($request->newpass == $request->repass) {
                $save = User::where('id', auth()->user()->id)->first();

                $save->name = $request->name;
                $save->email = $request->email;
                $save->password = bcrypt($request->newpass);

                $save->save();

                $action = 'true';
                return $action;
            }else{
                return 'foo';
            }
        }else{
            return 'bar';
        }





    }}

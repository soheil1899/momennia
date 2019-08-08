<?php

namespace App\Http\Controllers\Admin;

use App\Permission;
use App\Role;
use App\User;
use App\Userinfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {

        return view('admin.dashboard');
    }


    public function getpermissions(Request $request)
    {

    }


    public function getmyinfo()
    {
        $userid = auth()->user()->id;
        return view('admin.myinfo', compact('userid'));
    }

    public function getmyinfos(Request $request)
    {
        $user = User::where('id', $request->userid)->first();
        $userinfo = Userinfo::where('user_id', $request->userid)->first();

        $city = file_get_contents("Province.json");
        $city = json_decode($city, true);

        return [$user, $userinfo, $city];
    }

}

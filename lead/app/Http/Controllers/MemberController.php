<?php

namespace App\Http\Controllers;

use App\Models\RoleManager;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class MemberController extends Controller
{
    public function allUser(){
        $all_user = User::all();
        return view('admin.member.users_all',[
            "all_user"=>$all_user,
        ]);
    }

    public function create()
    {
        $all_role = RoleManager::all();
        return view('admin.member.users_new',[
            "all_role"=>$all_role,
        ]);
    }

    public function store(Request $request)
    {

        $request->validate([
            "name"=>'required',
            "email"=>'required|unique:users,email',
            "phone"=>'required',
            "role"=>'required',
            "password"=>'required',
            "picture"=>'required',
        ]);

        $newID = User::insertGetId([
            "name"=>$request->name,
            "email"=>$request->email,
            "phone"=>$request->phone,
            "role"=>$request->role,
            "password"=>Hash::make($request->password),
        ]);

        $picture = str_replace(" ","-",$request->name).rand(1,9999).".".$request->picture->getClientOriginalExtension();
        Image::make($request->picture)->fit(600, 600)->save(public_path('uploads/users/'.$picture));

        User::where('id', $newID)->update([
            "picture"=>$picture,
        ]);

        return redirect(route('admin.member.all'));
    }
}

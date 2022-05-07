<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function create(){
        return \view('admin.member.add-member');
    }

    public function store(Request $request)
    {
        print_r($request->role);
    }
}

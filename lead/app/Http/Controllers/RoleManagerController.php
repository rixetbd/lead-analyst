<?php

namespace App\Http\Controllers;

use App\Models\RoleManager;
use Carbon\Carbon;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class RoleManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_role = RoleManager::all();
        return view('admin.member.role',[
            'all_role'=>$all_role,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            "name"=>'required|unique:role_managers,name',
            "read"=>'required',
            "write"=>'required',
            "create"=>'required',
            "delete"=>'required',
        ]);

        RoleManager::insert([
            "name"=>$request->name,
            "read"=>$request->read,
            "write"=>$request->write,
            "create"=>$request->create,
            "delete"=>$request->delete,
            "created_at"=>Carbon::now(),
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RoleManager  $roleManager
     * @return \Illuminate\Http\Response
     */
    public function show(RoleManager $roleManager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RoleManager  $roleManager
     * @return \Illuminate\Http\Response
     */
    public function edit(RoleManager $roleManager)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RoleManager  $roleManager
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoleManager $roleManager)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RoleManager  $roleManager
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoleManager $roleManager)
    {
        //
    }
}

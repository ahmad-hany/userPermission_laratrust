<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:super_admin, sub_admin']);
        // $this->middleware(['role:sub_admin']);
    }

    public function index(){

        $admins = User::all();

        return view('admins.index', compact('admins'));
    }

    public function edit(User $admin){

        return view('admins.edit', compact('admin'));
    }

    public function update(Request $request, User $admin){

        $request->validate([
            // 'name' => 'required',
            'roles' => 'required'
        ]);

        $requestData = $request->except('name', 'email');
        $admin ->update($requestData);

        $admin->syncRoles($request->roles);

        return redirect()->route('admins.index');
    }
}

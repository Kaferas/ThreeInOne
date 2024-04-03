<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterRequest;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->get();
        return view("admin.users.index", ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::orderBy('id', 'DESC')->get();
        return view("admin.users.add", ['roles' => $roles]);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRegisterRequest $request)
    {
        $user = User::create([
            "name" => $request->get('name'),
            "phone_number" => $request->get('phone_number'),
            "adresse" => $request->get('adresse'),
            "email" => $request->get('email'),
            "password" => Hash::make($request->get('password'))
        ]);
        RoleUser::create([
            'user_id' => $user->id,
            'role_id' => $request->get('role_user')
        ]);
        return redirect("users_")->with('success', "Utilisateurs cree avec Success");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRegisterRequest $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

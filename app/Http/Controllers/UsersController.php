<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::get();
        return response()->json(['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::create($request->input());
        return response(['code' => 200, 'message' => 'User saved']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        $user = User::find($id);
        if(!$user) return response(['code' => 404, 'message' => 'User not found'], 404);
        return response()->json(['user' => $user]);
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
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        if(!$user) return response(['code' => 404, 'message' => 'User not found'], 404);
        $user->update($request->input());
        return response(['code' => 200, 'message' => 'User updated']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        if(!$user) return response(['code' => 404, 'message' => 'User not found'], 404);
        $user->delete();
        return response(['code' => 200, 'message' => 'User deleted']);
    }
}

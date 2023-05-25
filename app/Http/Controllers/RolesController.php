<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return response()->json(['roles' => $roles]);
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
        $role = Role::create($request->input());
        return response(['code' => 200, 'message' => 'role saved']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $role = Role::find($id);
        $role = Role::find($id);
        if(!$role) return response(['code' => 404, 'message' => 'role not found'], 404);
        return response()->json(['role' => $role]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $role = Role::find($id);
        if(!$role) return response(['code' => 404, 'message' => 'role not found'], 404);
        $role->update($request->input());
        return response(['code' => 200, 'message' => 'role updated']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::find($id);
        if(!$role) return response(['code' => 404, 'message' => 'role not found'], 404);
        $role->delete();
        return response(['code' => 200, 'message' => 'role deleted']);
    }
}

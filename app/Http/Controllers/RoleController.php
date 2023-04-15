<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::latest()->get();
        return view('roles.index',compact('roles')); 
    } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['role'=>'required']);
        $role = Role::create(['name' => $request->input('role')]);
        return to_route('roles.index')->with('success','Role has been successfully Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        $permissions = Permission::latest()->get();
        $notSelectedPermissions = Permission::whereNotIn('name',$role->getPermissionNames())->get();        
        $selectedPermissions = Permission::whereIn('name',$role->getPermissionNames())->get();
        return view('roles.view',compact('role','notSelectedPermissions','selectedPermissions','permissions'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        return view('roles.edit',compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $request->validate(['role'=>'required']);
        $role->update(['name' => $request->input('role')]);
        return to_route('roles.index')->with('success','Role has been successfully Updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return to_route('roles.index')->with('error','Role deleted successfully.');
    }

    /**
     * Assign permissions to roles
     */
    public function assignPermissions(Request $request,Role $role)
    {
        $role->syncPermissions($request->input('permission'));
        return to_route('roles.index')->with('success','Permissions has been successfully Assigned to '.$role->name);
    }
}

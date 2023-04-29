<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use App\Models\ModelPermit;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::latest()->get();
        return view('permissions.index',compact('permissions')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $models = ModelPermit::pluck('model_name')->toArray();
        $permissionTypes = ['create','update','delete','view'];
        return view('permissions.create',compact('models','permissionTypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $type = strtolower($request->input('type'));
        $model = strtolower($request->input('model'));
        $permission =  $type.'-'.$model;

        $request->validate([
            'type' => ['required',function($attr,$val,$fail) use($permission) {
                 if(Permission::where('name',$permission)->exists()) {
                    $fail('The permission has already been taken.');
                 }
            }],
            'model' => 'required',
        ]);

        $permission = Permission::create(['name' =>$permission]);
        return to_route('permissions.index')->with('success','Permission has been successfully Created');
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
    public function edit(Permission $permission)
    {
        $models = ModelPermit::pluck('model_name')->toArray();
        $permissionTypes = ['create','update','delete','view'];

        return view('permissions.edit',compact('permission','models','permissionTypes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permission $permission)
    {
        $type = strtolower($request->input('type'));
        $model = strtolower($request->input('model'));
        $permissionInput =  $type.'-'.$model;

        
        $request->validate([
            'type' => ['required',function($attr,$val,$fail) use($permissionInput) {
                 if(Permission::where('name',$permissionInput)->exists()) {
                    $fail('The permission has already been taken.');
                 }
            }],
            'model' => 'required',
        ]);

        // $models = ModelPermit::pluck('model_name')->toArray();
        // $request->validate([
        //     'permission'=>['required','unique:permissions,name,'.$permission->id,function($attribute,$val,$fail) use($models) {
        //         $explode = explode('-',$val);
        //         if (reset($explode) != 'create' && reset($explode) != 'update' &&  reset($explode) != 'delete' &&  reset($explode) != 'view') {
        //             $fail('The first word should be one of the allowed words(create,update,delete,view)');
        //         }

        //         $explode_null = array(null);
        //         $input_data_array = array_diff($explode, $explode_null);
        //         if(!in_array(end($input_data_array),$models)) {
        //             $fail('Model does not exist, Please create the model and then you are able to create permission for them');
        //         }
        //     }]
        // ]);

        $permission->update(['name' =>$permissionInput]);
        return to_route('permissions.index')->with('success','Permission has been successfully Updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        return to_route('permissions.index')->with('error','Permission deleted successfully.');
    }
}

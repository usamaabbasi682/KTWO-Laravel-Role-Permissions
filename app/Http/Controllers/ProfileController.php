<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth,Validator,Hash};
use Spatie\Permission\Models\Role;
use App\Models\User; 

class ProfileController extends Controller
{
    /**
     * Show the form for creating the resource.
     */
    public function create(): never
    {
        abort(404);
    }

    /**
     * Store the newly created resource in storage.
     */
    public function store(Request $request): never
    {
        abort(404);
    }

    /**
     * Display the resource.
     */
    public function show()
    {
        if (isset(Auth::user()->getRoleNames()[0])) {
            $role = Role::where('name',Auth::user()->getRoleNames()[0])->first();   
        } else {
            $role = [];
        }
        $image=auth()->user()->getMedia('profile')->first();

        return view('profile.index',compact('role','image'));
    }

    /**
     * Show the form for editing the resource.
     */
    public function edit()
    {
        abort(404);
    }

    /**
     * Update the resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'fname' => 'required|max:255',
            'lname' => 'max:100',
            'phone' => 'nullable|digits:11',
        ]);

        Auth::user()->update([
            'name' => $request->input('fname'),'lname' => $request->input('lname'),
            'phone' => $request->input('phone'),
        ]);

        if ($request->hasFile('avatar')) {
            $image=auth()->user()->getMedia('profile')->first();
            if (!empty($image)) {
                $image->delete();
            }

            auth()->user()->addMediaFromRequest('avatar')->toMediaCollection('profile');
        } 

        return to_route('profile.show')->with('success','Profile update Successfully.');
    }

    /**
     * Remove the resource from storage.
     */
    public function destroy(Request $request)
    {
        $request->validate([
            'deactivate' => 'required'
        ],[
            'deactivate.required' => 'Please confirm for Account Deletion!!'
        ]);

        Auth::user()->delete();
        return to_route('login');
    }

    public function change_email(Request $request,User $user) 
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required',
        ];

        $messages = [];
        $attributes = [
            'password' => 'confirm password'
        ];

        $validator = Validator::make($request->all(),$rules,$messages,$attributes);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('email')) {
                echo $errors->first('email');
            }else {
                echo $errors->first('password');
            }
        } else {
            if (!Hash::check($request->input('password'), $user->password)) {
                echo "Please enter the correct password!";
            } else {
                $user_update=$user->update([
                    'email' => $request->input('email'),
                ]);
                echo 1;
            }
        }
    }


    public function change_password(Request $request,User $user) {
        $rules = [
            'current_password' => ['required',function($attribute,$val,$fail)use($user) {
                if (!Hash::check($val, $user->password)) {
                    $fail('Please enter the correct password!');
                }
            }],
            'new_password' => ['required'],
            'confirm_password' => ['required','same:new_password'],
        ];

        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('current_password')) {
                echo $errors->first('current_password');
            } elseif($errors->has('new_password')) {
                echo $errors->first('new_password');    
            } else {
                echo $errors->first('confirm_password');  
            }
        } else {
            $user_update=$user->update([
                'password' => Hash::make($request->input('new_password')),
            ]);
            echo 1;
        }

    }
}

<?php 
namespace App\Repositories;

use App\Repositories\Interfaces\UserRepoInterface;
use App\Http\Requests\User\{UserAddRequest,UserEditRequest};
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserRepository implements UserRepoInterface
{
    public function create_user(UserAddRequest $request)
    {
        if ($request->has('verify')) {
            $verified = now();
        }else {
            $verified = null;
        }
        
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'email_verified_at' => $verified,
        ]);

        $user->assignRole($request->input('role'));

        if ($user){
            return true;
        } else {
            return false;
        }
    }

    public function update_user(UserEditRequest $request,$user) {

        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);

        if ($request->input('user_selected_role') != $request->input('role')) {
            $user->syncRoles($request->input('role'));
        } 

        if ($user) {
            return true;
        } else {
            return false;
        }
    
    }
}
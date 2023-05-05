<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\{User,ModelPermit};

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total_users = User::count();
        $total_roles = Role::count();
        $total_permissions = Permission::count();
        $total_models = ModelPermit::count();
        $loginUsers = User::loginUsers()->get();
        $loginUsersCount = User::loginUsers()->count();
        return view('home',compact('total_users','total_roles','total_permissions','total_models','loginUsers','loginUsersCount'));
    }
}

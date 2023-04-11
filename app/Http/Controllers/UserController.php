<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Requests\User\{UserAddRequest,UserEditRequest};
use App\Repositories\UserRepository;
use App\Models\User;

class UserController extends Controller
{

    public function __construct(protected UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::latest()->get();
        $roles = Role::orderBy('name')->get();
        return view('users.index',compact('users','roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::orderBy('name')->get();
        return view('users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserAddRequest $request)
    {
        $response = $this->userRepository->create_user($request);
        if ($response) {
            return to_route('users.index')->with('success','User has been successfully Added');
        } 
        return to_route('users.index')->with('error','Something went wrong!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return to_route('users.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = Role::orderBy('name')->get();
        return view('users.edit',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserEditRequest $request, User $user)
    {
        $response = $this->userRepository->update_user($request,$user);
        if ($response) {
            return to_route('users.index')->with('success','User has been successfully Updated.');
        } 
        return to_route('users.index')->with('error','Something went wrong!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return to_route('users.index')->with('error','User deleted successfully.');
    }

    public function destroyCheckUser(Request $request) {
        $user=User::destroy($request->input('user_ids'));
        if ($user) {
            return true;
        }
    }
}

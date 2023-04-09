<?php 
namespace App\Repositories\Interfaces;
use App\Http\Requests\User\{UserAddRequest,UserEditRequest};

interface UserRepoInterface {
    
    public function create_user(UserAddRequest $request);
    public function update_user(UserEditRequest $request,$user);

}
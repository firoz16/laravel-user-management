<?php

namespace App\Http\Controllers;

use App\Service\UserService;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService){
        $this->userService = $userService;
    }

    public function store(UserRequest $request){
        
        $user = $this->userService->createUser($request->validated());
        return response()->json(['message'=>'User Created Successfully!','user'=>$user],201);
    }

    public function update(UserRequest $request,$id){
        $user = $this->userService->updateUser($id,$request->validated());
        return response()->json(['message'=>'User Updated Successfully!','user'=>$user],200);
    }
}

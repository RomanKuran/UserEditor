<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\EditUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use JWTAuth;
use Illuminate\Support\Facades\Hash;

class EditUserController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->user = JWTAuth::parseToken()->authenticate();
    }

    public function edit(EditUserRequest $request)
    {
        $userId = $request->userId;
        $firstName = $request->firstName;
        $lastName = $request->lastName;
        $email = $request->email;
        $password = $request->password;

        User::where('id', $userId)->
        update([
            'first_name' => $firstName, 
            'last_name' => $lastName, 
            'email' => $email, 
            'password' => Hash::make($password)
        ]);

        return 1;
    }
}

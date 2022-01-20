<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\CreateUserRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

class CreateUserController extends Controller
{
    public function create(CreateUserRequest $request){
        $firstName = $request->firstName;
        $lastName = $request->lastName;
        $email = $request->email;
        $password = $request->password;

        $result = event(new Registered($user = User::registered($firstName, $lastName, $email, $password)));

        return $result;
    }
}

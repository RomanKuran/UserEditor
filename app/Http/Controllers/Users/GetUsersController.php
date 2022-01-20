<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use JWTAuth;

class GetUsersController extends Controller
{
    protected $user;
 
    public function __construct()
    {
        $this->user = JWTAuth::parseToken()->authenticate();
    }

    public function get(){
        $user = $this->user;
        $users = null;

        if($user->isAdmin()){
            $users = User::where([['id', '<>', $user->id]])->select(['id', 'first_name', 'last_name', 'email'])->get();
        }else{
            $users = User::where([['id', '<>', $user->id], ['is_admin', 0]])->select(['id', 'first_name', 'last_name', 'email'])->get();
        }


        $users = ['users' => $users];
        return json_encode($users, JSON_UNESCAPED_UNICODE);
    }
}

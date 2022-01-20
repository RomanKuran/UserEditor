<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\GetUserByIdRequest;
use App\Models\User;
use JWTAuth;
use Illuminate\Http\Request;

class GetUserByIdController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->user = JWTAuth::parseToken()->authenticate();
    }

    public function get(GetUserByIdRequest $request)
    {
        $userId = $request->userId;
        $user = $this->user;
        $searchUser = null;

        $searchUser = User::where([['id', '<>', $user->id], ['id', $userId]])->select(['id', 'first_name', 'last_name', 'email'])->first();

        $searchUser = ['user' => $searchUser];
        return json_encode($searchUser, JSON_UNESCAPED_UNICODE);
    }
}

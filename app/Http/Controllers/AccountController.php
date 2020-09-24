<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use app\user;
class AccountController extends Controller
{
    public function index(Request $request)
    {
        $data = user::query()->where("id", auth()->user()->id)->get(["name", "email", "created_at", "role_id"])->first();
        return view("user",
            ['UserData' => $data]
        );

    }
}

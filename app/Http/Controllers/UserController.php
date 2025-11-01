<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // DB から全ユーザーを取得
        return view('welcome', compact('users')); // welcome.blade.php に渡す
    }
}

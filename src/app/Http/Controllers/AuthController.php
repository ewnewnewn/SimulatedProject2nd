<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Actions\Fortify\CreateNewUser;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.Login');
    }

    public function register()
    {
        return view('auth.Register');
    }

    public function registerDone()
    {
        return view('auth.RegisterDone');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function registerAndRedirect(CreateNewUser $creator, Request $request)
    {
        $user = $creator->create($request->all());

        // ユーザー登録が完了したら、/thanks へリダイレクト
        return redirect('/thanks');
    }
}

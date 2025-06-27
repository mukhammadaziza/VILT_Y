<?php

namespace App\Http\Controllers;

use App\Actions\RegisterUserAction;
use App\Actions\UserLoginAction;
use App\Actions\UserLogoutAction;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function show_register_form()
    {
        return Inertia::render('Auth/Register');
    }

    public function register(RegisterUserRequest $request, RegisterUserAction $register_user_action)
    {
        $register_user_action->handle($request, $request->validated());
        return redirect()->route('login.create');
    }

    public function show_login_form()
    {
        return Inertia::render('Auth/Login');
    }

    public function login(LoginUserRequest $request, UserLoginAction $user_login_action)
    {
        $user_login_action->handle($request, $request->validated());
        return back()->withErrors(['email' => 'The provided credentials do not match our records'])->onlyInput('email');
    }

    public function logout(Request $request, UserLogoutAction $user_logout_action)
    {
        $user_logout_action->handle($request);
        return redirect()->route('home');
    }
}

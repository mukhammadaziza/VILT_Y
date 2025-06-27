<?php

namespace App\Actions;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLoginAction
{
    /**
     * Login existing user
     */
    public function handle(Request $request, array $user_login_data)
    {
        if(Auth::attempt($user_login_data, $request->remember)){
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
    }
}

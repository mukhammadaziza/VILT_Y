<?php

namespace App\Actions;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RegisterUserAction
{
    /**
     * Register new user with avatar
     */
    public function handle(Request $request, array $user_data)
    {
        if($request->hasFile('avatar')){
            $fields['avatar'] = Storage::disk('public')->put('avatars', $request->avatar);
        }

        return User::create($user_data);
    }
}

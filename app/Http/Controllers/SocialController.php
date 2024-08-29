<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;



class SocialController extends Controller
{
    public function redirect($driver){
        return Socialite::driver($driver)->redirect();
    }


    public function callback($driver){

        $socialUser = Socialite::driver($driver)->stateless()->user();
        // dd($githubUser);
        $user = User::updateOrCreate([
            'github_id' => $socialUser->id,
        ], [
            'name' => $socialUser->name ?? $socialUser->nickname,
            'email' => $socialUser->email,
            'github_token' => $socialUser->token,
            'github_refresh_token' => $socialUser->refreshToken,
            'password' =>Hash::make(Str::password(30)),
            'active' =>1,
        ]);

        Auth::login($user);

        return redirect()->route('home');
    }

}

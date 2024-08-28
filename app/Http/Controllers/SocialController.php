<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function redirect(){
        return Socialite::driver('github')->redirect();
    }


    public function callback(){
        

            $githubUser = Socialite::driver('github')->user();

            $user = User::updateOrCreate([
                'github_id' => $githubUser->id,
            ], [
                'name' => $githubUser->name,
                'email' => $githubUser->email,
                'github_token' => $githubUser->token,
                'github_refresh_token' => $githubUser->refreshToken,
            ]);

            Auth::login($user);

            return redirect('/dashboard');
        }
}

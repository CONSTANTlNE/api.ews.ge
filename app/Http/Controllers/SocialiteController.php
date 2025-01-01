<?php

namespace App\Http\Controllers;


use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function githubRedirect()
    {
        return Socialite::driver('github')->redirect();
    }

    public function githubCallback()
    {
        try {
            $user = Socialite::driver('github')->user();

//            dd($user,$user->nickname, $user->id,$user->name,$user->email);

            $existing = User::where('email', $user->email)->first();



            $github_user = User::updateOrCreate([
                'provider_id' => $user->id,
            ], [
                'provider_id' => $user->id,
                'name'      => $user->name?:$user->nickname,
                'provider' => 'github',
                'email'     => $user->email?:$user->nickname.'@githubtest.com',
                'password'  => 'khG$%669@fgTklop896',
                'adminpass' => 'khG$%669@fgTklop896',
            ]);


            Auth::login($github_user);


            return to_route('dashboard');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}

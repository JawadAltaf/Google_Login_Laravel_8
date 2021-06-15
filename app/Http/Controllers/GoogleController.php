<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite; // Socialte pakage for google login
use App\User; // model
use App\Models\Google;


class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handdleGoogleCallBack(Request $req)
    {
        $user = Socialite::driver('google')->user(); // for getting all information of user from google
        $google = new Google;
        $google->name = $user->name;
        $google->email = $user->email;
        $google->save();
        $check_login_exist = Google::where('email',$user->email)->first(); // checking user google email exist in database
        if(!empty($check_login_exist))
        {
            session()->put('USER_EMAIL',$user->email);
            $msg['google_message'] = "Successfully login with google welcome";
            return view('home',$msg);
        }
    }
}

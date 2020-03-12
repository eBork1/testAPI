<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Auth;

class ProfilesController extends Controller
{
    public function index()
    {
        $userID = Auth::user()->id;
        $api_key = \DB::table('oauth_access_tokens')->where('user_id', $userID)->value('id');
        return view('profile', ["api_key" => $api_key]);
    }
}

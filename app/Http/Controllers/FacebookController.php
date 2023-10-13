<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Facebook\Facebook;
use Exception;

class FacebookController extends Controller 
{
    public function facebookpage()
    {
        return Socialite::driver('facebook')-> redirect();

    }

    public function facebookredirect()
    {

        try {
            $user = Socialite::driver('facebook')->user();
            $finduser = User::where('facebook_id', $user->id)->first();
            if ($finduser){
                Auth::login($finduser);

                return redirect()->intended('dashbaord');
            }else{
                $newUser = User:: updateOrCreate(['email' => $user->email],[
                    'name' => $user->name,
                    'facebook_id' => $user -> id,
                    'password' => encrypt('12345678')
                ]);
                Auth::login($newUser);

                return redirect() -> intended('dashboard');
            }
            }catch (Exception$e) {
                dd($e ->getMessage());
            }
        }
            public function postToFacebook(Request $request)
        {
            $fb = new Facebook([
                'app_id' => config('services.facebook.client_id'),
                'app_secret' => config('services.facebook.client_secret'),
                'default_graph_version' => 'v12.0',
            ]);

            $accessToken = $request->session()->get('facebook_access_token');

            try {
                // Specify your Facebook post content here
                $response = $fb->post('/me/feed', [
                    'message' => 'This is a dynamic message!',
                    'link' => 'https://example.com', // URL to share
                ], $accessToken);

                $graphNode = $response->getGraphNode();
                // Handle the success response
            } catch (\Facebook\Exceptions\FacebookSDKException $e) {
                // Handle error
                dd($e->getMessage());
            }
        }

    }


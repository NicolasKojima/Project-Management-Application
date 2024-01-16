<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <style>
        body {
            background-color: #2f3d7e;
            /* Add any other CSS styles for the body here */
        }
        .links {
            display: flex;
            gap: 5px;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <x-guest-layout>
        <x-authentication-card>
            
            <!-- FB.getLoginStatus(function(response) {
                statusChangeCallback(response);
            }); -->

            <x-slot name="logo">
                <img src="{{ asset('storage/image/logo-nk.png') }}" alt="Image" class="image-size" style="height: 200px;">
            </x-slot>

            <x-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>

                <div class="mt-4">
                    <x-label for "password" value="{{ __('Password') }}" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="links">
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-button class="ml-4">
                            <a href="register" padding-right="30px"> Register</a>
                        </x-button>

                        <x-button class="ml-4">
                            {{ __('Login') }}
                        </x-button>
                    </div>
                </div>

                <!-- <div style="text-align: center; background-color: #303f82 !important; margin-top: 20px; color: white; padding: 2px; border-radius: 5px;">
                    <a href="{{ url('auth/facebook') }}"> Login With Facebook</a>
                </div> -->

                <!-- <script>
                    var finished_rendering = function() {
                        console.log("finished rendering plugins");
                    var spinner = document.getElementById("spinner");
                        spinner.removeAttribute("style");
                        spinner.removeChild(spinner.childNodes[0]);
                    }
                    FB.Event.subscribe('xfbml.render', finished_rendering);
                    </script>
                    <div id="spinner"
                        style="
                            background: #4267b2;
                            border-radius: 5px;
                            color: white;
                            height: 40px;
                            text-align: center;
                            width: 250px;">
                        Loading
                        <div
                        class="fb-login-button"
                        data-max-rows="1"
                        data-size="large"
                        data-button-type="continue_with"
                        data-use-continue-as="true"
                        ></div>
                    </div>
                
                <script>
                window.fbAsyncInit = function() {
                    FB.init({
                    appId      : '6808208452599792',
                    cookie     : true,
                    xfbml      : true,
                    version    : 'v14.0'
                    });
                    
                    FB.AppEvents.logPageView();   
                    
                };

                (function(d, s, id){
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) {return;}
                    js = d.createElement(s); js.id = id;
                    js.src = "https://connect.facebook.net/en_US/sdk.js";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));



                </script> -->
            </form>
        </x-authentication-card>
    </x-guest-layout>
</body>
</html>

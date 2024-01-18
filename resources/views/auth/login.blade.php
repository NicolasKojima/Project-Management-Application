<?php
header("X-Frame-Options: SAMEORIGIN");
header('X-Content-Type-Options: nosniff');

?>
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
            <x-slot name="logo">
                <img src="{{ asset('storage/image/zealteam-logo1.png') }}" alt="Image" class="image-size" style="height: 200px;">
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
            </form>
        </x-authentication-card>
    </x-guest-layout>
</body>
</html>

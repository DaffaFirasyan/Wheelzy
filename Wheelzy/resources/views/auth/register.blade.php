<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Login Page
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
   body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            font-family: 'Arial', sans-serif;
            background-color:rgb(32, 39, 46);
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }
        .background {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        .background img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.2;
        }
        .login-container {
            position: relative;
            background: rgba(255, 255, 255, 0.1);
            padding: 60px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            z-index: 1;
            text-align: center;
            width: 100%;
            max-width: 400px;
            margin: 20px;
        }
        .login-container h1 {
            color: white;
            margin-bottom: 10px;
            margin-top: 10px;
            font-weight: bold;
            font-size: 50px;
        }
        .login-container h2 {
            color: white;
            margin-bottom: 20px;
        }
        .login-container label {
            color: white;
            display: block;
            text-align: left;
            margin-bottom: 5px;
        }
        .login-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            background-color:rgb(14, 120, 226);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-container .register {
            margin-top: 20px;
            color: white;
        }
        .login-container .register a {
            color: white;
            text-decoration: underline;
        }
        .login-container .reset {
            margin-top: 20px;
            color: white;
        }
        .login-container .reset a {
            color: white;
            margin-top: 20px;
        }
  </style>
 </head>
 <body>
  <div class="background">
   <img alt="Abstract background with blue shapes" height="1080" src="/images/LoginBackground.jpg" width="1920"/>
  </div>
  <div class="login-container">
   <h1>
    WHEELZY
   </h1>
   <h2>
    Register
   </h2>
   <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
            <div class="register">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
            </div>
   </form>
  </div>
 </body>
</html>
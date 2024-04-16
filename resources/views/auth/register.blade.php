<!--<x-guest-layout>
 {{--   <form method="POST" action="{{ route('register') }}"> --}}
        @csrf

         Name 
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

         Email Address 
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

         Password
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

         Confirm Password 
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
            {{--    {{ __('Already registered?') }} --}}
            </a>

            <x-primary-button class="ms-4">
             {{--   {{ __('Register') }} --}}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md mb-3">
            <h3 class="col-md-5">新規会員登録</h3>

            <hr>
            <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group row">
                <label for="name" class="col-md-5 col-form-label text-md-left">氏名<span class="ml-1 samuraimart-require-input-label"><span class="samuraimart-require-input-label-text">必須</span></span></label>
                <div class="col-md-7">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror samuraimart-login-input" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="侍　太郎">

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>氏名を入力してください</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-md-5 col-form-label text-md-left">メールアドレス<span="ml-1 samuraimart-require-input-label"><span class="samuraimart-require-input-label-text">必須</span></span></label>
            <div class="col-md-7">
                <input id="email" type="email" class="form-control @error('email')is-invalid @enderror samuraimart-login-input" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="samurai@samurai.com">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>メールアドレスを入力してください</strong>
            </span>
            @enderror
            </div>
            </div>
            <div class="form-group row">
                <label for="postal_code" class="col-md-5 col-form-label text-md-left">

                <div class="col-md-7">
                    <input type="text" class="form-control @error('postal_code') is-invalid @enderror samuraimart-login-input" name="post_code" required placeholder="150-0043">

                </div>

            </div>
        </div>
    </div>
</div>

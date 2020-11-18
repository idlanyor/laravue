@extends('layouts.template')
@section('title', 'Login')
{{-- apit : Qh5Eam1J57zi9XeAB78kM2rRdM7p5CqBDeTNRgcm --}}
@section('customcss')
    <link href="{{ asset('css/template.css') }}" rel="stylesheet">
@endsection
@section('pagename', 'Halaman Login')
@section('breadcrumb', 'Login')
@section('content')
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">

            <div class="card card-signin my-5">
                <div class="card-body">
                    <div class="text-center"><img width="50px" src="{{ asset('assets/img/logo.png') }}" alt="SMK"></div>
                    <h5 class="card-title text-center"></h5>
                    {{-- <form class="form-signin"> --}}
                        <x-jet-validation-errors class="mb-4" />

                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}" class="form-signin">
                            @csrf
                            <div class="form-label-group">
                                <input type="email" id="email" class="form-control" name="email" :value="old('email')"
                                    required autofocus>
                                <label for="email">Alamat Email</label>
                            </div>

                            <div class="form-label-group">
                                <input type="password" id="password" class="form-control" name="password" required
                                autocomplete="current-password">
                                <label for="password">Password</label>
                            </div>

                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">{{ __('Remember me') }}</label>
                            </div>
                            <button class="btn btn-lg btn-warning btn-block text-uppercase" type="submit">{{ __('Login') }}</button>
                            <hr class="my-4">
                        </form>
                </div>
            </div>
        </div>
    </div>
    {{-- <x-guest-layout>
        <x-jet-authentication-card>
            <x-slot name="logo">
                <x-jet-authentication-card-logo />
            </x-slot>

            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autofocus />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-jet-button class="ml-4">
                        {{ __('Login') }}
                    </x-jet-button>
                </div>
            </form>
        </x-jet-authentication-card>
    </x-guest-layout> --}}
@endsection

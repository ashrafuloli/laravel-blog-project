@extends('backend.layout.auth-master')

@section('page-title','Register')

@section('content')
    <div class="card border-dark">
        <div class="card-header text-bg-dark">
            <h4 class="m-0">Register</h4>
        </div>
        <div class="card-body">
            {!! Form::open(['route'=>'register','method'=>'post']) !!}

            <div class="mb-3">
                {!! Form::label('name', 'Enter Name', ['class'=>'form-label']) !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>

            <div class="mb-3">
                {!! Form::label('email', 'Enter Email', ['class'=>'form-label']) !!}
                {!! Form::text('email', null, ['class'=>'form-control']) !!}
            </div>

            <div class="mb-3">
                {!! Form::label('password', 'Enter Password', ['class'=>'form-label']) !!}
                {!! Form::password('password', ['class'=>'form-control']) !!}
            </div>

            <div class="mb-3">
                {!! Form::label('password_confirmation', 'Confirm Password', ['class'=>'form-label']) !!}
                {!! Form::password('password_confirmation', ['class'=>'form-control']) !!}
            </div>

            {!! Form::button('Register', ['class'=>'btn btn-success px-4','type'=>'submit']) !!}

            {!! Form::close() !!}

            <p class="mt-4">Already Member? <a href="{{route('login')}}">Login Here</a></p>
        </div>
    </div>
@endsection

{{--<x-guest-layout>--}}
{{--    <form method="POST" action="{{ route('register') }}">--}}
{{--        @csrf--}}

{{--        <!-- Name -->--}}
{{--        <div>--}}
{{--            <x-input-label for="name" :value="__('Name')"/>--}}
{{--            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required--}}
{{--                          autofocus autocomplete="name"/>--}}
{{--            <x-input-error :messages="$errors->get('name')" class="mt-2"/>--}}
{{--        </div>--}}

{{--        <!-- Email Address -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="email" :value="__('Email')"/>--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required--}}
{{--                          autocomplete="username"/>--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2"/>--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')"/>--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                          type="password"--}}
{{--                          name="password"--}}
{{--                          required autocomplete="new-password"/>--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2"/>--}}
{{--        </div>--}}

{{--        <!-- Confirm Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password_confirmation" :value="__('Confirm Password')"/>--}}

{{--            <x-text-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                          type="password"--}}
{{--                          name="password_confirmation" required autocomplete="new-password"/>--}}

{{--            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"--}}
{{--               href="{{ route('login') }}">--}}
{{--                {{ __('Already registered?') }}--}}
{{--            </a>--}}

{{--            <x-primary-button class="ms-4">--}}
{{--                {{ __('Register') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}

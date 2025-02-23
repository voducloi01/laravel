@extends('layouts.app')


@section('content')
    <div class="w-full flex items-center justify-center">

        <form action="{{ route('login.submit') }}" method="POST" class="flex flex-col gap-0 w-full max-w-[500px]">
            {{-- csrs laravel handle form --}}
            @csrf
            <label>Username</label>
            <input name="username" class="outline-none !border-[1px] !border-red-400" />
            @if ($errors->any())
                <div class="text-red-400">{{ $errors->first('username') }}</div>
            @endif
            <label for="">Password</label>
            <input name="password"class="outline-none !border-[1px] !border-red-400" />
            @if ($errors->any())
            <div class="text-red-400">{{ $errors->first('password') }}</div>
        @endif
            <button type="submit">Login</button>
        </form>
    </div>
@endsection

@extends('layouts.app')

    @section('content')

        @foreach($users as $user)

            <div>
                <a href="{{ route('user', $user->id) }}">{{ $user->name }}</a>
            </div>

        @endforeach
    @endsection



@extends('layouts.app')

    @section('content')

        @foreach($users as $user)

            <div>
                <a class='btn btn-info d-block mb-2' href="{{ route('user', $user->id) }}">{{ $user->name }}</a>
            </div>

        @endforeach
    @endsection



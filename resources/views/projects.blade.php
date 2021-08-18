@extends('layouts.app')

    @section('content')

        @forelse($projects as $project)

            <div>
                
                <h1 >{{ $project->name }}</h1> <br>
                <a >{{ $project->url }}</a> <br>
                <!-- <img >{{ $project->picture_url }}</a> <br> -->
                <img src="{{ $project->picture_url }}">
                
                @foreach($project->technologies as $technology)
                    <a> {{ $technology->name }}</a> &nbsp;
                @endforeach
                
            </div>
        @empty
            <h1> Este usuario no tiene proyectos</h1>
        @endforelse
        

        
    @endsection

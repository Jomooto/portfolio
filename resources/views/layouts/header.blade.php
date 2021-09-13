@extends('layouts.user')


    @section('header')
        @forelse($portfolioDatas as $portfolioData)
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ $portfolioData->picture }}" alt="profile picture"
                    style="width: 50%;" class="mx-auto d-block">
                </div>
                <div class="col-md-6">
                    <h1>{{$portfolioData->descriptionTitle}}</h1>
                    <p class="h3">{{ $portfolioData->description }}</p>
                </div>
            </div>
        @empty

        @endforelse
    @endsection


    @section('projects')
    <div class="container">
        <div class="row">
            @forelse($projects as $project)
                <div class="col-md-4 my-5">
                    <div class="card bg-secondary" style="width:18rem; height:18rem;">
                        <h1 >{{ $project->name }}</h1> <br>
                        <a >{{ $project->url }}</a> <br>
                        <img src="{{ $project->picture_url }}" style="width:30%">

<!-- 
                        <div class="d-inline pt-5"> -->
                            <!-- @foreach($project->technologies as $technology)
                                <button class="btn-info btn-sm"> {{-- $technology->name --}}</button>
                            @endforeach -->
                        <!-- </div> -->
                        <button class="btn btn-warning btn-sm mx-auto" data-toggle="modal"
                        data-target="#editProject{{ $project->id }}">
                            Editar
                        </button>

                        @include('layouts.editProjectModal')

                        <button class="btn btn-danger btn-sm mx-auto" data-toggle="modal"
                        data-target="#deleteProject{{ $project->id }}">
                            Delete
                        </button>

                        @include('layouts.deleteProjectModal')
                        
                    </div>
                </div>
            @empty
            <div class="col-12">
                <div class="mx-auto mt-4 text-center">
                    <p class="h1"> Este usuario no tiene proyectos</p>
                </div> 
            </div>                           
            @endforelse
                <button type="button" class="btn btn-primary mx-auto my-4" data-toggle="modal"
                data-target="#addProject">
                        Add Project
                </button>
            @include('layouts.projectsModal')
        </div>
    </div>


    @endsection
    <div class="container">
        <div class="row">
            <div class="col-12">
                @include('layouts.technologiesTable')
            </div>
        </div>
    </div>
    


    @section('technologies')
        <div class="container">
            <div class="row">
                <div class="text-center col-12">
                <h1>Technologies</h1>
                </div>

                @forelse($technologies as $technology)
                <div class="col-md-4 my-5">
                    <div class="card bg-secondary" style="width:18rem; height:18rem;">
                        <h1 >{{ $technology->name }}</h1> <br>
                        <img src="{{ $technology->icon_url }}" style="width:30%">
                    </div>
                </div>
                @empty
                    <h1> Este usuario no tiene technologies</h1>
                @endforelse
            
                <div class="mx-auto pb-4">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTech">
                        Add Technology
                    </button>
                    @include('layouts.technologiesModal')

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#asociateTech">
                        Asociate Technology
                    </button>
                    @include('layouts.associateTechModal')
                </div>
            </div>
        </div>
    @endsection

    

    @section('footer')
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <span><i class="fab fa-github fa-3x"></i></span>
                    <a href="{{ $portfolioData->github }}"><p class="h5">GitHub</p></a>
                </div>
                <div class="col-12 col-md-6">
                    <span><i class="fab fa-linkedin fa-3x"></i></span>
                    <a href="{{ $portfolioData->linkedin }}"><p class="h5">Linkedin</p></a>
                </div>              
            </div>
        </div>
    @endsection

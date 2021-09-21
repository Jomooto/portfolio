@extends('layouts.user')

<body class="container text-center text-light"
    style="background: linear-gradient(to bottom, #2a2a2a, #134074);"
    id="home">
    @section('body')
        @forelse($portfolioDatas as $portfolioData)
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ $portfolioData->picture }}" alt="profile picture"
                    style="width: 50%;" class="mx-auto d-block rounded">
                </div>
                <div class="col-md-6 pt-4">
                    <h1>{{$portfolioData->descriptionTitle}}</h1>
                    <p class="h3">{{ $portfolioData->description }}</p>
                </div>
            </div>
            @if(Auth::id())
                        <div class="inline">
                            <button class="btn btn-warning btn-sm mx-auto my-2" data-toggle="modal" data-target="#editData{{ $portfolioData->id }}">
                                Editar Datos de Contacto
                            </button>

                            @include('layouts.editDataModal')
                        </div>
            @endif
        @empty

        @endforelse
    


    
    <div class="container" id="projects">
        <div class="row">
            <div class="text-center mt-5 col-12">
                <h1>Projects</h1>
            </div>
            @forelse($projects as $project)
                <div class="col-md-4 my-5 text-white text-center">
                    <div class="card bg-secondary" style="width:18rem; height:18rem">
                        <h2>{{ $project->name }}</h2> <br>
                        <a href="{{ url($project->url) }}" target="_blank">Project</a>
                        
                        <a href="{{ url($project->git_url)}}" target="_blank"> Git</a>
                        <img class="rounded mx-auto d-block mt-1" src="{{ $project->picture_url }}" style="width:60%">

<!-- 
                        <div class="d-inline pt-5"> -->
                            <!-- @foreach($project->technologies as $technology)
                                <button class="btn-info btn-sm"> {{-- $technology->name --}}</button>
                            @endforeach -->
                        <!-- </div> -->
                        @if(Auth::id())
                            <div class="inline">
                                <button class="btn btn-warning btn-sm mx-auto my-2" data-toggle="modal" data-target="#editProject{{ $project->id }}">
                                    Editar
                                </button>

                            @include('layouts.editProjectModal')

                                <button class="btn btn-danger btn-sm mx-auto" data-toggle="modal" data-target="#deleteProject{{ $project->id }}">
                                    Delete
                                </button>                        
                            @include('layouts.deleteProjectModal')
                            </div>                       
                        @endif
                        
                    </div>
                </div>
            @empty
            <div class="col-12">
                <div class="mx-auto mt-4 text-center">
                    <p class="h1"> Este usuario no tiene proyectos</p>
                </div> 
            </div>                           
            @endforelse
                @if(Auth::id())
                    <button type="button" class="btn btn-primary mx-auto my-4 col-12" data-toggle="modal" data-target="#addProject">
                            Add Project
                    </button>
                @include('layouts.projectsModal')
                @endif
        </div>
    </div>


    
    
    <!-- <div class="container">
        <div class="row">
            <div class="col-12"> -->
                
                @if(Auth::id())
                <h1 class="pt-5">Technologies Panel</h1>
                    @include('layouts.technologiesTable')
                
            <!-- </div>
        </div>
    </div> -->
            <!-- <div class="mx-auto pb-4 col-12"> -->
                <button type="button" class="btn btn-primary mx-auto my-4 col-12" data-toggle="modal" data-target="#addTech">
                    Add Technology
                </button>
                @include('layouts.technologiesModal')
            <!-- </div> -->
        @endif
    


    
        <div class="container" id="technologies">
            <div class="row">
                <div class="text-center col-12">
                <h1>Technologies</h1>
                </div>

                @forelse($technologies as $technology)
                <div class="col-md-4 my-5 d-flex">
                    <div class="card bg-secondary" style="width:18rem; height:18rem;">
                        <h1 >{{ $technology->name }}</h1> <br>
                        <img class="m-auto" src="{{ $technology->icon_url }}" style="width:70%">
                    </div>
                </div>
                @empty
                    <h1> Este usuario no tiene technologies</h1>
                @endforelse             
            </div>
        </div>
    
        @include('layouts.contactForm')

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <span><i class="fab fa-github fa-3x"></i></span>
                    <a href="{{ $portfolioData->github }}" target="_blank"><p class="h5">GitHub</p></a>
                </div>
                <div class="col-12 col-md-6">
                    <span><i class="fab fa-linkedin fa-3x"></i></span>
                    <a href="{{ $portfolioData->linkedin }} target="_blank""><p class="h5">Linkedin</p></a>
                </div>
                <!-- <div class="col-12 col-md-4">
                    <span><i class="fab fa-linkedin"></i></span>
                    <a href="#"><p class="h5">Linkedin</p></a>
                </div> -->
            </div>
        </div>
    @endsection
</body>

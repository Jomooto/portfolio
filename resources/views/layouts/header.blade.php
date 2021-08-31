@extends('layouts.user')
    @section('header')
        <div class="row">
            <div class="col-md-6">
                <img src="{{ $user->picture }}" alt="profile picture" 
                style="width: 50%;" class="mx-auto d-block">
            </div>
            <div class="col-md-6">
                <p class="h3">Hello im a web developer</p>
            </div> 
        </div>  
    @endsection


    @section('projects')
    <div class="container">
        <div class="row">
        @forelse($projects as $project)
                <div class="col-md-4 my-5">
                    <div class="card bg-secondary" style="width:18rem; height:18rem;">
                        <h1 >{{ $project->name }}</h1> <br>
                        <a >{{ $project->url }}</a> <br>
                        <!-- <img >{{ $project->picture_url }}</a> <br> -->                       
                        <img src="{{ $project->picture_url }}" style="width:30%">
                        
                        
                        <div class="d-inline pt-5">
                            @foreach($project->technologies as $technology)
                                <button class="btn-info btn-sm"> {{ $technology->name }}</button> 
                            @endforeach
                        </div>
                    </div>       
                </div>           
                @empty
                    <h1> Este usuario no tiene proyectos</h1>
                @endforelse
            </div>
        </div>
    @endsection


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
                </div>
            </div>
    @endsection

    @section('contact')
        <div class="container">
            <div class="row">
                <div class="text-center col-12 col-md-8 mx-auto mb-4">
                    <h1>Contact Me</h1>
                
                <form action="">
                    <div class="card-body">
                        <div class="form-group">
                        <input type="text" placeholder="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="10" placeholder="message" class="form-control"></textarea>
                        </div>

                        <button class="btn btn-secondary btn-block">Send</button>
                    </div>
                </form>
                
                </div>
                </div>
            </div>
    @endsection

    @section('footer')
        <footer class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <i class="fab fa-linkedin"></i>
                    <a href="#"><p class="h5">Linkedin</p></a>            
                </div>           
                <div class="col-12 col-md-4">
                    <span><i class="fab fa-linkedin"></i></span>
                    <a href="#"><p class="h5">Linkedin</p></a>            
                </div>           
                <div class="col-12 col-md-4">
                    <span><i class="fab fa-linkedin"></i></span>
                    <a href="#"><p class="h5">Linkedin</p></a>            
                </div>           
            </div>  
        </footer>  
    @endsection


    
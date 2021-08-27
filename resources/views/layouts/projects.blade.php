
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
        
    

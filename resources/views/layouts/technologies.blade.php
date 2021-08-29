
        
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
    
    

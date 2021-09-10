<div class="container">
    <div class="row">
        <div class="text-center col-12 col-md-8 mx-auto mb-4">
            <h1>Contact Me</h1>

            <form action="{{ route('contact.store') }}" method="POST">
                
                @csrf
                <div class="card-body">
                    
                    
                        <input type="hidden" name="id" placeholder="id" class="form-control" value="{{ $user->id }}">
                    

                    <div class="form-group">
                    
                    
                    <input type="text" name="name" value="{{ old('name')}}" placeholder="Name" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        
                    
                        
                        
                    
                        <input type="email" name="email" value="{{ old('email')}}" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                    
                        <textarea name="message" id="message" value="{{ old('message')}}" cols="30" rows="10" placeholder="Message" class="form-control"></textarea>
                    </div>

                    <button type="submit" class="btn btn-secondary btn-block">Send</button>
                </div>
            </form>

        </div>
    </div>
</div>
    
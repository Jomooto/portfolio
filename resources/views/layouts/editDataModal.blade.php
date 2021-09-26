<style>            
    #title::placeholder {
        color:white;
    }
    #picture::placeholder {
        color:white;
    }
    #descriptionTitle::placeholder {
        color:white;
    }
    #description::placeholder {
        color:white;
    }
    #github::placeholder {
        color:white;
    }
    #linkedin::placeholder {
        color:white;
    }
    #email::placeholder {
        color:white;
    }
</style>

<div class="modal fades" id="editData{{ $portfolioData->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-dark">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal Porjects</h5>
            
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body pb-0">
                <form action="{{ route('data.update', $portfolioData->id) }}" method="POST">
                    @method('PUT')    
                    @csrf
                    <div class="form-row">
                                            
                        <div class="col-md-4 pb-2">
                            <input type="url" id="cv" name="cv" class="form-control bg-secondary text-white" placeholder="Cv link" value="{{ $portfolioData->cv }}">
                        </div>
                        <div class="col-md-4 pb-2">
                            <input type="text" id="picture" name="picture" class="form-control bg-secondary text-white" placeholder="Url Picture" value="{{ $portfolioData->picture }}">
                        </div>
                        <div class="col-md-4 pb-2">
                            <input type="text" id="descriptionTitle" name="descriptionTitle" class="form-control bg-secondary text-white" placeholder="Title" value="{{ $portfolioData->descriptionTitle }}">
                        </div>
                        
                        <div class="col-md-12 pb-2">
                            <textarea type="text" id="description" name="description" rows="5" class="form-control bg-secondary text-white" placeholder="Description">
                            {{ $portfolioData->description }}
                            </textarea>
                        </div>
                        <div class="col-md-4 pb-2">
                            <input type="text" id="github" name="github" class="form-control bg-secondary text-white" placeholder="Github link" value="{{ $portfolioData->github }}">
                        </div>
                        <div class="col-md-4 pb-2">
                            <input type="text" id="linkedin" name="linkedin" class="form-control bg-secondary text-white" placeholder="Linkedin link" value="{{ $portfolioData->linkedin }}">
                        </div>
                        <div class="col-md-4 pb-2">
                            <input type="text" id="email" name="contactEmail" class="form-control bg-secondary text-white" placeholder="Contact Email" value="{{ $portfolioData->contactEmail }}">
                        </div>
                        <!-- <div class="col-md-3">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div> -->

                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>

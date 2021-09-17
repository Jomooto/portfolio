<style>            
    #name::placeholder {
        color:white;
    }
    #url::placeholder {
        color:white;
    }
    #git::placeholder {
        color:white;
    }
    #picture::placeholder {
        color:white;
    }
</style>


<div class="modal fade" id="editProject{{ $project->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-dark">
            <div class="modal-header">
            <!-- <h5 class="modal-title" id="exampleModalLabel">Modal Porjects</h5> -->
            
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body pb-0">
                <form action="{{ route('project.update', $project->id) }}" method="POST">
                    @method('PUT')    
                    @csrf
                    <div class="form-row">
                    
                        <div class="col-md-6">
                        <input type="text" id="name" name="name" class="form-control mb-4 bg-secondary text-white" placeholder="name" value="{{ $project->name }}">
                        </div>
                        <div class="col-md-6">
                            <input type="text" id="url" name="url" class="form-control mb-4 bg-secondary text-white" placeholder="url" value="{{ $project->url }}">
                        </div>
                        <div class="col-md-6">
                            <input type="text" id="git" name="git_url" class="form-control mb-4 bg-secondary text-white" placeholder="git_url" value="{{ $project->git_url }}">
                        </div>
                        <div class="col-md-6">
                            <input type="text" id="picture" name="picture_url" class="form-control mb-4 bg-secondary text-white" placeholder="picture_url" value="{{ $project->picture_url }}">
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

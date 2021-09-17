Button trigger modal
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

<!-- Modal -->
<div class="modal fade" id="addProject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal what Porjects</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pb-0" id="modalx">
        <form action="{{ route('project.store') }}" method="POST">
            @csrf
            <div class="form-row">
            
                <div class="col-md-6">
                  <input type="text" name="name" id="name" class="form-control mb-4 bg-secondary text-white" placeholder="Name" value="{{old('name')}}">
                </div>
                <div class="col-md-6">
                    <input type="text" name="url" id="url" class="form-control mb-4 bg-secondary text-white" placeholder="Project url" value="{{old('url')}}">
                </div>
                <div class="col-md-6">
                    <input type="text" name="git_url" id="git" class="form-control mb-4 bg-secondary text-white" placeholder="Git url" value="{{old('git_url')}}">
                </div>
                <div class="col-md-6">
                    <input type="text" name="picture_url" id="picture" class="form-control mb-4 bg-secondary text-white" placeholder="Picture url" value="{{old('picture_url')}}">
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
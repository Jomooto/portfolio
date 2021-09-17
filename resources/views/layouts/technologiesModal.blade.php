  <style>            
      #name::placeholder {
          color:white;
      }
      #icon::placeholder {
          color:white;
      }

      .modal-footer {
        border:none;
      }

      .modal-header {
        border:none;
      }
  </style>

<div class="modal fade" id="addTech" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-dark">
      <div class="modal-header">        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pb-0">
        <form action="{{ route('technology.store')}}" method="POST">
            @csrf
            <div class="form-row">
            
                <div class="col-md-4">              
                  <input type="text" id="name" name="name" class="form-control bg-secondary text-white" placeholder="name" value="{{old('name')}}">
                </div>
                <div class="col-md-8">
                    <input type="text" id="icon" name="icon_url" class="form-control bg-secondary text-white" placeholder="icon_url" value="{{old('icon_url')}}">
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
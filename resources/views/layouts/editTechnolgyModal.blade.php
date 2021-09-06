<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="editTechnolgy{{ $tech->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pb-0">
        <form action="{{ route('technology.update', $tech->id)}}" method="POST">
            @method('PUT')   
            @csrf
            <div class="form-row">
                    
                    <div class="col-md-3">
                    <input type="text" name="name" class="form-control" placeholder="name" value="{{ $tech->name }}">
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="icon_url" class="form-control" placeholder="url" value="{{ $tech->icon_url }}">
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
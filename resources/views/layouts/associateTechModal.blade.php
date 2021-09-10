<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="asociateTech" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pb-0">
        <form action="{{-- route('technology.associate') --}}" method="POST">
            @csrf
            <div class="form-row">
            
            <div class="col-md-3">
              
              <div class="dropdown">
                
                  <select class="form-control" name="id" id="">
                    <option class="dropdown-item" value="null">Choose a technology</option>
                  @foreach($technologies2 as $technology)
                  
                  <option class="dropdown-item" value="{{ $technology->id }}">{{ $technology->name }}</option>
                  @endforeach
                  </select>
                
              </div>

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
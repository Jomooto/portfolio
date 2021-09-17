

    <div class="container">
        <table id="technologies">
            <thead>
                <tr>
                    <!-- <th class="pl-5">Id</th> -->
                    <th class="pl-4 col-md-3">Name</th>  
                    @if(Auth::id() == 1)      
                    <th class="pl-4"></th>
                    <th class="pl-4"></th>
                    @endif()
                    <th class="pl-5"></th>                                        
                </tr>
            </thead>
            <tbody>
                
                @foreach($technologies3 as $tech)
                <tr>
                    

                    <td class="col-md-3 font-weight-bold">{{ $tech->name }}</td>
                    @if(Auth::id() == 1)   
                        <td>
                            <button class="btn btn-warning btn-lg mr-2 mb-1" data-toggle="modal" data-target="#editTechnolgy{{ $tech->id }}">
                                Edit
                            </button>
                            @include('layouts.editTechnolgyModal')                        
                    </td>
                    <td>
                            <button class="btn btn-danger btn-lg mr-2 mb-1" data-toggle="modal" data-target="#deleteTechnology{{ $tech->id }}">
                                Delete
                            </button>
                            @include('layouts.deleteTechnologyModal')                 
                    </td>
                    @endif 
                    @if($user->id == Auth::id())
                        <td>
                            @if(key_exists($tech->id, $asociadosArray))
                                @php
                                    $action = "Desasociar";
                                    $method = 'technology.unassociate';
                                    $color = 'warning';
                                @endphp
                            @else                    
                                @php
                                    $action = "Asociar";
                                    $method = 'technology.associate';
                                    $color = 'info';
                                @endphp
                            @endif
                            <form class="mb-1" action="{{ route($method, $tech->id)}}" method="POST">
                                @csrf
                                <button class="btn btn-{{ $color }} btn-lg mr-2" 
                                type="submit"
                                name="id" id="id" value="{{ $tech->id }}" >{{ $action }}</button>
                            </form>
                        
                        </td>
                    @endif
                </tr>      
                @endforeach          
                
                
                
            </tbody>
        </table>
        
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
    <script>
        $.noConflict();
    </script>
    <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js" ></script>
    <script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap4.min.js" ></script>



<script>
    var nuevo = jQuery.noConflict();
    nuevo(document).ready(function() {
        nuevo('#technologies').DataTable();
    });
</script>
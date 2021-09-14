

    <div class="container">
        <table id="technologies" class="text-center">
            <thead>
                <tr>
                    <th class="pl-5">Id</th>
                    <th class="pl-4">Name</th>                    
                    <th class="pl-4"></th>
                    <th class="pl-4"></th>
                    <th class="pl-5"></th>                                        
                </tr>
            </thead>
            <tbody>
                
                @foreach($technologies3 as $tech)
                <tr>
                    <td class="text-center">{{ $tech->id }}</td>

                    <td>{{ $tech->name }}</td>
                    
                    <td>
                        <button class="btn btn-warning btn-sm mx-auto mb-1" data-toggle="modal" data-target="#editTechnolgy{{ $tech->id }}">
                            Edit
                        </button>
                        @include('layouts.editTechnolgyModal')                        
                    </td>
                    <td>
                        <button class="btn btn-danger btn-sm mx-auto mb-1" data-toggle="modal" data-target="#deleteTechnology{{ $tech->id }}">
                            Delete
                        </button>
                        @include('layouts.deleteTechnologyModal')                        
                    </td> 
                    <form action="{{ route('technology.associate', $tech->id)}}" method="POST">                    
                        @csrf
                        @foreach($technologies2 as $tech2)
                            @if($tech2->id == $tech->id)                    
                                <td class="pl-2">                        
                                    <button class="btn btn-info btn-sm mx-auto mb-1" 
                                    type="submit"
                                    method="POST"
                                    name="id" id="id" value="{{ $tech->id }}" >Asociar</button>
                                </td>                                                            
                            @endif
                        @endforeach 
                    </form>
                    <form action="{{ route('technology.unassociate', $tech->id)}}" method="POST"> 
                    @csrf
                        @foreach($technologies4 as $tech4)
                            @if($tech4->id == $tech->id)                    
                                <td class="pl-2">                        
                                    <button class="btn btn-warning btn-sm mx-auto mb-1" 
                                    type="submit"
                                    method="POST"
                                    name="id" id="id" value="{{ $tech->id }}">DesAsociar</button>
                                </td>                                                            
                            @endif
                        @endforeach   
                    </form>                         

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

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap4.min.css">
    @include('layouts.head')
    <title>Document</title>
</head>
<body>
<section>
                <div class="col col-md-12 my-5">
                    @include('layouts.navbar')
                </div> 
            </section> 

    <div class="container mt-5">
        <table id="technologies">
            <thead>
                <tr>
                    <th class="pl-4">Id</th>
                    <th class="pl-4">Name</th>                    
                    <th class="pl-4"></th>
                    <th class="pl-4"></th>
                    
                </tr>
            </thead>
            <tbody>
                
                @foreach($technologies3 as $tech)
                <tr>
                    <td>{{ $tech->id }}</td>
                    <td>{{ $tech->name }}</td>
                    
                    <td>
                        <button class="btn btn-warning btn-sm mx-auto" data-toggle="modal" data-target="#editTechnolgy{{ $tech->id }}">
                            Edit
                        </button>
                        @include('layouts.editTechnolgyModal')                        
                    </td>
                    <td>
                        <button class="btn btn-danger btn-sm mx-auto" data-toggle="modal" data-target="#deleteTechnology{{ $tech->id }}">
                            Delete
                        </button>
                        @include('layouts.deleteTechnologyModal')                        
                    </td>
                    
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
</body>
</html>

<script>
    var nuevo = jQuery.noConflict();
    nuevo(document).ready(function() {
        nuevo('#technologies').DataTable();
    });
</script>
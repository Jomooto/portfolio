
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
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
                    <th>Id</th>
                    <th>Name</th>
                    <th>Url</th>
                </tr>
            </thead>
            <tbody>
                @foreach($technologies as $tech)
                <tr>
                    <td>{{ $tech->id }}</td>
                    <td>{{ $tech->name }}</td>
                    <td>{{ $tech->icon_url }}</td>
                </tr>                
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
    <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js" ></script>
    <script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap4.min.js" ></script> -->
</body>
</html>

<script>
    $(document).ready(function() {
    $('#technologies').DataTable();
} );
</script>
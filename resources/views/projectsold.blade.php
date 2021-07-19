@extends('layouts.app')

@section('content')
    <!-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Projects</div> -->

                    <!-- <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div> -->
                    <!-- @if(Auth()->user())

                        @if ($errors->any())
                            <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                - {{$error}} <br>
                            @endforeach
                            </div>
                        @endif
                        <form action="{{route('projects.store')}}" method="POST">
                        @csrf
                            <div class="form-row">
{{--                            <input type="text" name="user_id" value="{{Auth()->user()->id}}" hidden>--}}
                            <div class="col-md-3">
                                <input type="text" name="name" class="form-control" placeholder="name" value="{{old('name')}}">
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="url" class="form-control" placeholder="url" value="{{old('url')}}">
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="picture_url" class="form-control" placeholder="picture_url" value="{{old('picture_url')}}">
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>

                            </div>
                        </form>

                    @endif -->


                    <!-- @foreach($projects as $project)
                        <div>
                            <h1>{{ $project->get_name }}</h1>
                        
                            <br>
                        </div>
                    @endforeach -->
                <!-- </div>
            </div>
        </div>
    </div> -->
@endsection

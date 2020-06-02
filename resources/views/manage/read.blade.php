@extends('layouts.app')


@section('content')


    <!-- Custom styles for this template -->
    <link href="{{URL::asset("postsassets/css/blog-post.css")}}" rel="stylesheet">
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                <!-- Title -->
                <h1 class="mt-4">{{$article->title}}</h1>

                <!-- Author -->
                <p class="lead">
                    by
                    <a href="{{url('/')}}">Skander Zoghlami</a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p>Posted on {{$article->created_at}}</p>

                <hr>

                <!-- Preview Image -->
{{--                <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">--}}
                <img class="img-fluid rounded" src="{{url::asset($article->path)}}" alt="" width="900" height="300">

                <hr>

                <!-- Post Content -->
                <p class="lead">{{$article->body}}</p>


                <hr>

                <!-- Comments Form -->
                <div class="card my-4">
                    <h5 class="card-header">Leave a Comment:</h5>
                    <div class="card-body">
                        <form action="/read/{{$article->id}}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <textarea rows="4" cols="50"  name="body" class="form-control">
	      </textarea>
                            </div>

                            </br>
                            <input type="submit" value="add comment" class="btn btn-primary"/>
                        </form>
                    </div>
                </div>

                <!-- Single Comment -->
                @foreach($article->comments as $c)
                <div class="media mb-4">
                    <img class="d-flex mr-3 rounded-circle" src="https://via.placeholder.com/50x50/000000/FFFFFF/?text={{$c->owner[0]}}" alt="">
                    <div class="media-body">
                        <h5 class="mt-0">{{$c->owner}} has commented</h5>
                        {{$c->comment}}
                    </div>
                </div>
                @endforeach

            </div>



        </div>
        <!-- /.row -->

    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="{{URL::asset("postsassets/vendor/jquery/jquery.min.js")}}"></script>
    <script src="{{URL::asset("postassets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>


@endsection
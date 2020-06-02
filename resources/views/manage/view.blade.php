@extends('layouts.app')


@section('content')

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/blog-home.css" rel="stylesheet">
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="my-4">Welcome to my Blog
                </h1>
            <hr>
                <!-- Blog Post -->
                @foreach($articles as $art)
                <div class="card mb-4">
{{--                    <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">--}}
                    <img class="card-img-top" src="{{$art->path}}" alt="Card image cap" width="750" height="300">
                    <div class="card-body">
                        <h2 class="card-title"><a href="{{ "/read/".$art->id}}">{{$art->title}}</a></h2>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on {{$art->created_at}}
                    </div>
                </div>
                    <hr class="flex-xl-shrink-1">
            @endforeach
                <!-- Pagination -->
                <ul class="pagination justify-content-center mb-4">

                    {{ $articles->links() }}
                </ul>

            </div>


        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>









@endsection
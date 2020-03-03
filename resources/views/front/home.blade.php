@extends('layouts.blog-home') @section('content')
<div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">

        <!-- First Blog Post -->
        @if($posts) @foreach($posts as $post)
        <h2>
            <a href="#">{{$post->title}}</a>
        </h2>
        <p class="lead">
            by
            <a href="index.php">{{$post->user->name}}</a>
        </p>
        <p>
            <span class="glyphicon glyphicon-time"></span>{{$post->created_at ? $post->created_at->diffForHumans() : $post->created_at}}
        </p>
        <hr>
        <img class="img-responsive" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/900x300'}}" alt="">
        <hr>
        <p> {{str_limit($post->body,100)}} </p>
        <a class="btn btn-primary" href="/post/{{$post->id}}">Read More
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
        <hr>
        @endforeach @endif
        <div class="row">
            <div class="col-sm-6 col-sm-offset-6" align="center">
                {{$posts->render()}}
            </div>
        </div>
        <!-- Pagination -->
    </div>
    @include('includes.navigation.front_side_nav')

</div>
@endsection
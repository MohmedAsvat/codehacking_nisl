@extends('layouts.admin') 

@section('pagename')
Comments
@endsection

@section('content')
<h3>Comments</h3>


@if(count($comments) > 0)
<table class="table">
    <thead>
        <tr>
            <!-- <th>Id</th> -->
            <th>Author</th>
            <th>Email</th>
            <th>Body</th>
            <th>Create</th>
            <th>Update</th>
        </tr>
    </thead>

    <tbody>

        @foreach($comments as $comment)

        <tr>
            <!-- <td>{{$comment->id}}</td> -->
            <td>{{$comment->author}}</td>
            <td>{{$comment->email}}</td>
            <td>{{str_limit($comment->body,20)}}</td>
            <td>{{$comment->created_at ? $comment->created_at->diffForHumans() : ''}}</td>
            <td>{{$comment->updated_at ? $comment->updated_at->diffForHumans() : ''}}</td>
            <td>
                <a href="{{route('home.post',$comment->post->id)}}">View Post</a>
            </td>
            <td>
                <a href="{{route('admin.comment.replies.show',$comment->id)}}">View Reply</a>
            </td>
            <td>

                @if($comment->is_active == 1) 
                
                    {!! Form::open(['method'=>'PATCH','action'=>['PostCommentController@update',$comment->id]])!!}
                    {{csrf_field()}}

                    <input type="hidden" name="is_active" value="0">
                    <div class="class form-group">
                        {!! Form::submit('Un-approve',['class'=>'btn btn-success']) !!}
                    </div>
                    {!! Form::close() !!}
                
                 @else 
                 
                    {!! Form::open(['method'=>'PATCH','action'=>['PostCommentController@update',$comment->id]])!!}
                    {{csrf_field()}}

                    <input type="hidden" name="is_active" value="1">
                    <div class="class form-group">
                        {!! Form::submit('Approve',['class'=>'btn btn-info']) !!}
                    </div>
                    {!! Form::close() !!} 
                    
                @endif
            </td>

            <td>

                {!! Form::open(['method'=>'DELETE','action'=>['PostCommentController@destroy',$comment->id]])!!} 
                {{csrf_field()}}

                <div class="class form-group">
                    {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                </div>
                {!! Form::close() !!}

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<hr>
<div class="row">
    <div class="col-sm-6 col-sm-offset-5">
          {{$comments->render()}}
    </div>
</div>
@else
<h1 class="text-center">No comments</h1>
@endif @endsection
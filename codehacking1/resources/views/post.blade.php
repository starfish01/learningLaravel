@extends('layouts.blog-post')

@section('content')

    <!-- Blog Post -->
    <!-- Title -->
    <h1>{{ $post->title }}</h1>

    <!-- Author -->
    <p class="lead">
        by <a href="#">{{ $post->user->name }}</a>
    </p>

    <hr>

    <!-- Date/Time -->
    <p><span class="glyphicon glyphicon-time"></span> {{ $post->created_at->diffForHumans() }}</p>

    <hr>

    <!-- Preview Image -->
    <img height="250"  src="{{$post->photo ? $post->photo->file : $post->photoPlaceholder()}}"/>

    <hr>

    <!-- Post Content -->

    <p>{!! $post->body !!}</p>

    <hr>

    <!-- Blog Comments -->

    <!-- Comments Form -->
    <div class="well">

        @if(Auth::user())

            <h4>Leave a Comment:</h4>

            {!! Form::open(['method'=>'POST', 'action'=>'PostCommentsController@store'])!!}

            <input name="post_id" value="{{$post->id}}" type="hidden">

            <div class="form-group">
                {!! Form::label('body', 'Title:') !!}
                {!! Form::textarea('body',null, ['class'=>'form-control','rows' => 3]) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Post Comment', ['class'=>'btn btn-primary'])!!}
            </div>

            {!! Form::close()!!}

        @else

            <h4>Please login to leave a comment</h4>
            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
            <a href="{{ route('register') }}" class="btn btn-primary">Register</a>

        @endif


    </div>

    <!-- Posted Comments -->

    <!-- Comment -->
    @if($comments)
        @foreach($comments as $comment)
            @if($comment->is_active == 1)

                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" height="64" src="{{ $comment->user->photo ? $comment->user->photo->file : 'http://placehold.it/64x64'}}" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">{{ $comment->user->name }}
                            <small>{{ $comment->created_at->diffForHumans() }}</small>
                        </h4>
                        <p>{{ $comment->body }}</p>

                        @if($commentReplies)
                            @foreach($commentReplies as $reply)
                                @if($reply->comment_id == $comment->id && $reply->is_active == 1)

                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object" height="64" src="{{ $reply->user->photo ? $reply->user->photo->file : 'http://placehold.it/64x64'}}" alt="">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">{{ $reply->user->name }}
                                                <small>{{ $reply->created_at->diffForHumans() }}</small>
                                            </h4>
                                            {{$reply->body}}
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif

                        <div class="comment-reply-container">


                        <div class="reply-form-on-post-pages">

                            {!! Form::open(['method'=>'POST', 'action'=>'CommentRepliesController@createReply'])!!}

                            <input type="hidden" name="comment_id" value="{{$comment->id}}">

                            <input name="post_id" value="{{$post->id}}" type="hidden">

                            <div class="form-group">
                                {{--{!! Form::label('body', 'Message:') !!}--}}
                                {!! Form::textarea('body',null, ['class'=>'form-control', 'rows'=>2]) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Submit', ['class'=>'btn btn-primary'])!!}
                            </div>

                            {!! Form::close()!!}

                        </div>
                            <button class="btn btn-primary toggle-replies pull-right">Reply</button>

                        </div>

                    </div>
                </div>
            @endif
        @endforeach
    @endif

    <hr>


    <div class="input-group">
   <span class="input-group-btn">
     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
       <i class="fa fa-picture-o"></i> Choose
     </a>
   </span>
        <input id="thumbnail" class="form-control" type="text" name="filepath">
    </div>
    <img id="holder" style="margin-top:15px;max-height:100px;">

@stop

@section('scripts')

    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>


    <script>

        $('#lfm').filemanager('image');
        $(".comment-reply-container .toggle-replies").click(function (){

            $(this).prev().slideToggle("slow");

            $(this).hide();


        });

    </script>
    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
@stop
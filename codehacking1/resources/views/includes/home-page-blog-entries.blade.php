<!-- Blog Entries Column -->
<div class="col-md-8">

    <h1 class="page-header">
        Page Heading
        <small>Secondary Text</small>
    </h1>

    <!-- First Blog Post -->

    @if($posts)
        @foreach($posts as $post)

            <h2>
                <a href="#">{{$post->title}}</a>
            </h2>
            <p class="lead">
                by <a href="index.php">{{ $post->user['name'] }}</a>
            </p>
            <p><span class="glyphicon glyphicon-time"></span> Posted {{ $post->created_at->diffForHumans() }}</p>
            <hr>
            <img height="250"  src="{{$post->photo ? $post->photo->file : $post->photoPlaceholder()}}"/>
            <hr>
            <p>{!! str_limit($post->body, $limit = 150, $end = '...') !!}</p>

            <a class="btn btn-primary" href="{{route(('home.post'), $post->slug)}}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

            <hr>

    @endforeach

@endif


<!-- Pager -->
    <ul class="pager">
        <li class="previous">
            <a href="#">&larr; Older</a>
        </li>
        <li class="next">
            <a href="#">Newer &rarr;</a>
        </li>
    </ul>

</div>
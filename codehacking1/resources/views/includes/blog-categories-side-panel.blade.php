<div class="well">
    <h4>Blog Categories</h4>

    @if($categories)

        <div class="row">
            @foreach( $categories as $key => $cat )

                @if($key % 2 )
                    <div class="col-lg-6">{{$cat->name}}</div>

                @else
                    <div class="col-lg-6">{{$cat->name}}</div>

                @endif

            @endforeach

        </div>
@endif
<!-- /.row -->
</div>
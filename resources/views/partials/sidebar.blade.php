<div class="col-md-4">
    <div class="list-group">
        @foreach($sidebar_urls as $title => $url)
            <a href="{{$url}}" class="list-group-item list-group-item-action">{{ $title }}</a>
        @endforeach
        {{--<a href="/categories" class="list-group-item list-group-item-action">Categories</a>--}}
    </div>
</div>

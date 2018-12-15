@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('partials.breadcrumb',$breadcrumbs)
            @include('partials.flash-message')
            <div class="card">
                <div class="card-header"> {{ $article->title }} <a href="#">{{ $article->created_at->diffForHumans() }}</a>  </div>
                <div class="card-body"> {{ $article->description }} </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">Leave A comment</div>
                <div class="card-body">
                    @if(Auth::user())
                        <new-comment article_id="{{$article->id}}" user_id="{{Auth::user()->id}}"></new-comment>
                        <hr>
                        <comments article_id="{{$article->id}}"></comments>
                    @else
                        <p> Please Login To Leave Comment </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection



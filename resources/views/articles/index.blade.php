@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @if(Auth::check() && Auth::user()->is_admin)
                @include('partials.sidebar',$sidebar_urls)
            @endif
            <div class="col-md-8">
                @include('partials.breadcrumb',$breadcrumbs)
                @include('partials.flash-message')
                <div class="card">
                    <div class="card-header">
                        List Articles  <filter-articles></filter-articles>
                    </div>
                    <div class="card-body">
                        <articles></articles>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

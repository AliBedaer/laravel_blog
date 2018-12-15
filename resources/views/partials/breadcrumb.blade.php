<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        @foreach($breadcrumbs as $breadcrumb)
            <li class="breadcrumb-item" aria-current="page"><a href="/{{ strtolower($breadcrumb) }}">{{ $breadcrumb }}</a> </li>
        @endforeach
    </ol>
</nav>

<div class="panel panel-default">
    <div class="panel-heading">
        <a href="#"> {{ $comment->owner->name }} </a> Said
        {{ $replay->created_at->diffForHumans() }} ...
    </div>
    <div class="panel-body">
        {{ $replay->body }}
    </div>
</div>

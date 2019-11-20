@foreach($comments as $comment)
<div class="display-comment">
    <strong>{{ $comment->user->name }}</strong>
    <p>{{ $comment->body }}</p>
    <a href="" id="reply"></a>
    <form method="post" action="{{ route('reply.add') }}">
        @csrf
        <div class="form-group w-50">
            <input type="text" name="comment_body" class="form-control"required/>
            <input type="hidden" name="post_id" value="{{ $post_id }}" required/>
            <input type="hidden" name="comment_id" value="{{ $comment->id }}" required/>
        </div>
        
        <div class="form-group w-50">
            <input type="submit" class="btn btn-warning" value="Reply"required/>
        </div>
    </form>
    @include('partials.comment_replies', ['comments' => $comment->replies])
</div>
@endforeach

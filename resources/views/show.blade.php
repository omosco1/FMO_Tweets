@extends('layouts.app')
<style>
    .display-comment .display-comment {
        margin-left: 40px
    }
</style>
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body bg-info">
                    <h2 class="text-dark text-center">All Your Tweets</h2>
    <p class="text-center"><b>Trending Topic: </b></p><p class="text-white text-center">{{ $post->title }}</p>

    <p class="text-warning text-right"> Hosted by- {{ $post->fullname}}</p>

    <b>Posted by Host:</b><h5 class="text-dark "> {{ $post->body }}</h5>

                        <hr />
        <h5 class="text-white">Comments Timeline</h5>
        @include('partials.comment_replies', ['comments' => $post->comments, 'post_id' => $post->id,])
                    <hr />
                    <h6>Add New comment</h6>
                        <form method="post" action="{{ route('comment.add') }}">

                            <div class="form-group">
                                <input type="text" name="comment_body" class="form-control " required/>
                                <input type="hidden" name="post_id" value="{{ $post->id }}" required/>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-warning" value="Add Comment" />
                            </div>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

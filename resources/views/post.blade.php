@extends('layouts.app')

@section('content')
<div class="container mb-5 mt-5 ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-info">
                <div class="card-header text-white">Create a Conversation</div>
                <div class="card-body bg-dark">
                <form method="post" action="{{ route('post.store') }}">
                        <div class="form-group w-50">
                            <label class="label text-white">Post Title: </label>
                            <input type="text" name="title" class="form-control" required/>
                            <div class="text-right  w-100 text-warning">
                                {{$errors->first('title')}}</div>
                        </div>
                        <div class="form-group w-50">
                            <label class="label text-white">Fullname: </label>
                            <input type="text" name="fullname" class="form-control" required/>
                            <div class="text-right  w-100 text-warning">
                                {{$errors->first('fullname')}}</div>
                        </div>


                        <div class="form-group">
                            <label class="label text-white">Post Body: </label>
                            <textarea name="body" rows="10" cols="30" class="form-control" required="true"></textarea>
                            <div class="text-right  w-100 text-warning">
                                {{$errors->first('body')}}</div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success"/>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

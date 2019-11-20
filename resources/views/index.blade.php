@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                    <th class="text-white bg-dark">ID</th>
                    <th class="text-white bg-dark">fullname</th>
                    <th class="text-white bg-dark">Title</th>
                    <th class="text-white bg-dark">Action</th>
                </thead>
                <tbody>
                @foreach($posts as $post)
                <tr>
                    <td class="text-white bg-dark">{{ $post->id }}</td>
                    <td class="text-white bg-info">{{ $post->fullname}}</td>
                    <td class="text-white  bg-secondary">{{ $post->title }}</td>
                    <td>
                        <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary">Show Post</a>
                        {{-- <div class="row justify-content-center">
                        @foreach ($user as $user)


                                <div class="profile-header-container mt-3">
                                    <div class="profile-header-img">
                                        <img class="rounded-circle" src="/storage/avatars/{{ $user->avatar }}" />
                                        <!-- badge -->
                                        <div class="rank-label-container text-center">
                                            <span class="label label-default rank-label">{{$user->name}}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div> --}}
                    </td>
                </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection

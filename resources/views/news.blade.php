@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="text-white text-center">Today's News Updates</h1>
    <h4 class="text-primary text-center">Real-time Updates of World News...</h4>
    </div>



    <iframe src="https://feed.mikle.com/widget/v2/120268/" height="35460px" width="100%" class="fw-iframe" scrolling="no" frameborder="0"></iframe>








@endsection

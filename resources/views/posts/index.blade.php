@extends('layouts.app')
@section('content')
    <h1>Posts</h1>
    @if(count($posts)>1)
        @foreach($posts as $post)
            <div class="card-body bg-primary text-white">
                <h3>{{$post->title}}</h3>
            </div>
        @endforeach
    @else
        <p>No post found</p>
    @endif
@endsection

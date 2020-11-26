@extends('layouts.app')
@section('content')
<h1>{{$title}}</h1>
@if(count($Services) > 0)
    <ul class="list-group">
        @foreach($Services as $service)
            <li class="list-group-item">{{$service}}</li>
        @endforeach
    </ul>
@endif
<p>Welcome to my piano website</p>
@endsection

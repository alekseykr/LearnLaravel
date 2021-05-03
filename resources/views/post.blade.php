@extends('layout.main')
@section('title',$post->title)
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{$post->discription}}</p>
        </div>
    </div>
@endsection

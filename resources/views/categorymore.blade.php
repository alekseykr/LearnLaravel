@extends('layout.main')
@section('title',$category->name)
@section('content')
    @foreach($posts as $post)
    @include('card')
    @endforeach
    {{$posts->links()}}
@endsection

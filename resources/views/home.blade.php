@extends('layout.main')
@section('title','News')
@section('content')
   @foreach($posts as $post)
       @include('card');
   @endforeach
    {{$posts->links()}}
@endsection


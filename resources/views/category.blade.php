@extends('layout.main')
@section('title','categories')
@section('content')
    <div class="card">
        <ul class="list-group list-group-flush">
            @foreach($category as $cat)
            <li class="list-group-item"><a href="{{route('categories',$cat->slug)}}">{{$cat->name}}</a></li>

            @endforeach
        </ul>
    </div>
@endsection

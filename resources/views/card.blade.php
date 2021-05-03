<div class="card mb-5">
    <h5 class="card-header">{{$post->category->name}}</h5>
    <div class="card-body">
        <h5 class="card-title">{{$post->title}}</h5>
        <p class="card-text">{{$post->discription}}</p>
        <a href="{{route('post',$post->id)}}" class="btn btn-primary">Далее</a>
    </div>
</div>

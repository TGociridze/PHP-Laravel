@extends('Layout.app')
@section('content')
{{--nav bar--}}
<div style=" height: 8vw; background-color: white; display: flex; align-items: center; justify-content: center" >
<nav class=" navbar-expand-lg pad-20; "  style="width: 100%; background-color: #f5ede4">
    <div style = "display: flex; flex-direction: row; justify-content: center;">
        <ul class="navbar-nav " style="padding: 5px; ">
            <li >
                <a href="/posts" class="nav-link" >
                    <i class="fas fa-home fa-2x" style="color: black"></i>
                </a>
            </li>
            <li >
                <a href="/posts/create" class="nav-link">
                    <i class="fas fa-plus fa-2x" style="color: black"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>
</div>
{{--section--}}
<div style=" width: 95vw; margin:10px auto; display: flex; flex-direction: row; justify-content: space-around; align-items: center; flex-wrap: wrap">
    @foreach($posts as $post )
        <div class="card" style="width: 20vw; height: 45vh; display: flex; margin-top: 25px; border: 2px solid black; border-radius: 30px">
            <div class="card-body">
                <h5 class="card-title " >
                    <a href="{{route('posts.show', $post->id)}}">
                        {{$post->id}}
                    </a>
                    <a href="{{route('posts.show', $post->id)}}" >
                        {{$post->title}}
                    </a>
                </h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$post->author}}</h6>
                <p class="card-text" style="">{{$post->text}}</p>
                <div style="height: 3vh; width: 100%;  position: absolute; bottom: 0; left: 0; border-top: 1px solid black">
                    <div style="display: flex; flex-direction: row; justify-content: space-around;">
                        <a href="{{route('posts.edit', $post->id)}}">
                            <i class="fas fa-edit fa-1x" style="color: black"></i>
                        </a>
                        <form method="post" action="{{route('posts.destroy', $post-> id)}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="color: black; background-color: transparent"class="fas fa-trash-alt fa-1x">
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach()

</div>
<div style = "display: flex; flex-direction: row; justify-content: center; margin-top: 15px; ">{{$posts->links()}}</div>
@endsection

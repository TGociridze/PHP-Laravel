@extends('Layout.app')
@section('content')
<div style="background-color: #718096; width: 70vw; margin:10px auto; margin-bottom:20px; padding: 3px 10px">
    <h1 style="text-align: center; color: white">Our Posts</h1>
    <table class="table">
        <thead style="text-align: center; color: white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Creat Date</th>
            <th scope="col">Delete</th>
            <th scope="col">Edit</th>
        </tr>
        </thead>
        @foreach($posts as $post )
            <tbody>

            <tr style="text-align: center; ">
                <td>
                    <a href="{{route('posts.show', $post->id)}}" style="color: white">
                        {{$post->id}}
                    </a></td>
                <td>
                    <a href="{{route('posts.show', $post->id)}}" style="color: white">
                    {{$post->title}}
                    </a></td>
                <td>{{$post->author}}</td>
                <td>{{$post->created_at}}</td>

                <td >
                    <form method="post" action="{{route('posts.destroy', $post-> id)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background-color: transparent; color: white"
                                class="fas fa-trash-alt fa-1x"></button>
                    </form>
                </td>
                <td >
                    <a href="{{route('posts.edit', $post->id)}}">
                        <i class="fas fa-edit fa-1x" style="color: white"></i>
                    </a>
                </td>
            </tr>
            @endforeach()
            </tbody>

    </table>
    <div style="text-align: center">{{$posts->links()}}</div>


@endsection

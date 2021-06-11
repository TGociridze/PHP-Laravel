@extends('Layout.app')
    @section('content')

    <div style="background-color: #718096; width: 50vw; margin:10px auto; margin-bottom:20px; padding: 3px 10px">
        <form action="{{route('posts.update', $post->id)}}" method='POST'>
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Post Title</label>
                <input type="Text" name="title" class="form-control" id="postTitle" aria-describedby="emailHelp"
                      value="{{old( 'title', $post->title)}}">
            </div>

            <div class="form-group">
                <label for="title">Post Text</label>
                <textarea name="text" class="form-control" id="postText">{{old( 'text', $post->text)}}
                </textarea>
            </div>

            <div class="form-group">
                <label for="title">Post Author</label>
                <input type="Text" name="author" class="form-control" id="postAuthor" aria-describedby="emailHelp"
                       placeholder="Enter Post Author" value="{{old( 'author', $post->author)}}">
            </div>

            <button type="submit" class="btn btn-primary mb-2">Edit Post</button>
            <button type="button" class="btn btn-primary mb-2">
                <a href="/posts" style="text-decoration: none; color: white">Back</a></button>

        </form>
    </div>

    @endsection


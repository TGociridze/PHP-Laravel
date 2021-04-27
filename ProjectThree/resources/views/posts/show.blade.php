@extends('Layout.app')
@section('content')
    <style>
        p {
            color: white;
            font-size: larger
        }
    </style>

<div style=" display: flex; justify-content: center; align-items: center; margin: 30vh">

        <div style="background-color: #718096; padding: 15px">
            <div class="flex items-center">
                <div>
                    <p>{{$post->id}}.</p>
                </div>
                <div class="ml-4">
                    <p>{{$post->title}}</p>
                </div>
            </div>

            <div class="flex items-center">
                <div style="font-size: large">
                    <p> {{$post->text}}</p>
                </div>
            </div>
            <button type="button" class="btn btn-primary mb-2">
                <a href="/posts" style="text-decoration: none; color: white">Back</a></button>
        </div>


</div>
@endsection

@extends('Layout.app')
@section('content')
    <style>
        p {
            color: black;
            font-size: larger
        }
    </style>

<div style="width: 90vw; margin: 50px auto; background-color: white; border-radius: 30px">

        <div style=" padding: 15px">
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

                <button type="button" class="btn  mb-2">
                    <a href="/posts" style="color: black ">Back</a></button>

        </div>


</div>
@endsection

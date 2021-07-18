{{--@extends('Layout.app')--}}
{{--@section('content')--}}

<form style="padding: 50px" method="Post" action="{{route('send')}} ">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="email" style= "width:20%;" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>
{{--@endsection--}}

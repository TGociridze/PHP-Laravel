@extends('Layout.app')
@section('content')

    <div style="background-color: #718096; width: 50vw; margin:10px auto; margin-bottom:20px; padding: 3px 10px">
        <form action="{{route('employees.update', $employee->id)}}" method='POST'>
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Employee Name</label>
                <input type="Text" name="name" class="form-control" id="employeename" value="{{old( 'name', $employee->name)}}">
            </div>

            <div class="form-group">
                <label for="surname">Employee Surname</label>
                <input name="surname" class="form-control" id="employeesurname" value="{{old( 'text', $employee->surname)}}">
            </div>

            <div class="form-group">
                <label for="action">Action (hired=1; not hired=0)</label>
                <input type="number" name="action" class="form-control" max="1" min="0" id="employeestatus" value="{{old( 'author', $employee->action)}}" required>
                <small>Only use 1 or 0</small>

            </div>

            <button type="submit" class="btn btn-primary mb-2">Edit Employee Info</button>
            <button type="button" class="btn btn-primary mb-2">
                <a href="/employees" style="text-decoration: none; color: white">Back</a></button>
        </form>
    </div>
@endsection


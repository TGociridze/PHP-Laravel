@extends('Layout.app')
@section('content')
<div style="background-color: #718096; width: 70vw; margin:10px auto; margin-bottom:20px; padding: 3px 10px">
    <h1 style="text-align: center; color: white">Our Employees</h1>
    <table class="table">
        <thead style="text-align: center; color: white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        @foreach($employees as $employee )
            <tbody>
                <tr style="text-align: center; ">
                    <td>
                        <a style="color: white">
                            {{$employee->id}}
                        </a>
                    </td>
                    <td>
                        <a style="color: white">
                            {{$employee->name}}
                        </a>
                    </td>
                    <td style="color: white">{{$employee->surname}}</td>
                    <td>
                        <div style="display: inline-block;">
                            <?php
                            if ($employee->action == 1) {
                                echo '<label class="switch"><input type="checkbox" name="is_hired" checked disabled><span class="slider round"></span></label>' ;
                            } else {
                                echo '<label class="switch"><input type="checkbox" name="is_hired" disabled><span class="slider round"></span></label>';
                            }

                            ?>
                        </div>

                        <div style="display: inline-block;">
                        <form method="post" action="{{route('employees.destroy', $employee-> id)}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background-color: transparent; color: white"
                                    class="fas fa-trash-alt fa-1x"></button>
                        </form>
                        </div>
                        <div style="display: inline-block;">
                        <a href="{{route('employees.edit', $employee->id)}}">
                            <i class="fas fa-edit fa-1x" style="color: white"></i>
                        </a>
                        </div>
                    </td>
                </tr>
            </tbody>
        @endforeach()
    </table>
    <div style="margin: auto">{{$employees->links()}}</div>
</div>
@endsection

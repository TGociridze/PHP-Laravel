<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index ()
    {
        $employees = Employee::all();

        if (count($employees) >= 1) {
            $employees = Employee::paginate(10);

            return view('employees/index', compact('employees'));
        } else {
            return "employees not registered yet";
        }
    }

    public function edit($id) {
        $employee = Employee::findOrFail($id);
        return view('employees.edit', compact('employee'));
    }


    public function update(Request $request, $id) {
        $employee = Employee::findOrFail($id);
        $employee->update($request->all());
        return redirect('/employees');
    }

    public function destroy($id) {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect()->back();
    }

}

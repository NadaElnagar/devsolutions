<?php

namespace App\Http\Repository;

use App\Models\Department;
use App\Models\Employee;

class EmployeeRepository
{

    public function index()
    {
        $searchTerm = request()->input('search');
        $employees = Employee::with('department');
        if($searchTerm && !empty($employees)){
            $employees->where('name', 'like', "%$searchTerm%")
                ->orWhere('job_title', 'like', "%$searchTerm%");
        }
        return $employees->paginate(15);
    }


    public function store($request)
    {
        $employee = new Employee();
        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->phone_number = $request->input('phone_number');
        $employee->job_title = $request->input('job_title');
        $employee->salary = $request->input('salary');
        $employee->departments_id = $request->input('departments_id');
        $employee->save();
        return $employee;
    }

    public function edit($id)
    {
        return Employee::findOrFail($id);
    }

    public function update($request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->phone_number = $request->input('phone_number');
        $employee->job_title = $request->input('job_title');
        $employee->salary = $request->input('salary');
        $employee->departments_id = $request->input('departments_id');
        $employee->save();
        return $employee;
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        return $employee->delete();
    }


     public function departments()
     {
         return  Department::all();
     }

}

<?php

namespace App\Http\Controllers;

use App\Exports\EmployeeExport;
use App\Http\Repository\EmployeeRepository;
use App\Http\Requests\EmployeeRequest;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function __construct()
    {
        $this->employee = new EmployeeRepository();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = $this->employee->index();
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = $this->employee->departments();
        return view('employees.create', compact('departments'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeRequest $request)
    {
        if ($this->employee->store($request)) {
            return redirect('/employees')->with('success', 'Employee has been added');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = $this->employee->edit($id);
        $departments = $this->employee->departments();
        return view('employees.edit', compact('employee', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($this->employee->update($request, $id))
        {
            return redirect('/employees')->with('success', 'Employee has been updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $this->employee->destroy($id);
            return response()->json([
                'message' => trans('dashboard.employee_delete_successfully')
            ]);

    }


    public function search(Request $request)
    {
        $employees =$this->employee->search();
        return view('employees.index', compact('employees'));
    }

    public function export()
    {
         return Excel::download(new EmployeeExport(), 'employees.xlsx');
     }



}

<?php

namespace App\Exports;
use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;

class EmployeeExport  implements FromCollection
{
    public function collection()
    {
        $searchTerm = request()->input('search');
        $employees = Employee::with('department');
        if($searchTerm && !empty($employees)){
            $employees->where('name', 'like', "%$searchTerm%")
                ->orWhere('job_title', 'like', "%$searchTerm%");
        }
        return $employees->get();
    }
}

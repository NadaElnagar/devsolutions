<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:employees|max:255',
            'phone_number' => 'required|string|max:20',
            'job_title' => 'required|string|max:255',
            'salary' => 'required|numeric|min:0max:999999.99',
            'departments_id' => 'required|exists:departments,id',

        ];
    }
}

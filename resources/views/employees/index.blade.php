{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- vendor styles --}}
@section('vendor-style')
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/css/select.dataTables.min.css')}}">
@endsection

{{-- page style --}}
@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{asset('css/pages/data-tables.css')}}">
@endsection

{{-- page content --}}
@section('content')
    <!-- users list start -->
    <div class="section section-data-tables">
        <div class="users-list-filter">
            <div class="card-panel">
                <div class="row">
                    <div class="col s9"></div>
                    <div class="col s3">

                         <a href="{{url('employees/create')}}">Add Employee</a>

                    </div>

                </div>
            </div>
        </div>
        <div class="row">

            <div class="col s12" id="active">
                <div class="card">
                    <div class="card-content">

                        <div class="col s12">

                            <form class="login-form" method="any" action="{{ url('/employees') }}">
                                <div class="row">
                                    <div class="col s12 input-field">
                                        <div class="form-group validated">
                                            <label>{{trans('dashboard.search')}}</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" value="{{ Request::get('search')}}" name="search"/>
                                            </div>
                                        </div>
                                    </div>
                                    <button id="filter" class="btn btn-sm btn-primary" type="submit">
                                        Filter
                                    </button>

                                    <a href="{{ route('employee.export', request()->query()) }}" class="btn btn-success">Export</a>

                                </div>


                            </form>
                            <br/></div>

                        <h4 class="card-title">{{trans('dashboard.employee_list')}}</h4>
                        <div class="row">
                            <div class="col s12">
                                <table  class="display">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Job Title</th>
                                        <th>Salary</th>
                                        <th>Department</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($employees as $employee)
                                        <tr id="row-{{$employee->id}}">
                                            <td>{{ $employee->id }}</td>
                                            <td>{{ $employee->name }}</td>
                                            <td>{{ $employee->email }}</td>
                                            <td>{{ $employee->phone_number }}</td>
                                            <td>{{ $employee->job_title }}</td>
                                            <td>{{ $employee->salary }}</td>
                                            <td>{{ $employee->department->name }}</td>
                                            <td>
                                                <a href="/employees/{{ $employee->id }}/edit" class="btn btn-sm btn-primary">Edit</a>
                                                <a class="waves-effect waves-light btn modal-trigger mb-2 mr-1 delete-button" href="#modal1"
                                                   title="delete"
                                                   data-url="{{ route('employees.destroy',$employee->id) }}"
                                                   data-item-id="{{ $employee->id }}">  Delete </a>

                                                </td>
                                            </tr>
                                        @endforeach
                                     </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Job Title</th>
                                        <th>Salary</th>
                                        <th>Department</th>
                                        <th>Actions</th>
                                    </tr>
                                    </tfoot>
                                </table>
                                <div class="dataTables_paginate paging_simple_numbers" id="data-table-simple_paginate">
                                    {{$employees->links("pagination::bootstrap-4")}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        @include('includes.alerts.delete-modal')
    </div>

    <!-- users list ends -->
@endsection


@section('vendor-script')
    <script src="{{asset('vendors/data-tables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('vendors/data-tables/js/dataTables.select.min.js')}}"></script>
@endsection

@section('page-script')
    <script src="{{asset('js/scripts/data-tables.js')}}"></script>
    <script src="{{asset('js/scripts/advance-ui-modals.js')}}"></script>
    <script src="{{asset('dashboard_assets/custom/js/delete-item.js')}}" type="text/javascript"></script>
@endsection

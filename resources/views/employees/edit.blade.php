{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Edit Employee')

{{-- vendor styles --}}
@section('vendor-style')
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/select2/select2-materialize.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/dropify/css/dropify.min.css')}}">
@endsection
{{-- page style --}}
@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{asset('css/pages/page-users.css')}}">
    <style>
        --ck-color-image{
            display: none;
        }
        --ck-color-base-gallery{
            display: none;
        }
    </style>
@endsection

{{-- page content --}}
@section('content')
    <!-- users edit start -->
    <div class="section users-edit">
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
            <!-- Search for small screen-->
            <div class="container">
                <div class="row">
                    <div class="col s10 m6 l6">
                        <h5 class="breadcrumbs-title mt-0 mb-0"><span>@yield('title') </span></h5>
                        @if(isset($breadcrumbs))
                            <ol class="breadcrumbs mb-0">
                                @foreach ($breadcrumbs as $breadcrumb)
                                    <li class="breadcrumb-item {{ !isset($breadcrumb['link']) ? 'active' :''}}">
                                        @if(isset($breadcrumb['link']) && ($breadcrumb['link'] !== 'javascript:void(0)'))
                                            <a href="{{url($breadcrumb['link'])}}">@endif{{$breadcrumb['name']}}@if(isset($breadcrumb['link']))</a>
                                        @endif
                                    </li>
                                @endforeach
                            </ol>
                        @endif
                    </div>

                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <div class="row">
                    <div class="col s12" id="account">

                        <form id="form" action="{{ url('employees/'.$employee->id.'/update' ) }}"
                              class="form form-label-right" method="post" enctype="multipart/form-data">
                            @csrf

                            @method('post')
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="card-body">

                                <div class="row">
                                    <div class="col s12 input-field">
                                        <div class="form-group validated">
                                            <label>{{trans('dashboard.name')}}</label>
                                            <span class="text-danger"> * </span>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-pen"></i>
                                                    </span>
                                                </div>
                                                <input type="text" name="name"  value="{{$employee->name}}" class="form-control {{ inputError('name') }}" aria-describedby="basic-addon1" required>
                                                <div class="invalid-feedback">
                                                    <strong>{{ msgError('name') }}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 input-field">
                                        <div class="form-group validated">
                                            <label>{{trans('dashboard.email')}}</label>
                                            <span class="text-danger"> * </span>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-pen"></i>
                                                    </span>
                                                </div>
                                                <input type="email" name="email" value="{{$employee->email}}" class="form-control {{ inputError('email') }}" aria-describedby="basic-addon1" required>
                                                <div class="invalid-feedback">
                                                    <strong>{{ msgError('email') }}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s6 input-field">
                                        <div class="form-group validated">
                                            <label>{{trans('dashboard.phone_number')}}</label>
                                            <span class="text-danger"> * </span>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-pen"></i>
                                                    </span>
                                                </div>
                                                <input type="number" value="{{$employee->phone_number}}" name="phone_number" class="form-control {{ inputError('phone_number') }}" aria-describedby="basic-addon1" required>
                                                <div class="invalid-feedback">
                                                    <strong>{{ msgError('phone_number') }}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s6 input-field">
                                        <div class="form-group validated">
                                            <label>{{trans('dashboard.job_title')}}</label>
                                            <span class="text-danger"> * </span>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-pen"></i>
                                                    </span>
                                                </div>
                                                <input type="text" value="{{$employee->job_title}}" name="job_title" class="form-control {{ inputError('job_title') }}" aria-describedby="basic-addon1" required>
                                                <div class="invalid-feedback">
                                                    <strong>{{ msgError('job_title') }}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s6 input-field">
                                        <div class="form-group validated">
                                            <label>{{trans('dashboard.salary')}}</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-pen"></i>
                                                    </span>
                                                </div>
                                                <input type="number" value="{{$employee->salary}}" name="salary" class="form-control {{ inputError('salary') }}" aria-describedby="basic-addon1" >
                                                <div class="invalid-feedback">
                                                    <strong>{{ msgError('salary') }}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col s12 input-field">
                                        <div class="form-group validated">
                                            <label>{{trans('dashboard.departments')}}</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-pen"></i>
                                                    </span>
                                                </div>
                                                <select name="departments_id"
                                                        class="form-control select2 {{ $errors->has("departments_id") ? 'is-invalid' : '' }}" >
                                                    <option > </option>
                                                    @foreach($departments as $department)
                                                        <option @if($department->id == $employee->departments_id) selected @endif value="{{$department->id}}">{{$department->name}}</option>
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback">
                                                    <strong>{{ $errors->has('departments_id') ? $errors->first('flavor_id') : '' }}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="kt-form__actions">
                                    <button type="submit" class="btn btn-primary add_loading">{{trans('dashboard.submit')}}</button>
                                    <button type="reset" class="btn btn-secondary">{{trans('dashboard.reset')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- users edit ends -->
@endsection

{{-- vendor scripts --}}
@section('vendor-script')
    <script src="{{asset('vendors/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('vendors/dropify/js/dropify.min.js')}}"></script>
    <script src="{{asset('vendors/quill/katex.min.js')}}"></script>
    <script src="{{asset('vendors/quill/highlight.min.js')}}"></script>
    <script src="{{asset('vendors/quill/quill.min.js')}}"></script>
@endsection
{{-- page script --}}
@section('page-script')
    <script src="{{asset('dashboard_assets/custom/js/ckeditor.js')}}"></script>
    <script src="{{asset('js/scripts/form-file-uploads.js')}}"></script>
    <script>
        let elements = document.querySelectorAll('.editors')

        for (let element of elements) {
            ClassicEditor.create(element, {})
                .then( editor => {
                    editor.editing.view.change((writer) => {
                        writer.setStyle(
                            "height",
                            "200px",
                            editor.editing.view.document.getRoot()
                        );
                    });
                    element.ckEditor = editor;
                } )
                .catch( err => {
                    console.error( err.stack );
                } );
        }
    </script>
@endsection

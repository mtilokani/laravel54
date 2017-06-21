@extends('layouts.admin.default')

@section('page-style')

@endsection

@section('page-content')
	<div class="portlet light">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                <i class="icon-share font-dark hide"></i>
                <span class="caption-subject font-dark bold uppercase">Edit Module</span>
            </div>
        </div>
        <div class="portlet-body form">
       		{!! Form::open(['route' => ['modules.update', 'domain' => app('request')->route()->parameter('company'), 'moduleId' => $module->id], 'method' => 'PUT', 'class' => 'js-frm-edit-module', 'role' => 'form', 'enctype' => 'multipart/form-data']) !!}
		    	@include('modules.module.form', ['from'=>'edit'])
			{{ Form::close() }}
        </div>
    </div>
@endsection

@section('page-script')
    <script type="text/javascript" src="{{ Module::asset('module:js/modules.js') }}"></script>
@endsection
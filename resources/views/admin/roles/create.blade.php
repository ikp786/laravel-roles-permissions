@extends('admin_panel.layouts.app')
@section('content')
<h3>Add new role</h3>
<div class="row">
    @include('admin_panel.inc.validation_message')
    @include('admin_panel.inc.auth_message')
    {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
    <div class="row">
        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>
            <div class="col-md-6" id="">
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
        </div>
        <br><br><br><br>
        <div class="form-group row"> 
            <label for="permissions" class="col-md-4 col-form-label text-md-right">{{ __('Permissions') }}</label>
            <div class="col-md-6" id="permissions-select">
                <select name="permission[]" id="permissions" class="@error('permissions') is-invalid @enderror" multiple>
                    @foreach ($permissions as $id => $permission)
                    <option value="{{ $id }}" {{ (in_array($id, old('permissions', []))) ? 'selected' : '' }}>{{ $permission }}</option>
                    @endforeach
                </select>
                <a href="#" id="permission-select-all" class="btn btn-link">select all</a>
                <a href="#" id="permission-deselect-all" class="btn btn-link">deselect all</a>
                @error('permissions')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    {!! Form::close() !!}
    @endsection
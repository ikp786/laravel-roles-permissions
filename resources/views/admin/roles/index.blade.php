@extends('admin_panel.layouts.app')
@section('content')
<div class="row">                    
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Exam Toppers</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th><strong>ROLL ID</strong></th>
                                <th><strong>Title</strong></th>
                                <th><strong>Action</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($roles as $role)
                            <tr>
                                <td><strong>{{$role->id}}</strong></td>                                                
                                <td>{{$role->name}} </td>                                                                                               
                                <td>
                                    <div class="d-flex">

                                    <a class="btn btn-primary shadow btn-xs sharp me-1" href="{{ route('roles.show',$role->id) }}"><i class="fas fa-eye"></i></a>
                                        @can('role-edit')
                                            <a class="btn btn-primary shadow btn-xs sharp me-1" href="{{ route('roles.edit',$role->id) }}"><i class="fas fa-pencil-alt"></i></a>
                                        @endcan
                                        @if($role->id != 1)
                                        @can('role-delete') 
                                            {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                            <button onclick="return confirm('Are you sure to delete role?')" class="btn btn-danger shadow btn-xs sharp" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>                                            
                                            {!! Form::close() !!}
                                        @endcan
                                        @endif 
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="100%" class="text-center text-muted py-3">No Roles Found</td>
                            </tr>
                            @endforelse                                         
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection  
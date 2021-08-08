@extends('layouts.app')
@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">{{ __('Permissions') }}</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('New permission group') }}</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">{{ __('Actions') }}</button>
                        <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
                            <span class="visually-hidden">{{ __('Toggle Dropdown') }}</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">
                            <a class="dropdown-item" href="{{ route('admin.permissions.index') }}">{{ __('Permission list') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="mx-auto">
                    <form action="{{ route('admin.permissions.bulk-store') }}" method="POST" class="row g-3">
                        @csrf
                        <h6 class="mb-0 text-uppercase">{{ __('New permission group') }}</h6>
                        <hr/>
                        @include('partials.display-form-errors')
                        <div class="card border-top border-0 border-4 border-primary">
                            <div class="card-header">
                                <div class="card-title d-flex align-items-center">
                                    <div><i class="bx bx-bullseye me-1 font-22 text-primary"></i></div>
                                    <h5 class="mb-0 text-primary">{{ __('New permission group') }}</h5>
                                </div>
                            </div>
                            <div class="card-body row">
                                <x-forms.input-text idName="inputPermissionObject" name="object" label="{{ __('Permission object') }}" type="text" divClass="col-lg-3 col-md-6" value="{{ old('object') }}" helpText="{{ __('Permission object.') }}" />
                            </div>
                        </div>
                        <!-- ./card -->

                        <div class="card border-top border-0 border-4 border-primary">
                            <div class="card-header">
                                <div class="card-title d-flex align-items-center">
                                    <h5 class="me-1 font-22 mb-0 text-primary">{{ __('Roles') }}</h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1" name="check_roles" id="selectAllRoles">
                                            <label class="form-check-label" id="selectAllRolesLabel" for="selectAllRoles">{{ __('Select all') }}</label>
                                        </div>
                                        <hr />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        @foreach( \App\Models\Role::all() as $role )
                                        <div class="form-check">
                                            <input class="form-check-input role-checkbox" type="checkbox" value="{{ $role->id }}" name="roles[]" id="inputAssignRole-{{ $role->id }}" @if( is_array( old('roles') ) ) @if( in_array( $role->id, old('roles') ) ) checked="checked" @endif @endif>
                                            <label class="form-check-label" for="inputAssignRole-{{ $role->id }}">{{ $role->name }}</label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ./card -->

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary px-5">{{ __('Create') }}</button>
                                <a href="{{ route('admin.permissions.index') }}" class="btn btn-danger px-5">{{ __('Cancel') }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
    <!--end page wrapper -->
@endsection
@section('scripts')
    <script>
        $('#selectAllRoles').click( function() {
            $('.role-checkbox').prop('checked', this.checked);
            if ( this.checked ) {
                $('#selectAllRolesLabel').text('{{ __('Unselect all') }}');
            } else {
                $('#selectAllRolesLabel').text('{{ __('Select all') }}');
            }
        } );
    </script>
@endsection

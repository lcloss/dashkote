@extends('layouts.app')
@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">{{ __('Roles') }}</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Role edit') }}</li>
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
                            <a class="dropdown-item" href="{{ route('admin.roles.show', $role) }}">{{ __('View role') }}</a>
                            <a class="dropdown-item" href="{{ route('admin.roles.create') }}">{{ __('New role') }}</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('admin.roles.index') }}">{{ __('Role list') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="mx-auto">
                    <form action="{{ route('admin.roles.update', $role) }}" method="POST" class="row g-3">
                        @method('PUT')
                        @csrf
                        <h6 class="mb-0 text-uppercase">{{ __('Role edit') }}</h6>
                        <hr/>
                        <div class="card border-top border-0 border-4 border-primary">
                            <div class="card-header">
                                <div class="card-title d-flex align-items-center">
                                    <div><i class="bx bx-bullseye me-1 font-22 text-primary"></i></div>
                                    <h5 class="mb-0 text-primary">{{ $role->name }}</h5>
                                </div>
                            </div>
                            <div class="card-body row">
                                <x-forms.input-text idName="inputRoleName" name="name" label="{{ __('Role Name') }}" type="text" divClass="col-lg-3 col-md-6" value="{{ old('name', $role->name) }}" helpText="{{ __('Role name.') }}" />
                            </div>
                        </div>
                        <!-- ./card -->

                        <div class="card border-top border-0 border-4 border-primary">
                            <div class="card-header">
                                <div class="card-title d-flex align-items-center">
                                    <h5 class="me-1 font-22 mb-0 text-primary">{{ __('Permissions') }}</h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1" name="check_permissions" id="selectAllPermissions">
                                            <label class="form-check-label" id="selectAllPermissionsLabel" for="selectAllPermissions">{{ __('Select all') }}</label>
                                        </div>
                                        <hr />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                    @php
                                        $groupCtrl = '';
                                    @endphp
                                    @foreach( \App\Models\Permission::orderBy('title')->get() as $permission )
                                        @php
                                            $group = explode('_', $permission->title)[0];
                                        @endphp
                                        @if( $groupCtrl != '' && !( \Illuminate\Support\Str::startsWith( $permission->title, $groupCtrl ) ) )
                                        </div><div class="col">
                                        @endif
                                        @php
                                            $groupCtrl = $group;
                                        @endphp
                                        <div class="form-check">
                                            <input class="form-check-input permission-checkbox" type="checkbox" value="{{ $permission->id }}" name="permissions[]" id="inputAssignRole-{{ $permission->id }}" @if( $role->permissions->contains( $permission->id ) ) checked="checked" @endif>
                                            <label class="form-check-label" for="inputAssignRole-{{ $permission->id }}">{{ $permission->title }}</label>
                                        </div>
                                    @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ./card -->

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary px-5">{{ __('Update') }}</button>
                                <a href="{{ route('admin.roles.index') }}" class="btn btn-danger px-5">{{ __('Cancel') }}</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!--end row-->
        </div>
    </div>
    <!--end page wrapper -->
@endsection
@section('scripts')
    <script>
        $('#selectAllPermissions').click( function() {
            $('.permission-checkbox').prop('checked', this.checked);
            if ( this.checked ) {
                $('#selectAllPermissionsLabel').text('{{ __('Unselect all') }}');
            } else {
                $('#selectAllPermissionsLabel').text('{{ __('Select all') }}');
            }
        } );
    </script>
@endsection

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
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Permission detail') }}</li>
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
                            <a class="dropdown-item" href="{{ route('admin.permissions.edit', $permission) }}">{{ __('Edit permission') }}</a>
                            <a class="dropdown-item" href="{{ route('admin.permissions.create') }}">{{ __('New permission') }}</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('admin.permissions.index') }}">{{ __('Permission list') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="mx-auto">
                    <form class="row g-3">
                        <h6 class="mb-0 text-uppercase">{{ __('Permission detail') }}</h6>
                        <hr/>
                        <div class="card border-top border-0 border-4 border-primary">
                            <div class="card-header">
                                <div class="card-title d-flex align-items-center">
                                    <div><i class="bx bx-bullseye me-1 font-22 text-primary"></i></div>
                                    <h5 class="mb-0 text-primary">{{ $permission->title }}</h5>
                                </div>
                            </div>
                            <div class="card-body row">
                                <x-forms.input-text idName="inputPermissionName" name="name" label="{{ __('Permission Title') }}" type="text" divClass="col-lg-3 col-md-6" value="{{ old('name', $permission->title) }}" helpText="{{ __('Permission title.') }}" disabled="disabled" />
                                <x-forms.input-text idName="inputCreatedAt" name="created_at" label="{{ __('Created At') }}" type="text" divClass="col-lg-3 col-md-6" value="{{ old('created_at', $permission->created_at) }}" helpText="{{ __('Created At.') }}" disabled="disabled" />
                                <x-forms.input-text idName="inputUpdatedAt" name="updated_at" label="{{ __('Updated At') }}" type="text" divClass="col-lg-3 col-md-6" value="{{ old('updated_at', $permission->updated_at) }}" helpText="{{ __('Updated At.') }}" disabled="disabled" />
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
                                @foreach( $permission->roles as $role )
                                    <a href="{{ route('admin.roles.show', $role) }}"><span class="badge bg-light-primary text-primary ms-2">{{ $role->name }}</span></a>
                                @endforeach
                            </div>
                        </div>
                        <!-- ./card -->

                        <div class="row">
                            <div class="col-12">
                                <a href="{{ route('admin.permissions.index') }}" class="btn btn-primary px-5">{{ __('List') }}</a>
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

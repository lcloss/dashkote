@extends('layouts.app')
@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-lg-3 col-xl-2">
                                    <a href="{{ route('admin.roles.create') }}" class="btn btn-primary mb-3 mb-lg-0"><i class='bx bxs-plus-square'></i>{{ __('New Role') }}</a>
                                </div>
                                <div class="col-lg-9 col-xl-10">
                                    <form class="float-lg-end">
                                        <div class="row row-cols-lg-auto g-2">
                                            <div class="col-12">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control ps-5" placeholder="Search Product..."> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                    <button type="button" class="btn btn-white">{{ __('Sort By') }}</button>
                                                    <div class="btn-group" role="group">
                                                        <button id="btnGroupDrop1" type="button" class="btn btn-white dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class='bx bx-chevron-down'></i>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                            <li><a class="dropdown-item" href="#">{{ __('Dropdown link') }}</a></li>
                                                            <li><a class="dropdown-item" href="#">{{ __('Dropdown link') }}</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                    <button type="button" class="btn btn-white">{{ __('Collection Type') }}</button>
                                                    <div class="btn-group" role="group">
                                                        <button id="btnGroupDrop1" type="button" class="btn btn-white dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class='bx bxs-category'></i>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                            <li><a class="dropdown-item" href="#">{{ __('Dropdown link') }}</a></li>
                                                            <li><a class="dropdown-item" href="#">{{ __('Dropdown link') }}</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="btn btn-white">{{ __('Price Range') }}</button>
                                                    <div class="btn-group" role="group">
                                                        <button id="btnGroupDrop1" type="button" class="btn btn-white dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class='bx bx-slider'></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="btnGroupDrop1">
                                                            <li><a class="dropdown-item" href="#">{{ __('Dropdown link') }}</a></li>
                                                            <li><a class="dropdown-item" href="#">{{ __('Dropdown link') }}</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="card radius-10 mb-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h5 class="mb-1">{{ __('All Roles') }}</h5>
                                </div>
                                <div class="ms-auto">
                                    <a href="javscript:;" class="btn btn-primary btn-sm radius-30">{{ __('View All Roles') }}</a>
                                </div>
                            </div>

                            <div class="table-responsive mt-3">
                                <table class="table align-middle mb-0">
                                    <thead class="table-light">
                                    <tr>
                                        <th>{{ __('Role ID') }}</th>
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('Creation') }}</th>
                                        <th class="col-6">{{ __('Permissions') }}</th>
                                        <th>{{ __('Actions') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $roles as $role )
                                    <tr>
                                        <td>#{{ $role->id }}</td>
                                        <td><h6 class="mb-1 font-14">{{ $role->name }}</h6></td>
                                        <td>{{ $role->created_at }}</td>
                                        <td>
                                            <div class="row">
                                                @foreach( $role->permissions as $permission )
                                                <div class="col">
                                                    <a href="{{ route('admin.permissions.show', $permission) }}"><span class="badge bg-light-primary text-primary ms-2 col">{{ $permission->title }}</span></a>
                                                </div>
                                                @endforeach
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex order-actions">
                                                <a href="{{ route('admin.roles.show', $role) }}" class="ms-2 text-primary bg-light-primary border-0"><i class='bx bx-show-alt' ></i></a>
                                                <a href="{{ route('admin.roles.edit', $role) }}" class="ms-2 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                                <a href="{{ route('admin.roles.destroy', $role) }}" class="ms-2 text-danger bg-light-danger border-0 deleteButton" data-item="{{ __('Role') }}" data-id="{{ $role->id }}" data-name="{{ $role->name }}" data-bs-toggle="modal" data-bs-target="#confirmationDeleteModal"><i class='bx bxs-trash'></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                @include('partials.delete-modal')
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end row-->
        </div>
    </div>
    <!--end page wrapper -->
@endsection
@section('scripts')
    @include('partials.delete-script')
@endsection

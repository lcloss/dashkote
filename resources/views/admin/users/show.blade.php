@extends('layouts.app')
@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">{{ __('Users') }}</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('User detail') }}</li>
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
                            <a class="dropdown-item" href="{{ route('admin.users.edit', $user) }}">{{ __('Edit user') }}</a>
                            <a class="dropdown-item" href="{{ route('admin.users.create') }}">{{ __('New user') }}</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('admin.users.index') }}">{{ __('User list') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="mx-auto">
                    <form class="row g-3">
                        <h6 class="mb-0 text-uppercase">{{ __('User detail') }}</h6>
                        <hr/>
                        <div class="card border-top border-0 border-4 border-primary">
                            <div class="card-header">
                                <div class="card-title d-flex align-items-center">
                                    <div><i class="bx bx-bullseye me-1 font-22 text-primary"></i></div>
                                    <h5 class="mb-0 text-primary">{{ $user->name }}</h5>
                                </div>
                            </div>
                            <div class="card-body row">
                                <x-forms.input-text idName="inputFirstName" name="first_name" label="{{ __('First Name') }}" type="text" divClass="col-lg-3 col-md-6" value="{{ old('first_name', $user->first_name) }}" helpText="{{ __('User first name.') }}" disabled="disabled" />
                                <x-forms.input-text idName="inputLastName" name="last_name" label="{{ __('Last Name') }}" type="text" divClass="col-lg-3 col-md-6" value="{{ old('last_name', $user->last_name) }}" helpText="{{ __('User last name.') }}" disabled="disabled" />
{{--                                <x-forms.input-text idName="inputName" name="name" label="{{ __('Name') }}" type="text" divClass="col-lg-6 col-md-12" value="{{ old('name', $user->name) }}" helpText="{{ __('User name.') }}" disabled="disabled" />--}}
                                <x-forms.input-text idName="inputEmailName" name="email" label="{{ __('Email') }}" type="text" divClass="col-lg-6 col-md-12" value="{{ old('email', $user->email) }}" helpText="{{ __('User email address.') }}" disabled="disabled" />
                                <x-forms.input-text idName="inputCreatedAt" name="created_at" label="{{ __('Register date') }}" type="text" divClass="col-lg-3 col-md-6" value="{{ old('created_at', $user->created_at) }}" helpText="{{ __('Registered date.') }}" disabled="disabled" />
                                <x-forms.input-text idName="inputUpdatedAt" name="updated_at" label="{{ __('Updated date') }}" type="text" divClass="col-lg-3 col-md-6" value="{{ old('updated_at', $user->updated_at) }}" helpText="{{ __('Registered date.') }}" disabled="disabled" />

                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">{{ __('Address') }}</label>
                                    <textarea class="form-control" id="inputAddress" placeholder="Address..." rows="3"></textarea>
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">{{ __('Address 2') }}</label>
                                    <textarea class="form-control" id="inputAddress2" placeholder="Address 2..." rows="3"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">{{ __('City') }}</label>
                                    <input type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputState" class="form-label">{{ __('State') }}</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>{{ __('Choose...') }}</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="inputZip" class="form-label">{{ __('Zip') }}</label>
                                    <input type="text" class="form-control" id="inputZip">
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">{{ __('Check me out') }}</label>
                                    </div>
                                </div>
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
                                @foreach( $user->roles as $role )
                                    <a href="{{ route('admin.roles.show', $role) }}"><span class="badge bg-light-primary text-primary ms-2">{{ $role->name }}</span></a>
                                @endforeach
                            </div>
                        </div>
                        <!-- ./card -->

                        <div class="row">
                            <div class="col-12">
                                <a href="{{ route('admin.users.index') }}" class="btn btn-primary px-5">{{ __('List') }}</a>
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

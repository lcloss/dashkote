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
                            <li class="breadcrumb-item active" aria-current="page">{{ __('New user') }}</li>
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
                            <a class="dropdown-item" href="{{ route('admin.users.index') }}">{{ __('User list') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="mx-auto">
                    <form action="{{ route('admin.users.store') }}" method="POST" class="row g-3">
                        @csrf
                        <h6 class="mb-0 text-uppercase">{{ __('New user') }}</h6>
                        <hr/>
                        @include('partials.display-form-errors')
                        <div class="card border-top border-0 border-4 border-primary">
                            <div class="card-header">
                                <div class="card-title d-flex align-items-center">
                                    <div><i class="bx bx-bullseye me-1 font-22 text-primary"></i></div>
                                    <h5 class="mb-0 text-primary">{{ __('New user') }}</h5>
                                </div>
                            </div>
                            <div class="card-body row">
                                <x-forms.input-text idName="inputFirstName" name="first_name" label="{{ __('First Name') }}" type="text" divClass="col-lg-3 col-md-6" value="{{ old('first_name') }}" helpText="{{ __('User first name.') }}" />
                                <x-forms.input-text idName="inputLastName" name="last_name" label="{{ __('Last Name') }}" type="text" divClass="col-lg-3 col-md-6" value="{{ old('last_name') }}" helpText="{{ __('User last name.') }}" />
{{--                                <x-forms.input-text idName="inputNameShow" name="name_show" label="{{ __('Name') }}" type="text" divClass="col-lg-6 col-md-12" value="{{ old('name') }}" helpText="{{ __('User name.') }}" disabled="disabled" />--}}
                                <input id="inputName" name="name" type="hidden" />
                                <x-forms.input-text idName="inputEmailShow" name="email" label="{{ __('Email') }}" type="text" divClass="col-lg-6 col-md-12" value="{{ old('email') }}" helpText="{{ __('User email address.') }}" />
                                <x-forms.input-password idName="inputPassword" name="password" label="{{ __('Password') }}" divClass="col-lg-3 col-md-6" helpText="{!! __('Enter user\'s password.') !!}" />
                                <x-forms.input-password idName="inputPasswordConfirmation" name="password_confirmation" label="{{ __('Confirm password') }}" divClass="col-lg-3 col-md-6" helpText="{!! __('Confirm user\'s password.') !!}" />
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
                                @foreach( \App\Models\Role::all() as $role )
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="{{ $role->id }}" name="roles[]" id="inputAssignRole-{{ $role->id }}" @if( is_array( old('roles') )) @if( in_array( $role->id, old('roles') ) ) checked="checked" @endif @endif>
                                        <label class="form-check-label" for="inputAssignRole-{{ $role->id }}">{{ $role->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- ./card -->

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary px-5">{{ __('Create') }}</button>
                                <a href="{{ route('admin.users.index') }}" class="btn btn-danger px-5">{{ __('Cancel') }}</a>
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
    @include('partials.users-detail-script')
@endsection
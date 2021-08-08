@extends('layouts.auth')
@section('content')
<body>
    <!-- wrapper -->
    <div class="wrapper">
        <div class="authentication-reset-password d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-lg-5 border-end">
                                <div class="card-body">
                                    <form action="{{ route('password.update') }}" method="POST">
                                        @csrf
                                        <div class="p-5">
                                            <div class="text-start">
                                                <img src="assets/images/logo-img.png" width="180" alt="">
                                            </div>
                                            <h4 class="mt-5 font-weight-bold">{{ __('Genrate New Password') }}</h4>
                                            <p class="text-muted">{{ __('We received your reset password request. Please enter your new password!') }}</p>
                                            @include('partials.display-form-errors')
                                            @if (session('status'))
                                                <div class="mb-4 font-medium text-sm text-green-600">
                                                    {{ session('status') }}
                                                </div>
                                            @endif
                                            <x-forms.input-password idName="inputNewPassword" name="password" label="{{ __('Enter new password') }}" divClass="mb-3 mt-5" value="" placeholder="{{ __('Enter new password') }}" helpText="{{ __('Enter new password.') }}" />
                                            <x-forms.input-password idName="inputNewPasswordConfirmation" name="password_confirmation" label="{{ __('Confirm password') }}" divClass="mb-3" value="" placeholder="{{ __('Confirm password') }}" helpText="{{ __('Confirm password.') }}" />
                                            <div class="d-grid gap-2">
                                                <button type="submit" class="btn btn-primary">{{ __('Change Password') }}</button>
                                                <a href="{{ route('login') }}" class="btn btn-light"><i class='bx bx-arrow-back mr-1'></i>{{ __('Back to Login') }}</a>
                                            </div>
                                        </div>
                                        <input type="hidden" name="token" value="{{ request()->route('token') }}" />
                                        <input type="hidden" name="email" value="{{ request()->input('email') }}" />
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <img src="{{ asset('assets/images/login-images/forgot-password-frent-img.jpg') }}" class="card-img login-img h-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end wrapper -->
@endsection

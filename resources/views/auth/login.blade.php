@extends('layouts.auth')
@section('content')
<body class="bg-login">
    <!--wrapper-->
    <div class="wrapper">
        <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col mx-auto">
                        <div class="mb-4 text-center">
                            <img src="{{ asset('assets/images/logo-img.png') }}" width="180" alt="" />
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-4 rounded">
                                    <div class="text-center">
                                        <h3 class="">{{ __('Sign in') }}</h3>
                                        <p>{{ __('Don\'t have an account yet? ') }}<a href="{{ route('register') }}">{{ __('Sign up here') }}</a>
                                        </p>
                                    </div>
                                    @include('partials.display-form-errors')
                                    <div class="d-grid">
                                        <a class="btn my-4 shadow-sm btn-white" href="javascript:;">
                                            <span class="d-flex justify-content-center align-items-center">
                                                <img class="me-2" src="{{ asset('assets/images/icons/search.svg') }}" width="16" alt="Image Description">
                                                <span>{{ __('Sign in with Google') }}</span>
                                            </span>
                                        </a>
                                        <a href="javascript:;" class="btn btn-facebook"><i class="bx bxl-facebook"></i>{{ __('Sign in with Facebook') }}</a>
                                    </div>
                                    <div class="login-separater text-center mb-4"> <span>{{ __('OR SIGN IN WITH EMAIL') }}</span>
                                        <hr/>
                                    </div>
                                    <div class="form-body">
                                        <form action="{{ route('login') }}" method="POST" class="row g-3">
                                            @csrf
                                            <x-forms.input-text idName="inputEmailAddress" name="email" label="{{ __('Email Address') }}" type="email" divClass="col-12" value="{{ old('email') }}" placeholder="{{ __('Email Address') }}" helpText="{{ __('Enter your best email address.') }}" />
                                            <x-forms.input-password idName="inputChoosePassword" name="password" label="{{ __('Enter Password') }}" divClass="col-12" value="" placeholder="{{ __('Enter password') }}" helpText="{{ __('Enter your password.') }}" />
                                            <div class="col-md-6">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">{{ __('Remember Me') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 text-end">	<a href="{{ route('password.request') }}">{{ __('Forgot Password ?') }}</a>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>{{ __('Sign in') }}</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
    <!--end wrapper-->
@endsection
@section('scripts')
    <!--Password show & hide js -->
    <script>
        $(document).ready(function () {
            $("#show_hide_password a").on('click', function (event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });
        });
    </script>

@endsection

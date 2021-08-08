@extends('layouts.auth')
@section('content')
<body class="bg-login">
    <!--wrapper-->
    <div class="wrapper">
        <div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
                    <div class="col mx-auto">
                        <div class="my-4 text-center">
                            <img src="assets/images/logo-img.png" width="180" alt="" />
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-4 rounded">
                                    <div class="text-center">
                                        <h3 class="">{{ __('Sign Up') }}</h3>
                                        <p>{{ __('Already have an account? ') }}<a href="{{ route('login') }}">{{ __('Sign in here') }}</a>
                                        </p>
                                    </div>
                                    @include('partials.display-form-errors')
                                    <div class="d-grid">
                                        <a class="btn my-4 shadow-sm btn-white" href="javascript:;">
                                            <span class="d-flex justify-content-center align-items-center">
                                                <img class="me-2" src="assets/images/icons/search.svg" width="16" alt="Image Description">
                                                <span>{{ __('Sign Up with Google') }}</span>
                                            </span>
                                        </a>
                                        <a href="javascript:;" class="btn btn-facebook"><i class="bx bxl-facebook"></i>{{ __('Sign Up with Facebook') }}</a>
                                    </div>
                                    <div class="login-separater text-center mb-4"> <span>{{ __('OR SIGN UP WITH EMAIL') }}</span>
                                        <hr/>
                                    </div>
                                    <div class="form-body">
                                        <form action="{{ route('register') }}" method="POST" class="row g-3">
                                            @csrf
                                            <x-forms.input-text idName="inputFirstName" name="first_name" label="{{ __('First Name') }}" type="text" divClass="col-sm-6" value="{{ old('first_name') }}" placeholder="{{ __('John') }}" helpText="{{ __('Inform your first name.') }}" />
                                            <x-forms.input-text idName="inputLastName" name="last_name" label="{{ __('Last Name') }}" type="text" divClass="col-sm-6" value="{{ old('last_name') }}" placeholder="{{ __('Smith') }}" helpText="{{ __('Inform your last name.') }}" />
                                            <input id="inputName" name="name" type="hidden" />
                                            <x-forms.input-text idName="inputEmailAddress" name="email" label="{{ __('Email Address') }}" type="email" divClass="col-12" value="{{ old('email') }}" placeholder="{{ __('Email Address') }}" helpText="{{ __('Inform your best email address.') }}" />
                                            <x-forms.input-password idName="inputChoosePassword" name="password" label="{{ __('Enter Password') }}" divClass="col-sm-6" value="" placeholder="{{ __('Enter password') }}" helpText="{{ __('Enter your password.') }}" />
                                            <x-forms.input-password idName="inputChoosePasswordConfirmation" name="password_confirmation" label="{{ __('Confirm your Password') }}" divClass="col-sm-6" value="" placeholder="{{ __('Confirm password') }}" helpText="{{ __('Confirm your password.') }}" />
                                            <div class="col-12">
                                                <label for="inputSelectCountry" class="form-label">{{ __('Country') }}</label>
                                                <select class="form-select" id="inputSelectCountry" name="country" aria-label="Default select example">
                                                    <option @if( old('country') == 'PT' || old('country') == '' ) selected @endif value="PT">{{ __('Portugal') }}</option>
                                                    <option @if( old('country') == 'BR' ) selected @endif value="BR">{{ __('Brasil') }}</option>
                                                    <option @if( old('country') == 'OT' ) selected @endif value="OT">{{ __('Other') }}</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="agreeWithTermsAndConditions" value="1" @if( old('agreeWithTermsAndConditions') == '1' ) checked @endif>
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">{{ __('I read and agree to Terms & Conditions') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary"><i class='bx bx-user'></i>{{ __('Sign up') }}</button>
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
    @include('partials.users-detail-script')
@endsection

@extends('layouts.auth')
@section('content')
<body class="bg-forgot">
    <!-- wrapper -->
    <div class="wrapper">
        <div class="authentication-forgot d-flex align-items-center justify-content-center">
            <div class="card forgot-box">
                <div class="card-body">
                    <div class="p-4 rounded  border">
                        <form action="{{ route('password.email') }}" method="POST">
                            @csrf
                            <div class="text-center">
                                <img src="{{ asset('assets/images/icons/forgot-2.png') }}" width="120" alt="" />
                            </div>
                            <h4 class="mt-5 font-weight-bold">{{ __('Forgot Password?') }}</h4>
                            <p class="text-muted">{{ __('Enter your registered email ID to reset the password') }}</p>
                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif
                            @include('partials.display-form-errors')
                            <x-forms.input-text idName="inputEmailAddress" name="email" label="{{ __('Email Address') }}" type="email" divClass="my-4" class=" form-control-lg" value="{{ old('email') }}" placeholder="{{ __('Email Address') }}" helpText="{{ __('Enter your registered email address.') }}" />
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-lg">{{ __('Send') }}</button>
                                <a href="{{ route('login') }}" class="btn btn-light btn-lg"><i class='bx bx-arrow-back me-1'></i>{{ __('Back to Login') }}</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end wrapper -->
@endsection

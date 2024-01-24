@extends('layouts.auth')

@section('title', 'Login Online Shop')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-social/bootstrap-social.css') }}">
@endpush

@section('main')
    <div class="card card-primary">
        <div class="card-header">
            <h1 class="display-6 text-info text-center">Login</h1>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate>
                @csrf
                <div class="form-group">
                    <label for="validation1" class="form-label">Username</label>
                    <input type="text" id="validation1" class="form-control" required @error('name') @enderror
                        name="name" tabindex="1" autofocus>
                    <div class="invalid-feedback">
                        Silahkan Input Username
                    </div>
                    {{-- @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror --}}
                </div>
                <div class="form-group">
                    <div class="d-block">
                        <label for="validation2" class="form-label">Password</label>
                    </div>
                    <input type="password" id="validation2" class="form-control" required @error('password') @enderror
                        name="password" tabindex="2">
                    <div class="invalid-feedback">
                        Password Tidak Boleh Kosong
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info btn-lg btn-block" tabindex="4">
                            Login
                        </button>
                    </div>
            </form>
        </div>
    </div>
    <div class="text-muted mt-5 text-center">
        Don't have an account? <a href="{{ route('register') }}">Create One</a>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/custom/validation.js') }}"></script>
    <!-- Page Specific JS File -->
@endpush

@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <div class="row justify-content-center">
        <div class="col-md-7">
            {{-- message --}}
            @if (session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
            @endif
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }} <b
                                    style="color:red">*</b></label>

                            <div class="col-md-8">
                                <input id="lastname" type="text"
                                    class="form-control @error('lastname') is-invalid @enderror" name="lastname"
                                    value="{{ old('lastname') }}" required autocomplete="lastname" autofocus
                                    placeholder="Last Name">

                                @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}
                                <b style="color:red">*</b></label>

                            <div class="col-md-8">
                                <input id="firstname" type="text"
                                    class="form-control @error('firstname') is-invalid @enderror" name="firstname"
                                    value="{{ old('firstname') }}" required autocomplete="firstname"
                                    placeholder="First Name">

                                @error('firstname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="othername"
                                class="col-md-4 col-form-label text-md-right">{{ __('Other Names') }}</label>

                            <div class="col-md-8">
                                <input id="othername" type="text" class="form-control" name="othername"
                                    value="{{ old('othername') }}" autocomplete="othername" placeholder="Other Name(s)">


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="identitynumber"
                                class="col-md-4 col-form-label text-md-right">{{ __('Reg. Number') }} <b
                                    style="color:red">*</b></label>

                            <div class="col-md-8">
                                <input id="identitynumber" type="text"
                                    class="form-control @error('identitynumber') is-invalid @enderror"
                                    name="identitynumber" value="{{ old('identitynumber') }}" required
                                    autocomplete="identitynumber" placeholder="Reg. Number e.g 2017-HND-24516-CS"
                                    maxlength="17">

                                @error('identitynumber')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }} <b
                                    style="color:red">*</b></label>

                            <div class="col-md-8">
                                <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror"
                                    name="phone" value="{{ old('phone') }}" required placeholder="Phone Number"
                                    maxlength="11">

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }} <b
                                    style="color:red">*</b></label>

                            <div class="col-md-8">
                                <select name="gender" class="form-control @error('gender') is-invalid @enderror">
                                    <option selected="disabled">Select Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>

                                @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="department_id"
                                class="col-md-4 col-form-label text-md-right">{{ __('Department') }} <b
                                    style="color:red">*</b></label>

                            <div class="col-md-8">
                                <select class="form-control @error('department_id') is-invalid @enderror"
                                    name="department_id" value="{{ old('department_id') }}" id="department_id">

                                    <option selected="disabled">Select Department</option>
                                    <option>Accountancy</option>
                                    <option>Business Administration</option>
                                    <option>Computer Science</option>
                                </select>


                                @error('department_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}
                                <b style="color:red">*</b></label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="Email Address">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }} <b
                                    style="color:red">*</b></label>

                            <div class="col-md-8">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }} <b
                                    style="color:red">*</b></label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="Repeat Password">
                            </div>
                        </div>

                        <div>
                            <input type="hidden" name="role_id" value="4">
                        </div>
                        <div>
                            <input type="hidden" name="isactive" value="1">
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <p style="text-align: right">Already registered? <a href="{{route('login')}}">Login</a></p>

                </div>
            </div>
        </div>
    </div>
    <br><br>
</div>
@endsection
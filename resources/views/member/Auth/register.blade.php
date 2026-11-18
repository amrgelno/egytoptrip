@extends('member.layouts.app')

@section('content')
    @if ($massage = Session::get('success'))
        <span class="invalid-feedback" role="alert">


            <strong>{{ $massage }}</strong>


        </span>
    @endif


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Member Register') }}</div>



                    <div class="card-body">

                        @foreach ($Maxcompanyid as $Maxid)
                            <img src="http://{{ $Domain_site }}/Front/IMG/{{ $Maxid->path_pic }}"
                                class="logo img-fluid m-5 m-lg-auto mb-lg-4  page-link" alt="{{ $Maxid->Comp_Name }}"
                                width='150px' height="150px">
                        @endforeach


                        <form method="POST" action="{{ route('member.register.post') }}">

                            @csrf

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('User Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Mobile</label>

                                <div class="col-md-6">
                                    <input class="form-control" name="Mobile" required>


                                </div>
                            </div>



                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Retype Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <br />


                            {{-- <div class="row mb-3">
                                <label for="Referral Code" class="col-md-4 col-form-label text-md-end">Referral Code
                                </label> --}}

                            {{-- <div class="col-md-6">
                                <input type="text" class="form-control" name="ReferralCode" required=""
                                    autofocus="" /><br /><br />
                            </div>
                    </div> --}}

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            I agree to Global Chain <a href=" "> privacy policy & Terms</a>
                                        </label>
                                    </div>
                                </div>
                            </div>




                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

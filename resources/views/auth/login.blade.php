@extends('uikit.ui')
@section('content')
<div class="login-form">
   
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="logo">
            <img src="/images/toast.svg" />
        </div>


        <div class="field">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror    
        </div>

        <div class="field">
            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>


        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>

        <div class="field">
            <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
            </button>
        </div>



    </form>
</div>
@endsection

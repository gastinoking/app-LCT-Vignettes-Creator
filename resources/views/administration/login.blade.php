@extends('layouts.administration-auth')

@section('content')

    <div class="p-3">
        <h4 class="text-muted font-size-18 mb-1 text-center">Content de te revoir !
        </h4>
        <p class="text-muted text-center">Connectez-vous pour continuer vers</p>

        <form class="form-horizontal mt-4" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="">{{ __('Email Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3 row mt-4">
                <div class="col-6">
                    <div class="form-check">

                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
                <div class="col-6 text-end">
                    <button class="btn btn-primary w-md waves-effect waves-light"
                            type="submit">Connexion</button>
                </div>
            </div>
            <div class="form-group mb-0 row">
                <div class="col-12 mt-4">
                    <a href="#" class="text-muted"><i
                    class="mdi mdi-lock"></i> Forgot your password?</a>
                </div>
            </div>
        </form>
    </div>




@endsection



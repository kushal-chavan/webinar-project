@extends('pages.include.app')

@section('content')


    
<div class="container" style="margin-top:100px;margin-bottom:200px;">

    <div class="box_grid wow"
    style="
    padding-bottom:50px;
    padding-top:50px;
    padding-left: 50px;
    padding-right: 50px;">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="row">
                <div class="col-md-6 offset-md-3">
                        @error('email')
                        <div class="alert alert-danger" role="alert">
                            <strong>{{ $message }}</strong>
                         </div>
                        @enderror
                        @error('password')
                        <div class="alert alert-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                    <span class="input">
                        <input class="input_field @error('email') is-invalid @enderror" id="email" type="email" name="email" required autocomplete="email" autofocus>
                        <label for="email" class="input_label">
                            <span class="input__label-content">{{ __('E-Mail Address') }}</span>
                        </label>
                    </span>
                    
                </div>
        </div>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <span class="input">
                        <input class="input_field @error('password') is-invalid @enderror" type="password" id="password" name="password" required autocomplete="current-password">
                        <label for="password" class="input_label">
                            <span class="input__label-content">{{ __('Password') }}</span>
                        </label>
                    </span>
                    <button type="submit" class="btn_1 rounded">
                            {{ __('Login') }}
                        </button>
        
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                </div>
                    
            </div>
    </form>
</div>   
</div>
@endsection

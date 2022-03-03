@extends('admin.layout')

@section('content')
    <div class="container" style="padding-top: 30px">
        <div class="">
            <div class="row offset-3 col-6">
                <div class="card col-offset">
                    <div class="card-body">
                        <div class="card-header align-content-center">
                            <h3>{{ __('Login') }}</h3>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="col-12 mb-2">
                                <label for="email" class="my-1 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="col-12 mb-3">
                                <label for="password" class="mb-1 col-form-label text-md-end">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong>  </span>
                                @enderror
                            </div>
                            <div class="justify-content-center">
                                <div class="form-check">
                                    <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                </div>
                                <div>
                                  @if (Route::has('password.request'))
                                      <a class="btn btn-link" href="{{ route('password.request') }}"> {{ __('Forgot Your Password?') }} </a>
                                  @endif
                                </div>
                            </div>

                           <div class="float-end"> <button type="submit" class="btn btn-primary">{{ __('Login') }}</button></div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

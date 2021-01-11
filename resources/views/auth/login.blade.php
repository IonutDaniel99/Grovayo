<x-guest-layout>
    <main class="register-mp">
        <div class="main-section">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-10">
                        <div class="login-register-bg">
                            <div class="row no-gutters">
                                <div class="col-lg-6">
                                    <div class="lg-left">
                                        <div class="lg-logo">
                                            <a href="index.html"><img src="images/login-register/logo.svg" alt=""></a>
                                        </div>
                                        <div class="lr-text">
                                            <h2>Login Now</h2>
                                            <p>Connect with friends and the world around you on {{ config('app.name')}}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="lr-right">
                                        <h4>Log In</h4>
                                        <div class="social-logins">
                                            <button class="social-f-btn"><i class="fab fa-facebook-f"></i>&nbsp;Continue with facebook</button>
                                            <button class="social-g-btn"><i class="fab fa-google"></i>&nbsp;Continue with Google</button>
                                        </div>
                                        <div class="or">Or</div>
                                        <div class="login-register-form">

                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <input class="title-discussion-input" id="username" type="text" name="username" :value="old('email')" required autofocus />
                                                </div>
                                                <div class="form-group">
                                                    <input class="title-discussion-input" id="password" type="password" name="password" autocomplete="current-password" required />
                                                </div>
                                                <button class="login-btn" type="submit">{{ __('Login Now') }}</button>
                                            </form>
                                            @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="forgot-link"> {{ ('Forgot your password?') }}</a>
                                            @endif
                                            @if (Route::has('register'))
                                            <div class="regstr-link">Don’t have an account? <a href="{{ route('register') }}">Register Now</a></div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @foreach ($errors->all() as $error)
    <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 100px;">
        <div class="toast" style="position: absolute; top: 0; right: 0; opacity: 1 !important; margin: 35px;">
            <div class="toast-header">
                <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                    <rect width="100%" height="100%" fill="#F32013"></rect>
                </svg>
                <strong class="mr-auto">Creditential Error</strong>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                {{ $error }}
            </div>
        </div>
    </div>
    @endforeach
</x-guest-layout>
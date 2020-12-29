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
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla interdum blandit felis a hendrerit.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="lr-right">
                                        <div class="social-logins">
                                            <button class="social-f-btn"><i class="fab fa-facebook-f"></i>Continue with facebook</button>
                                            <button class="social-g-btn"><i class="fab fa-google"></i>Continue with Google</button>
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
</x-guest-layout>
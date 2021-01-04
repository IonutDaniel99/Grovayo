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
                                            <h2>Password Recover</h2>
                                            <p>Just enter your new password and voila. Your password has been changed with a new one.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="lr-right">
                                        <div class="login-register-form" style="position: relative;Top: 50%;transform: translateY(-50%);">
                                            <h4>Password Recover</h4>
                                            <form method="POST" action="{{ route('password.update') }}">
                                                @csrf
                                                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                                <div class="form-group">
                                                    <input class="title-discussion-input" placeholder="Email" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
                                                </div>

                                                <div class="form-group">
                                                    <input class="title-discussion-input" placeholder="New Password" id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                                                </div>

                                                <div class="form-group">
                                                    <input class="title-discussion-input" placeholder="Confirm Password" id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                                                </div>
                                                <button class="login-btn" type="submit">{{ __('Reset Password') }}</button>

                                            </form>
                                            <div class="login-link">If you have an account? <a href="{{ route('login') }}">Login Now</a></div>
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
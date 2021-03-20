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
                                            <a href="{{ route('Welcome') }}" style="display: flex;align-items: center;">
                                                <img src="{{ asset('storage/www/logo.svg') }}" width="38" height="48" alt="{{ asset('storage/www/logo.svg') }}">
                                                <span style="margin-left: 20px;font-size: 1.2rem;color: white;">Home</span>
                                            </a>
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
                                            <h1>Password Recover</h1>
                                            <form method="POST" action="{{ route('password.update') }}">
                                                @csrf
                                                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                                <div class="form-group">
                                                    <label for="email"></label>
                                                    <input class="title-discussion-input" placeholder="Email" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
                                                </div>

                                                <div class="form-group">
                                                    <label for="password"></label>
                                                    <input class="title-discussion-input" placeholder="New Password" id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                                                </div>

                                                <div class="form-group">
                                                    <label for="password_confirmation"></label>
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
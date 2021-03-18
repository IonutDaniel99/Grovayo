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
                                        <div class="lr-text">
                                            <h2>Login Now</h2>
                                            <p>Did you just forgot your password? Don't worry! Just type your Email and we will send you a reset password link as soon as possible.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="lr-right">
                                        <div class="login-register-form" style="position: relative;Top: 50%;transform: translateY(-50%);">
                                            <h4>Password Recover</h4>
                                            <form method="POST" action="{{ route('password.email') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <input class="title-discussion-input" id="email" class="block mt-1 w-full" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus />
                                                </div>
                                                <button class="login-btn" type="submit"> {{ ('Email Password Reset Link') }}</button>
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
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
                                            <a href="index.html"><img src="www/login/logo.svg" alt=""></a>
                                        </div>
                                        <div class="lr-text">
                                            <h2>Register Now</h2>
                                            <p>Connect with friends and the world around you on {{ config('app.name')}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="lr-right">
                                        <h4>Sign Up to Goeveni</h4>
                                        <div class="login-register-form">
                                            <form method="POST" action="{{ route('register') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <input class="title-discussion-input" type="text" name="name" placeholder="Full Name" required>
                                                </div>
                                                <div class="form-group">
                                                    <input class="title-discussion-input" type="email" name="email" placeholder="Email Address" required>
                                                </div>
                                                <div class="form-group">
                                                    <input class="title-discussion-input" type="text" name="username" placeholder="Username" required>
                                                </div>
                                                <div class="form-group">
                                                    <input class="title-discussion-input" type="password" name="password" placeholder="Password" required>
                                                </div>
                                                <div class="form-group">
                                                    <input class="title-discussion-input" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="ConfirmPassword" />
                                                </div>
                                                <div class="categories-left-heading" x-data="{tooltip:false}">
                                                    <div @mouseenter="tooltip = true" @mouseleave="tooltip = false">
                                                        <button class="login-btn" type="submit">Register Now</button>
                                                    </div>
                                                    <div class="relative" x-cloak x-show.transition.origin.top="tooltip" @mouseenter="tooltip = true" @mouseleave="tooltip = false">
                                                        <div class="absolute z-10 w-auto p-2 mt-1 text-sm leading-tight text-white transform -translate-x-0 -translate-y-40 bg-orange-500 rounded-lg shadow-lg">
                                                            By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy. You may receive Email notifications from us and can opt out at any time </div>
                                                    </div>
                                                </div>
                                                <div class="login-link">If you have an account? <a href="{{ route('login') }}">Login Now</a></div>
                                            </form>
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
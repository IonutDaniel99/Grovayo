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
                                            <h2>Account Verification</h2>
                                            <p> {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="lr-right">
                                        <div class="login-register-form" style="position: relative;Top: 50%;transform: translateY(-50%);">
                                            <h4>Account Verification</h4>
                                            <div class="or"> {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                                            </div>
                                            <form method=" POST" action="{{ route('verification.send') }}">
                                                @csrf
                                                <button class="login-btn" type="submit"> {{ __('Resend Verification Email') }}</button>
                                            </form>

                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button class="login-btn" type="submit"> {{ __('Logout') }}</button>
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
    @if (session('status') == 'verification-link-sent')
    <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 100px;">
        <div class="toast" style="position: absolute; top: 0; right: 0; opacity: 1 !important; margin: 35px;">
            <div class="toast-header">
                <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                    <rect width="100%" height="100%" fill="#4BB543"></rect>
                </svg>
                <strong class="mr-auto">Email Success</strong>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        </div>
    </div>
    @endif
</x-guest-layout>
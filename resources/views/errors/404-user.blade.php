<x-app-layout>
    <div class="title-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ol class="title-bar-text">
                        <li class="breadcrumb-item"><a href="{{route('Home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Error 404</li>
                        @if(!empty($message))
                        <li class="breadcrumb-item" aria-current="page">{{ $message}}</li>
                        @else
                        <li class="breadcrumb-item" aria-current="page">User not found!</li>
                        @endif
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="discussion-mp">
        <div class="main-section">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="errror-404">
                            <img src="{{ asset('storage/www/404/error.png') }}" alt="{{ asset('storage/www/404/error.png') }}" style="margin:0 auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="fixed-bottom">
        <div class="container">
            <div class="row" style="align-items: center;">
                <div class="col-9 col-lg-9 col-md-9">
                    <div class="footer-left">
                        <ul>
                            <li><a href="privacy_policy.html">Privacy</a></li>
                            <li><a href="term_conditions.html">Term and Conditions</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact_us.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-3 col-lg-3 col-md-3" style="display:flex; justify-content: flex-end;">
                    <div class="footer-right">
                        <ul class="copyright-text">
                            <li><a href="index.html"><img class="h-12 w-atuo block" src="{{ asset('storage/www/logo.svg') }}" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</x-app-layout>
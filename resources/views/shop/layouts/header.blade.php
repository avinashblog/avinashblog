<!-- Top scroll End -->
<header class="transition">
    <div class="container">
        <div class="row flex-align">
            <div class="col-lg-4 col-md-3 col-8">
                <div class="logo">
                    <a href="{{ asset('/') }}">
                        <img src="{{ asset('shop/assets/img/logo.png') }}" class="transition" alt="Cryptcon">
                    </a>
                </div>
            </div>
            <div class="col-lg-8 col-md-9 col-4 text-right">
                <div class="menu-toggle">
                    <span></span>
                </div>
                <div class="menu">
                    <ul class="d-inline-block">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#work">How It Work?</a></li>
                        <li><a href="#Community">Community</a></li>
                        <li><a href="#faq">FAQ</a></li>
                    </ul>
                    <div class="signin d-inline-block">
                        @if (Route::has('login'))
                        @auth
                        <a href="{{ url('/home') }}" class="btn">Home</a>
                        @else
                        <a href="{{ route('login') }}" class="btn">Sign in</a>
                        @endauth
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
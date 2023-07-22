<!-- ========== Header Nav Start ========== -->
<header id="home">
    <nav class="navbar navbar-inverse navbar-expand-lg header-nav fixed-top light-header">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <p class="my-auto">F-Travel</p>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCodeply">
                <i class="icofont-navigation-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCodeply">
                <ul class="nav navbar-nav ml-auto">
                    <li><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                    </li>
                    <li><a class="nav-link {{ Request::is('trip') ? 'active' : '' }}"
                            href="{{ url('trip') }}">Trip</a></li>
                    @if (auth()->check())
                        @if (auth()->user()->travelCompany)
                            <li><a class="nav-link" href="{{ url('my-company') }}">Travel Saya</a></li>
                        @else
                            <li><a class="nav-link" href="{{ url('register-company') }}">Daftarkan Perusahaan</a></li>
                        @endif
                        <li><a class="nav-link {{ Request::is('booking') ? 'active' : '' }}"
                                href="{{ url('booking') }}">Bookingan Saya</a></li>
                        <li>
                            <form id="logout-form" action="{{ url('logout') }}" method="post">
                                @csrf
                            </form>
                            <a class="nav-link" href="#"
                                onclick="document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                    @else
                        <li><a class="nav-link" href="{{ url('login') }}">Login</a></li>
                    @endif
                </ul>
                <!-- End navigation -->
            </div>
        </div>
    </nav>
</header>
<!-- ========== Header Nav End ========== -->

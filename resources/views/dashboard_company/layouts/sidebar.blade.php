    {{--  batas  --}}
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="{{ url('/my-company') }}" class="nav_logo">
                    <i class='bx bxs-store-alt text-white'></i>
                    <span class="nav_logo-name">F-Travel</span>
                </a>
                <div class="nav_list">
                    <a href="{{ url('my-company/trip') }}"
                        class="nav_link {{ Request::is('my-company/trip') ? 'active' : '' }}">
                        <i class="bx bx-bus nav_icon"></i>
                        <span class="nav_name">Perjalanan</span>
                    </a>
                    <a href="{{ url('my-company/profile') }}"
                        class="nav_link {{ Request::is('my-company/profile') ? 'active' : '' }}">
                        <i class="bx bx-edit nav_icon"></i>
                        <span class="nav_name">Update Company</span>
                    </a>
                    <a href="{{ url('my-company/list-booking') }}"
                        class="nav_link {{ Request::is('my-company/list-booking') ? 'active' : '' }}">
                        <i class="bx bx-book-bookmark nav_icon"></i>
                        <span class="nav_name">List Booking</span>
                    </a>
                    <a href="{{ url('/') }}" class="nav_link {{ Request::is('/') ? 'active' : '' }}">
                        <i class="bx bxs-slideshow nav_icon"></i>
                        <span class="nav_name">User Side</span>
                    </a>
                </div>
            </div>
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="nav_link bg-transparent border-0">
                    <i class="bx bx-log-out nav_icon"></i>
                    <span class="nav_name">Logout</span>
                </button>
            </form>
        </nav>
    </div>
    {{--  batas  --}}

<!-- ========== Header Nav Start ========== -->
<header id="home">
    <nav class="navbar navbar-inverse navbar-expand-lg header-nav fixed-top light-header">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="{{ url('Landing_Page/img/logo.png') }}" alt=""> <!-- Add your logo here -->
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCodeply">
                <i class="icofont-navigation-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCodeply">
                <ul class="nav navbar-nav ml-auto">
                    <li><a class="nav-link" href="#home">Home</a> </li>
                    <li><a class="nav-link" href="#services">About</a></li>
                    <li><a class="nav-link" href="#feature">Feature</a></li>
                    <li><a class="nav-link" href="#testimonials">Testimonial</a></li>
                    <li><a class="nav-link" href="#screenshots">Screenshot</a></li>
                    <li><a class="nav-link" href="#pricing">Price</a></li>
                    <li>
                        <a class="nav-link" href="#blog">Blog</a>
                        <span class="sub-menu-toggle" role="navigation" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="icofont-rounded-down"></i>
                        </span>
                        <ul class="sub-menu">
                            <li><a href="{{ url('blog-full') }}">Blog Full</a></li>
                            <li><a href="{{ url('blog-2-col') }}">Blog 2 col</a></li>
                            <li><a href="{{ url('blog-3-col') }}">Blog 3 col</a></li>
                            <li><a href="{{ url('blog-full-left-sidebar') }}">Blog left sidebar</a></li>
                            <li><a href="{{ url('blog-full-right-sidebar') }}">Blog right sidebar</a></li>
                            <li><a href="{{ url('single-blog') }}">Single blog</a></li>
                            <li><a href="{{ url('single-left-sidebar') }}">Single left sidebar</a></li>
                            <li><a href="{{ url('single-right-sidebar') }}">Single right sidebar</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
                <!-- End navigation -->
            </div>
        </div>
    </nav>
</header>
<!-- ========== Header Nav End ========== -->

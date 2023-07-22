<!DOCTYPE html>
<html lang="en">

<head>
    @include('landing_page.layouts.head')
</head>

<body data-spy="scroll" data-target="#navbarCodeply" data-offset="70">
    {{-- @include('landing_page.layouts.preload') --}}

    @include('landing_page.layouts.navbar')

    @yield('content')

    @include('landing_page.layouts.footer')

    @include('landing_page.layouts.scripts')
    @include('sweetalert::alert')
</body>

</html>

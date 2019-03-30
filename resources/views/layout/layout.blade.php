<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" type="" href="{{asset('fontawesome-free-5.3.1-web/css/all.css')}}">
    @yield('links')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/lightbox-plus-jquery.min.js')}}"></script>

    <title>@yield('title')</title>

</head>
<body>
    <header>
        @yield('header')
    </header>

    <section class="content_section">
        <div class="container">
            @yield('content')
        </div>
    </section>
    
    <footer>
        @yield('footer')
    </footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
    @yield('script')

</body>
</html>
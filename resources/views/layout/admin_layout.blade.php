<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" type="" href="{{asset('fontawesome-free-5.3.1-web/css/all.css')}}">
    @yield('links')
    <script src="{{asset('js/jquery.min.js')}}"></script>

    <title>@yield('title')</title>

</head>
<body>
    <div class="side-menu">
        <img src="{{asset('img/HyperDevVect.jpg')}}" />
        <ul>
            <li class="side-item">
                <div class="side-icon"><i class="fas fa-tachometer-alt" style="margin-left: 6px;"></i></div>
                <a href="">Dashboard</a>
            </li>
            <li class="side-item">
                <div class="side-icon"><i class="far fa-edit"></i></div>
                <a data-toggle="collapse" href="#post">Blog</a>
                <div id="post" class="collapse sub-item">
                    <a href="">All Post</a>
                    <a href="">Edit Post</a>
                    <a href="">Delete Post</a>
                </div>
            </li>
            <li class="side-item">
                <div class="side-icon"><i class="far fa-user"></i></div><a data-toggle="collapse" href="#users">Users</a>
                <div id="users" class="collapse sub-item">
                    <a href="">All Users</a>
                    <a href="">Add Users</a>
                    <a href="">Delete Users</a>
                </div>
            </li>
            <li class="side-item">
                <div class="side-icon"><i class="far fa-envelope" style="margin-left: 7px; margin-top: 7px;"></i></div>
                <a href="">MailBox</a>
            </li>
            <li class="side-item">
                <div class="side-icon"><i class="far fa-file-alt" style="margin-left: 9px; margin-top: 6px;"></i></div>
                <a data-toggle="collapse" href="#pages">Pages</a>
                <div id="pages" class="collapse sub-item">
                    <a href="">Landing Page</a>
                    <a href="">Users Page</a>
                </div>
            </li>
        </ul>
        <div class="side-overlay"></div>
    </div>
         
    <header>
        <nav>
            <h2>Dashboard</h2>
            <ul>
                <li class="item"><a href=""><i class="fas fa-bell"></i></a></li>
                <li class="item"><a href=""><i class="fas fa-comment"></i></a></li>
                <li class="item"><a href=""><i class="fas fa-calendar-alt"></i></a></li>
            </ul>
        </nav>
    </header>

    <section class="main container-fluid" style="padding-left: 280px; padding-top: 55px;" >
        @yield('content')
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
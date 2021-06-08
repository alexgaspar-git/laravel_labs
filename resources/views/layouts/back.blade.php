<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Simple Sidebar - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href={{asset('css/back.css')}}>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}"/>
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="tempcolor border-right" id="sidebar-wrapper">
            <div class="sidebar-heading text-light">Bart Stootstrap</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action linkcolor" href="{{route('dashboard')}}"><i class="fas fa-home"></i>  Home</a>
                <a class="list-group-item list-group-item-action linkcolor" href="{{route('image.index')}}"><i class="fas fa-home"></i>  Carousel</a>
                <a class="list-group-item list-group-item-action linkcolor" href="{{route('title.edit', $title->id)}}"><i class="fas fa-home"></i>  Title</a>
                <a class="list-group-item list-group-item-action linkcolor" href="{{route('video.edit', $video->id)}}"><i class="fas fa-home"></i>  Video</a>
                <a class="list-group-item list-group-item-action linkcolor" href="{{route('discover.edit', $discover->id)}}"><i class="fas fa-home"></i>  Discover</a>
                <a class="list-group-item list-group-item-action linkcolor" href="{{route('service.index')}}"><i class="fas fa-concierge-bell"></i>  Services</a>
                <a class="list-group-item list-group-item-action linkcolor" href="{{route('feature.index')}}"><i class="fas fa-concierge-bell"></i>  Feature</a>
                <a class="list-group-item list-group-item-action linkcolor" href="#!"><i class="fab fa-blogger-b"></i>  Blog</a>
                <a class="list-group-item list-group-item-action linkcolor" href="#!"><i class="fas fa-address-book"></i>  Contact</a>
                <a class="list-group-item list-group-item-action linkcolor" href="{{route('home')}}"><i class="fas fa-angle-double-left"></i>  Back</a>
            </div>
        </div>
        <!-- Page Content-->
        <div id="page-content-wrapper">
            <nav class="navbar tempcolor navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="dashbtn" id="menu-toggle"><i class="material-icons">chevron_left</i></button>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#!">
                                Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#!" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#!">Action</a>
                                <a class="dropdown-item" href="#!">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#!">Something else here</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://kit.fontawesome.com/92e0a4649f.js" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/main.min.css" rel="stylesheet">

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    {{-- <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        
      </head>
      
      <body>
        <!-- Header Section -->
        <header class="main-header lg">
          <div class="row align-items-center ms-5">
            <!-- Aging Logo Section-->
            <div class="col-2">
                <img src="{{ asset('images/aging_logo.png') }}" alt="aging Logo" class="logo">
            </div>
            <!-- Title and Subtitle Section -->
            <div class="col-9 text-start flex-d me-5">
                <h1 class="text-uppercase"><strong>Chitwan Valley Family Study on Cognition and Aging in Nepal</strong>
                </h1>

            </div>

    </header>
    <!-- Navigation Bar -->

    <nav class="navbar navbar-expand-lg mb-3">
        <div class="container ">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/"><i
                                class="fa-solid fa-house-chimney  me-2 "></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('study') ? 'active' : '' }}" href="/study">Study</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('data') ? 'active' : '' }}" href="/data">Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('publications') ? 'active' : '' }}" href="/publications">Publication</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ Request::is('people') ? 'active' : '' }}" href="/people" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            People
                        </a>
                        <ul class="dropdown-menu" style="background-color:rgba(164, 164, 167, 0.9);">
                            <li><a class="dropdown-item {{ Request::is('people') ? 'active' : '' }}" href="/people/investigators">Investigators</a></li>
                            <li><a class="dropdown-item {{ Request::is('people') ? 'active' : '' }}" href="/people/researcher">Researcher</a></li>
                            <li><a class="dropdown-item {{ Request::is('people') ? 'active' : '' }}" href="/people/staff">Staff</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('events') ? 'active' : '' }}" href="/events">News & Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('gallery') ? 'active' : '' }}" href="/gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link {{ Request::is('About') ? 'active' : '' }}" href="/About">About</a>
                    </li>
                    

                  </ul>
                <form class="d-flex " role="search">
                    <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
                </div>
        </div>
    </nav>

    
    <!-- Main Content Section -->
    <main>
        <div class="main-container">
          @yield('content')
        </div>
      </main>
      
      <!-- Footer Section -->
    <footer class="site-footer mt-4">
      <div class="footer-content">
        <!-- Contact Details Section -->
            <div class="footer-left">
              <h4>Contact Details</h4>
                <p><i class="fa fa-map-marker" aria-hidden="true"></i> Bharatpur-15, Fulbari, Chitwan, Nepal</p>
                <p><i class="fa fa-phone" aria-hidden="true"></i> +977-56-591054, +977-56-592406</p>
                <p><i class="fa fa-envelope" aria-hidden="true"></i> iser.nepal@outlook.com</p>
                <p><i class="fa fa-clock" aria-hidden="true"></i> 10 A.M. - 5 P.M.</p>

                <div class="social-icons">
                    <a href="https://www.facebook.com/isernepalofficial/" target="_blank">
                        <i class="fa fa-brands fa-facebook fa-2x"></i></a>
                    <a href="https://www.linkedin.com/in/iser-nepal-68b407160/" target="_blank">
                        <i class="fa fa-brands fa-linkedin fa-2x"></i>
                    </a>
                </div>
            </div>

            <!-- Logo and Research Project Section -->
            <div class="footer-right">
                <div class="logos">
                    <img src="{{ asset('images/aging_logo.png') }}" alt="Aging Logo" class="footer-logo">
                    <img src="{{ asset('images/michigan-M.png') }}" alt="Michigan Logo" class="footer-logo">
                </div>
                <p class="research-description">
                  <strong>Study on Cognition and Aging in Nepal | CVFS-SCAN</strong><br>
                  This project is funded by the National Institute of Health (NIH).
                </p>
                <div class="footer-links">
                    <a href="UCB Privacy Statement">UCB Privacy Statement</a>|
                    <a href="Web Accessibility Policy">Web Accessibility Policy</a>|
                    <span>Disclaimer</span>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Section -->
        <div class="footer-bottom">
            <p>&copy; Institute for Social and Environmental Research – Nepal | website: <a
                    href="https://isernepal.org.np/" target="_blank">ISER-N</a></p>
        </div>
    </footer>


    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> --}}

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>

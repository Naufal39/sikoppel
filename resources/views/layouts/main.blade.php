<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SIKOPPEL | {{ $title }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../img/ship_870119.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Red+Rose:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    {{-- <link href="../css/blog.css" rel="stylesheet"> --}}
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid py-2 d-none d-lg-flex">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div>
                    <small class="me-3"><i class="fa fa-map-marker-alt me-2"></i>Jl. Brigjen Darsono No. 16, Kedawung, Kab. Cirebon</small>
                    <small class="me-3"><i class="fa fa-clock me-2"></i>Mon-Fri 08am-4pm, Sat Sun Closed</small>
                </div>
                <nav class="breadcrumb mb-0">
                    <a class="breadcrumb-item small text-body" href="#">Career</a>
                    <a class="breadcrumb-item small text-body" href="#">Support</a>
                    <a class="breadcrumb-item small text-body" href="#">Terms</a>
                    <a class="breadcrumb-item small text-body" href="#">FAQs</a>
                </nav>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Brand Start -->
    <div class="container-fluid bg-primary text-white pt-4 pb-5 d-none d-lg-flex">
        <div class="container pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex">
                    <i class="bi bi-telephone-inbound fs-2"></i>
                    <div class="ms-3">
                        <h5 class="text-white mb-0">Call Now</h5>
                        <span>(0231) 8803744</span>
                    </div>
                </div>
                <a href="index.html" class="h1 text-white mb-0">SI<span class="text-dark">Koppel</span></a>
                <div class="d-flex">
                    <i class="bi bi-envelope fs-2"></i>
                    <div class="ms-3">
                        <h5 class="text-white mb-0">Mail Now</h5>
                        <span>uptdpppplaut@gmail.com</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-3">
                <a href="/" class="navbar-brand d-lg-none">
                    <h1 class="text-primary m-0">SI<span class="text-dark">Koppel</span></h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="/" class="nav-item nav-link {{ ($title === "Home") ? 'active' : '' }}">Home</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle {{ ($title === "Selayang Pandang") ? 'active' : '' }}" data-bs-toggle="dropdown">Selayang Pandang</a>
                            <div class="dropdown-menu bg-light m-0">
                                <a href="/ppatimban" class="dropdown-item {{ ($title === "Profile") ? 'active' : '' }}">Profile</a>
                                <a href="/pcirebon" class="dropdown-item {{ ($title === "Dasar Hukum") ? 'active' : '' }}"> Dasar Hukum</a>
                                <a href="testimonial.html" class="dropdown-item {{ ($title === "Potensi Pelabuhan") ? 'active' : '' }}"> Potensi Pelabuhan </a>
                                  
                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Dropdown
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li class="nav-item dropend">
                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Dropdown
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                  <li><hr class="dropdown-divider"></li>
                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                              </li>
                            </ul>
                        </div>
                        
                        <a href="/perizinan" class="nav-item nav-link {{ ($title === "Perizinan") ? 'active' : '' }}">Perizinan</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle {{ ($title === "Pelabuhan Patimban") ? 'active' : '' }}" data-bs-toggle="dropdown">Data dan Informasi</a>
                            <div class="dropdown-menu bg-light m-0">
                                <a href="/ppatimban" class="dropdown-item {{ ($title === "Pelabuhan Patimban") ? 'active' : '' }}">Pelabuhan Patimban</a>
                                <a href="/pcirebon" class="dropdown-item {{ ($title === "Pelabuhan Cirebon") ? 'active' : '' }}"> Pelabuhan Cirebon </a>
                                <a href="testimonial.html" class="dropdown-item {{ ($title === "Pelabuhan Palabuhanratu") ? 'active' : '' }}"> Pelabuhan Palabuhanratu </a>
                                <a href="appoinment.html" class="dropdown-item {{ ($title === "Pelabuhan Bojongsalawe") ? 'active' : '' }}"> Pelabuhan Bojongsalawe </a>
                            </div>
                        </div>
                        <a href="/berita" class="nav-item nav-link {{ ($title === "Publikasi") ? 'active' : '' }}">Publikasi</a>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                    
                    @auth
                    <div class="nav-item dropdown ms-auto">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Welcome back, {{ auth()->user()->name }}</a>
                        <div class="dropdown-menu bg-light m-0">
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </div>
                    </div>
                    @else
                    <div class="ms-auto d-none d-lg-flex">
                        <a class="btn btn-primary ms-2" href="/login"><i class="bi bi-box-arrow-in-right mx-2"></i>Login</i></a>
                    </div>
                    @endauth
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    @yield('isihalaman')


    <!-- Footer Start -->
    <div class="container-fluid footer position-relative bg-dark text-white-50 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 py-5">
                <div class="col-lg-6 pe-lg-5">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="h1 text-primary mb-0">SI<span class="text-white">Koppel</span></h1>
                    </a>
                    <p class="fs-5 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor.</p>
                    <p><i class="fa fa-map-marker-alt me-2"></i>Jl. Brigjen Darsono No. 16, Kedawung, Kab. Cirebon</p>
                    <p><i class="fa fa-phone-alt me-2"></i>(0231) 8803744</p>
                    <p><i class="fa fa-envelope me-2"></i>uptdpppplaut@gmail.com</p>
                    <div class="d-flex mt-4">
                        <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="row g-5">
                        <div class="col-sm-6">
                            <h4 class="text-light mb-4">Quick Links</h4>
                            <a class="btn btn-link" href="">About Us</a>
                            <a class="btn btn-link" href="">Contact Us</a>
                            <a class="btn btn-link" href="">Our Services</a>
                            <a class="btn btn-link" href="">Terms & Condition</a>
                            <a class="btn btn-link" href="">Support</a>
                        </div>
                        <div class="col-sm-6">
                            <h4 class="text-light mb-4">Popular Links</h4>
                            <a class="btn btn-link" href="">About Us</a>
                            <a class="btn btn-link" href="">Contact Us</a>
                            <a class="btn btn-link" href="">Our Services</a>
                            <a class="btn btn-link" href="">Terms & Condition</a>
                            <a class="btn btn-link" href="">Support</a>
                        </div>
                        <div class="col-sm-12">
                            <h4 class="text-light mb-4">Newsletter</h4>
                            <div class="w-100">
                                <div class="input-group">
                                    <input type="text" class="form-control border-0 py-3 px-4" style="background: rgba(255, 255, 255, .1);" placeholder="Your Email Address"><button class="btn btn-primary px-4">Sign Up</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark text-white-50 py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; <a href="#">SIKOPPEL</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    <p class="mb-0">Designed by <a href="https://htmlcodex.com">HTML Codex</a><br>Distributed by <a href="https://themewagon.com">ThemeWagon</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->
    {{-- <div class="elfsight-app-bb3c90ef-4d63-4192-8ba5-e7eb4d215f7a" data-elfsight-app-lazy></div> --}}

    <!-- Back to Top -->
    {{-- <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a> --}}


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/counterup/counterup.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script>
    $(document).ready(function(){
        $("#welcomeModal").modal('show');
    });
    
    </script>
    <script>
        $('#welcomeVid').on('hide.bs.modal', function (e) {
            $("#welcomeVid").get(0).pause();
        })
    </script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
    {{-- <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script> --}}

    {{-- <script src="../js/blog.js"></script> --}}

<!--Use the below code snippet to provide real time updates to the live chat plugin without the need of copying and paste each time to your website when changes are made via PBX-->
{{-- 3CX LIVE CHAT --}}
{{-- <call-us-selector phonesystem-url="https://1616.3cx.cloud" party="uptdppppl"></call-us-selector> 
<script defer src="https://downloads-global.3cx.com/downloads/livechatandtalk/v1/callus.js" id="tcx-callus-js" charset="utf-8"></script> --}}

{{-- TIDIO LIVE CHAT --}}
<script src="//code.tidio.co/cjdmryehowomoncrn8dbqlduyti21fst.js" async></script>

</body>

</html>
<!doctype html>
<html lang="en">

<head>
    <title>International</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="_token" content="{{csrf_token()}}" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendors/OwlCarousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('responsive.css') }}">
    <script src="{{ asset('vendors/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/pagination/pagination.js') }}"></script>
</head>
<body>
<header class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('/') }}">
            <img src="{{ asset('images/diu_white.png') }}" width="112" height="52" class="d-inline-block align-middle" alt="Dhaka International University">
            <h4 class="d-inline-block align-middle">International Students<br><small>Dhaka International University</small></h4>
        </a>

        <div class="diu-contacts ml-auto text-light text-right">
            <p><strong>+880-1792-782969</strong></p>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a class="text-light" href="">
                        <img src="{{ asset('images/google-duo.svg') }}" alt="">
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="text-light" href="">
                        <img src="{{ asset('images/viber.svg') }}" alt="">
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="text-light" href="">
                        <img src="{{ asset('images/wechat.svg') }}" alt="">
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="text-light" href="">
                        <img src="{{ asset('images/mobile-phone.svg') }}" alt="">
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="text-light" href="">
                        <img src="{{ asset('images/whatsapp.svg') }}" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>


<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="diu-mega collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('/') }}" aria-controls="home">Home</a>
                </li>{{--
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('campus_life') }}" aria-controls="campus_life">Campus Life</a>
                </li>--}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('student.present', 1) }}" aria-controls="">Present Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('student.passed', 1) }}" aria-controls="">Passed Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('gallery') }}" aria-controls="">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('virtual_visit') }}" aria-controls="virtual_visit">Virtual Visit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('why_diu') }}" aria-controls="why_diu">Why At DIU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact_us') }}" aria-controls="contact_us">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<footer class="diu-footer diu-text-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-12">
                <div class="diu-display-table">
                    <div class="diu-display-table-cell">
                        <img src="{{ asset('images/diu_white.png') }}">
                    </div>
                </div>
            </div>
            <div class="col-lg-10 col-md-12">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="diu-section-header text-light">
                            <h2>Permanent Campus</h2>
                        </div>
                        <div class="diu-contact-info text-light">
                            <ul class="list-unstyled">
                                <li>
                                    <span><i class="fas fa-phone-square"></i></span>
                                    <p><strong>Call Us</strong></p>
                                    <p>+88-019-39851060 (Upto1)</p>
                                </li>
                                <li>
                                    <span><i class="fas fa-fax"></i></span>
                                    <p><strong>Fax</strong></p>
                                    <p>+88-02-55040898</p>
                                </li>
                                <li>
                                    <span><i class="fas fa-envelope-square"></i></span>
                                    <p><strong>Mail Us</strong></p>
                                    <p>info@diu.net.bd</p>
                                    <p>info@diu-bd.net</p>
                                </li>
                                <li>
                                    <span><i class="fas fa-map-marked-alt"></i></span>
                                    <p><strong>Location</strong></p>
                                    <p>Shatarkul, Badda, Dhaka-1212. Bangladesh</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="diu-section-header text-light">
                            <h2>Banani Campus</h2>
                        </div>
                        <div class="diu-contact-info text-light">
                            <ul class="list-unstyled">
                                <li>
                                    <span><i class="fas fa-phone-square"></i></span>
                                    <p><strong>Call Us</strong></p>
                                    <p>+88-02-55040891 (Upto 7)</p>
                                    <p>+88-019-39851062 (Upto 4)</p>
                                </li>
                                <li>
                                    <span><i class="fas fa-fax"></i></span>
                                    <p><strong>Fax</strong></p>
                                    <p>+88-02-55040898</p>
                                </li>
                                <li>
                                    <span><i class="fas fa-envelope-square"></i></span>
                                    <p><strong>Mail Us</strong></p>
                                    <p>info@diu.net.bd</p>
                                    <p>info@diu-bd.net</p>
                                </li>
                                <li>
                                    <span><i class="fas fa-map-marked-alt"></i></span>
                                    <p><strong>Location</strong></p>
                                    <p>House # 4, Road # 1, Block - F, Banani, Dhaka -1213, Bangladesh</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="diu-section-header text-light">
                            <h2>Green Road Campus</h2>
                        </div>
                        <div class="diu-contact-info text-light">
                            <ul class="list-unstyled">
                                <li>
                                    <span><i class="fas fa-phone-square"></i></span>
                                    <p><strong>Call Us</strong></p>
                                    <p>+88-02-9613868</p>
                                    <p>+88-02-9137568</p>
                                    <p>+88-016-11348344 (Upto 8)</p>
                                </li>
                                <li>
                                    <span><i class="fas fa-fax"></i></span>
                                    <p><strong>Fax</strong></p>
                                    <p>+88-02-55040898</p>
                                </li>
                                <li>
                                    <span><i class="fas fa-envelope-square"></i></span>
                                    <p><strong>Mail Us</strong></p>
                                    <p>info@diu.net.bd</p>
                                    <p>info@diu-bd.net</p>
                                </li>
                                <li>
                                    <span><i class="fas fa-map-marked-alt"></i></span>
                                    <p><strong>Location</strong></p>
                                    <p>66 Green Road Dhaka - 1205, Bangladesh</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="diu-footer-social text-center">
        <ul class="list-inline mb-md-0">
            <li class="list-inline-item"><a href="https://www.facebook.com/diu.net.bd" class="text-light"><i class="fab fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="https://www.youtube.com/channel/UCH919CzDsWuHZXwvEeA0Z4w" class="text-light"><i class="fab fa-youtube"></i></a></li>
            <li class="list-inline-item"><a href="https://twitter.com/diubd" class="text-light"><i class="fab fa-twitter-square"></i></a></li>
            <li class="list-inline-item"><a href="https://www.linkedin.com/edu/dhaka-international-university-10307" class="text-light"><i class="fab fa-linkedin"></i></a></li>
            <li class="list-inline-item"><a href=https://www.instagram.com/dhaka_international_university"" class="text-light"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="https://plus.google.com/u/0/+DhakaInternationalUniversity" class="text-light"><i class="fab fa-google-plus-square"></i></a></li>
            <li class="list-inline-item"><a href="https://www.pinterest.com/DIUdhaka" class="text-light"><i class="fab fa-pinterest-square"></i></a></li>
        </ul>
    </div>
    <div class="diu-footer-copyright text-center text-light">
        <p>&copy; 2018 <span class="text-success">DIU International Theme</span>. All Rights Reserved. Powered by <a href="http://it.diu.ac/" class="text-success text-uppercase" target="_blank">IT Team – DIU</a></p>
    </div>
    <a href="JavaScript:;" class="diu-scroll-top text-light">
        <i class="fa fa-angle-up"></i>
    </a>
</footer>
<section class="diu-icon-bar">
    <a href="https://www.facebook.com/diu.net.bd" class="facebook"><i class="fab fa-facebook"></i></a>
    <a href="https://twitter.com/diubd" class="twitter"><i class="fab fa-twitter-square"></i></a>
    <a href="https://plus.google.com/u/0/+DhakaInternationalUniversity" class="google"><i class="fab fa-google-plus-square"></i></a>
    <a href="https://www.linkedin.com/edu/dhaka-international-university-10307" class="linkedin"><i class="fab fa-linkedin"></i></a>
    <a href="https://www.youtube.com/channel/UCH919CzDsWuHZXwvEeA0Z4w" class="youtube"><i class="fab fa-youtube"></i></a>
</section>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('vendors/OwlCarousel/dist/owl.carousel.js') }}"></script>
<script src="{{ asset('vendors/counterup/waypoints.min.js') }}"></script>
<script src="{{ asset('vendors/counterup/counterup.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgC6ZapXdUzFdeQOFhdm_wucwlDMMQ8CQ"></script>
<script src="{{ asset('js/js.js') }}"></script>

</body>
</html>
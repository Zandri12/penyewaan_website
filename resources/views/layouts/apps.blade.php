<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from kohost.themetags.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Dec 2020 15:12:35 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--favicon icon-->
    <link rel="icon" href="assets/img/favicon.png" type="image/png" sizes="16x16">

    <!--title-->
    <title>Kohost - Modern Web Hosting & WHMCS Template</title>

    <!--build:css-->
    @include('layouts.css')
    <!-- endbuild -->
</head>

<body>

    <!--preloader start-->
    @include('layouts.preloader')
    <!--preloader end-->
    @include('layouts.header')
    <!--header section start-->
    
    <!--header section end-->

    {{-- @include('main.main') --}}
    @yield('main')

    <!--footer section start-->
    <footer class="footer-1 ptb-60 gradient-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4 mb-4 mb-md-4 mb-sm-4 mb-lg-0">
                    <a href="#" class="navbar-brand mb-2">
                        <img src="{{ asset('assets/img/logo-white.png')}}" alt="logo" class="img-fluid">
                    </a>
                    <br>
                    <p>Dynamically re-engineer high standards in functiona with alternative paradigms. Conveniently monetize resource maximizing initiatives.</p>
                    <ul class="list-inline social-list-default background-color social-hover-2 mt-2">
                        <li class="list-inline-item"><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a class="youtube" href="#"><i class="fab fa-youtube"></i></a></li>
                        <li class="list-inline-item"><a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li class="list-inline-item"><a class="dribbble" href="#"><i class="fab fa-dribbble"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-12 col-lg-8">
                    <div class="row mt-0">
                        <div class="col-sm-6 col-md-3 col-lg-3 mb-4 mb-sm-4 mb-md-0 mb-lg-0">
                            <h6 class="font-weight-normal">Resources</h6>
                            <ul>
                                <li>
                                    <a href="#">Help</a>
                                </li>
                                <li>
                                    <a href="#">Events</a>
                                </li>
                                <li>
                                    <a href="#">Live sessions</a>
                                </li>
                                <li>
                                    <a href="#">Open source</a>
                                </li>
                                <li>
                                    <a href="#">Documentation</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 mb-4 mb-sm-4 mb-md-0 mb-lg-0">
                            <h6 class="font-weight-normal">Products</h6>
                            <ul>
                                <li>
                                    <a href="#">Pricing</a>
                                </li>
                                <li>
                                    <a href="#">Navigation</a>
                                </li>
                                <li>
                                    <a href="#">AI Studio</a>
                                </li>
                                <li>
                                    <a href="#">Page Speed </a>
                                </li>
                                <li>
                                    <a href="#">Performance</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 mb-4 mb-sm-4 mb-md-0 mb-lg-0">
                            <h6 class="font-weight-normal">Company</h6>
                            <ul>
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                                <li>
                                    <a href="#">Careers</a>
                                </li>
                                <li>
                                    <a href="#">Customers</a>
                                </li>
                                <li>
                                    <a href="#">Community</a>
                                </li>
                                <li>
                                    <a href="#">Our Team</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <h6 class="font-weight-normal">Support</h6>
                            <ul>
                                <li>
                                    <a href="#">FAQ</a>
                                </li>
                                <li>
                                    <a href="#">Sells</a>
                                </li>
                                <li>
                                    <a href="#">Contact Support</a>
                                </li>
                                <li>
                                    <a href="#">Network Status</a>
                                </li>
                                <li>
                                    <a href="#">Product Services</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end of container-->
    </footer>

    <!--footer bottom copyright start-->
    <div class="footer-bottom py-3 gray-light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-7">
                    <div class="copyright-wrap small-text">
                        <p class="mb-0">&copy; ThemeTags Design Agency, All rights reserved</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="terms-policy-wrap text-lg-right text-md-right text-left">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a class="small-text" href="terms-condition.html">Terms & Condition</a></li>
                            <li class="list-inline-item"><a class="small-text" href="#">Security</a></li>
                            <li class="list-inline-item"><a class="small-text" href="privacy-policy.html">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer bottom copyright end-->
    <!--footer section end-->
    <!--scroll bottom to top button start-->
    <div class="scroll-top scroll-to-target primary-bg text-white" data-target="html">
        <span class="fas fa-hand-point-up"></span>
    </div>
    <!--scroll bottom to top button end-->
    <!--build:js-->
    @include('layouts.js')
    <!--endbuild-->
</body>


<!-- Mirrored from kohost.themetags.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Dec 2020 15:15:46 GMT -->
</html>
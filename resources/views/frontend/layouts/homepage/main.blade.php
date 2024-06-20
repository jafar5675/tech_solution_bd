<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> {{ $header_title }}-bd.com </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend') }}/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('frontend') }}/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('frontend') }}/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="{{ asset('frontend') }}/images/favicons/site.html" />
    <meta name="description" content="Notech HTML Template For It Solution" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend/vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/notech-icons/style.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/notech-two-icons/style.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/timepicker/timePicker.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/notech.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/notech-responsive.css" />


    <!-- modes css -->
    <link rel="stylesheet" id="jssMode" href="{{ asset('frontend') }}/css/notech-light.css">


    <!-- toolbar css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/toolbar/css/toolbar.css">
    @yield('style')

</head>

<body>
    @include('frontend.layouts.homepage._header')


    @yield('content')

    <!--Brand One End-->

    <!--Site Footer Start-->
    @include('frontend.layouts.homepage._footer')
    <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img
                        src="{{ asset('frontend') }}/images/resources/footer-logo.png" width="155"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">info@techsolutions-bd.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:01738-717829">01738-717829</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="https://www.youtube.com/@techsolutionbd8185/featured" class="fab fa-youtube"></a>
                    <a href="https://www.facebook.com/techsolution.bd" class="fab fa-facebook-square"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->
    <!-- Modal -->
    <div class="modal fade" id="tech_bd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('auth_login') }}" id="SubmitFormLoginn" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="singin-email">email address *</label>
                            <input type="text" class="form-control" id="singin-email" name="email" required>
                        </div><!-- End .form-group -->

                        <div class="form-group">
                            <label for="singin-password">Password *</label>
                            <input type="password" class="form-control" id="singin-password" name="password"
                                required>
                        </div><!-- End .form-group -->
                        <br>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary">Log In</button>


                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                <label class="custom-control-label" for="register-policy">Remember
                                    Me</label>
                            </div>
                            <a href="{{ url('forgot-password') }}" class="forgot-link">Forgot
                                Your
                                Password</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('auth_register') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="register-name">Your Name *</label>
                            <input type="text" class="form-control" id="register-name" name="name" required>
                        </div><!-- End .form-group -->
                        <div class="form-group">
                            <label for="register-email">Your email *</label>
                            <input type="email" class="form-control" id="register-email" name="email" required>
                        </div><!-- End .form-group -->

                        <div class="form-group">
                            <label for="register-password">Password *</label>
                            <input type="password" class="form-control" id="register-password" name="password"
                                required>
                        </div><!-- End .form-group -->
                        <br>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary">Register</button>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="register-policy">
                                <label class="custom-control-label" for="register-policy">I agree to
                                    the <a href="#">privacy policy</a> *</label>
                            </div><!-- End .custom-checkbox -->
                        </div><!-- End .form-footer -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="{{ asset('frontend') }}/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('frontend') }}/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/vendors/jarallax/jarallax.min.js"></script>
    <script src="{{ asset('frontend') }}/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="{{ asset('frontend') }}/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="{{ asset('frontend') }}/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="{{ asset('frontend') }}/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('frontend') }}/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="{{ asset('frontend') }}/vendors/nouislider/nouislider.min.js"></script>
    <script src="{{ asset('frontend') }}/vendors/odometer/odometer.min.js"></script>
    <script src="{{ asset('frontend') }}/vendors/swiper/swiper.min.js"></script>
    <script src="{{ asset('frontend') }}/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="{{ asset('frontend') }}/vendors/wnumb/wNumb.min.js"></script>
    <script src="{{ asset('frontend') }}/vendors/wow/wow.js"></script>
    <script src="{{ asset('frontend') }}/vendors/isotope/isotope.js"></script>
    <script src="{{ asset('frontend') }}/vendors/countdown/countdown.min.js"></script>
    <script src="{{ asset('frontend') }}/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="{{ asset('frontend') }}/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="{{ asset('frontend') }}/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('frontend') }}/vendors/vegas/vegas.min.js"></script>
    <script src="{{ asset('frontend') }}/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="{{ asset('frontend') }}/vendors/timepicker/timePicker.js"></script>

    <!-- template js -->
    <script src="{{ asset('frontend') }}/js/notech.js"></script>
    <!-- toolbar js -->
    <script src="{{ asset('frontend') }}/vendors/toolbar/js/js.cookie.min.js"></script>
    <script src="{{ asset('frontend') }}/vendors/toolbar/js/jQuery.style.switcher.min.js"></script>
    <script src="{{ asset('frontend') }}/vendors/toolbar/js/toolbar.js"></script>


</body>

</html>

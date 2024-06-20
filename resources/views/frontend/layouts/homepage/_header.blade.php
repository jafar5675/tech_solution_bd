<!-- style switcher -->
<div class="style-switcher">
    <a href="#" id="switcher-toggler"><i class="fa fa-cog"></i></a>
    <h3>Layout Options</h3>
    <div class="layout-feature" id="colorMode">
        <a href="#" class="dark-switcher" data-theme="notech-dark">Dark</a>
        <a href="#" class="light-switcher" data-theme="notech-light">Light</a>
        <button class="boxed-switcher">Boxed</button><!-- /.ltr-switcher -->
    </div><!-- /.language-feature -->
</div>
<!-- end style switcher -->


<div class="preloader">
    <img class="preloader__image" width="60" src="{{ asset('frontend') }}/images/loader.png" alt="" />
</div>
<!-- /.preloader -->
<div class="page-wrapper">
    <header class="main-header main-header--one clearfix">
        <div class="main-header__top">
            <div class="main-header__top-inner clearfix">
                <div class="main-header__top-left">
                    <ul class="list-unstyled main-header__top-address">
                        <li>
                            <div class="icon">
                                <span class="icon-pin"></span>
                            </div>
                            <div class="text">
                                <p>Address: 241, Senpara parbata,Mirpur 10,Dhaka</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-email"></span>
                            </div>
                            <div class="text">
                                <p><a href="mailto:info@techsolutions-bd.com">info@techsolutions-bd.com</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="main-header__top-right">
                    <div class="main-header__top-right-content">
                        <ul class="list-unstyled main-header__top-right-menu">
                            <li><a href="{{ url('') }}">Home</a></li>
                            <li><a href="" data-bs-toggle="modal" data-bs-target="#tech_bd"></i>Login</a>
                            </li>
                            <li><a href="" data-bs-toggle="modal" data-bs-target="#register"></i>Register</a>
                            </li>
                        </ul>

                        <div class="main-header__top-right-social">
                            <a href="https://www.youtube.com/@techsolutionbd8185/featured"><i
                                    class="fab fa-youtube"></i></a>
                            <a href="https://www.facebook.com/techsolution.bd"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="main-menu clearfix">
                <div class="main-menu__wrapper clearfix">

                    <div class="main-menu__left main-menu__left--two">
                        <div class="main-menu__logo">
                            <a href="index.html">
                                <img class="logo-dark" src="{{ asset('frontend') }}/images/resources/logo-1.jpg"
                                    alt="" style="width:100px;">
                                <img class="logo-light" src="{{ asset('frontend') }}/images/resources/logo-2.jpg"
                                    alt="" style="width:100px;">
                            </a>
                        </div>
                        @include('frontend.layouts.menu')
                    </div>

                    <div class="main-menu__right">
                        <div class="main-menu__search-call">
                            <div class="main-menu__call">
                                <div class="main-menu__call-icon">
                                    <img src="{{ asset('frontend') }}/images/icon/main-menu-icon-comment.png"
                                        alt="">
                                </div>
                                <div class="main-menu__call-number">
                                    <p>Have any question?</p>
                                    <h5><a href="tel:926668880000"><span>Free</span> +98 (000)-9850</a></h5>
                                </div>
                            </div>
                            <div class="main-menu__search-box">
                                <a href="#" class="main-menu__search search-toggler icon-magnifying-glass"></a>
                            </div>
                        </div>
                    </div>

                </div>
            </nav>
    </header>

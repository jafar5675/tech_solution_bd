@extends('frontend.layouts.homepage.main')
@section('style')
@endsection

@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg"
            style="background-image: url({{ url('frontend') }}/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ url('') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li class="active">Services</li>
                </ul>
                <h2>Our Services</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Feature One Start-->
    <section class="feature-one feature-one--service-two-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <!--Feature One Single-->
                    <div class="feature-one__single">
                        <div class="feature-one__img">
                            <img src="{{ url('frontend') }}/images/resources/feature-1-1.jpg" alt="">
                            <div class="feature-one__title-box">
                                <h3 class="feature-one__title"><a href="about.html">Manage IT services</a></h3>
                            </div>
                            <div class="feature-one__hover-content">
                                <div class="feature-one__icon">
                                    <span class="icon-system"></span>
                                </div>
                                <h3 class="feature-one__hover-title"><a href="about.html">Manage IT services</a>
                                </h3>
                                <p class="feature-one__hover-text">There are many lipsum of in pass sages of
                                    available some.</p>
                                <div class="feature-one__learn-more">
                                    <a href="about.html">Learn more<i class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <!--Feature One Single-->
                    <div class="feature-one__single">
                        <div class="feature-one__img">
                            <img src="{{ url('frontend') }}/images/resources/feature-1-2.jpg" alt="">
                            <div class="feature-one__title-box">
                                <h3 class="feature-one__title"><a href="about.html">Cyber security</a></h3>
                            </div>
                            <div class="feature-one__hover-content">
                                <div class="feature-one__icon">
                                    <span class="icon-cyber"></span>
                                </div>
                                <h3 class="feature-one__hover-title"><a href="about.html">Cyber securitys</a></h3>
                                <p class="feature-one__hover-text">There are many lipsum of in pass sages of
                                    available some.</p>
                                <div class="feature-one__learn-more">
                                    <a href="about.html">Learn more<i class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <!--Feature One Single-->
                    <div class="feature-one__single">
                        <div class="feature-one__img">
                            <img src="{{ url('frontend') }}/images/resources/feature-1-3.jpg" alt="">
                            <div class="feature-one__title-box">
                                <h3 class="feature-one__title"><a href="about.html">Digital experience</a></h3>
                            </div>
                            <div class="feature-one__hover-content">
                                <div class="feature-one__icon">
                                    <span class="icon-application"></span>
                                </div>
                                <h3 class="feature-one__hover-title"><a href="about.html">Digital experience</a>
                                </h3>
                                <p class="feature-one__hover-text">There are many lipsum of in pass sages of
                                    available some.</p>
                                <div class="feature-one__learn-more">
                                    <a href="about.html">Learn more<i class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <!--Feature One Single-->
                    <div class="feature-one__single">
                        <div class="feature-one__img">
                            <img src="{{ url('frontend') }}/images/resources/feature-1-4.jpg" alt="">
                            <div class="feature-one__title-box">
                                <h3 class="feature-one__title"><a href="about.html">Product development</a></h3>
                            </div>
                            <div class="feature-one__hover-content">
                                <div class="feature-one__icon">
                                    <span class="icon-coding"></span>
                                </div>
                                <h3 class="feature-one__hover-title"><a href="about.html">Product development</a>
                                </h3>
                                <p class="feature-one__hover-text">There are many lipsum of in pass sages of
                                    available some.</p>
                                <div class="feature-one__learn-more">
                                    <a href="about.html">Learn more<i class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <!--Feature One Single-->
                    <div class="feature-one__single">
                        <div class="feature-one__img">
                            <img src="{{ url('frontend') }}/images/resources/feature-1-5.jpg" alt="">
                            <div class="feature-one__title-box">
                                <h3 class="feature-one__title"><a href="about.html">UI/UX designings</a></h3>
                            </div>
                            <div class="feature-one__hover-content">
                                <div class="feature-one__icon">
                                    <span class="icon-design-thinking"></span>
                                </div>
                                <h3 class="feature-one__hover-title"><a href="about.html">UI/UX designings</a></h3>
                                <p class="feature-one__hover-text">There are many lipsum of in pass sages of
                                    available some.</p>
                                <div class="feature-one__learn-more">
                                    <a href="about.html">Learn more<i class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <!--Feature One Single-->
                    <div class="feature-one__single">
                        <div class="feature-one__img">
                            <img src="{{ url('frontend') }}/images/resources/feature-1-6.jpg" alt="">
                            <div class="feature-one__title-box">
                                <h3 class="feature-one__title"><a href="about.html">Content
                                        management</a></h3>
                            </div>
                            <div class="feature-one__hover-content">
                                <div class="feature-one__icon">
                                    <span class="icon-content"></span>
                                </div>
                                <h3 class="feature-one__hover-title"><a href="about.html">Content
                                        management</a>
                                </h3>
                                <p class="feature-one__hover-text">There are many lipsum of in pass sages of
                                    available some.</p>
                                <div class="feature-one__learn-more">
                                    <a href="about.html">Learn more<i class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Feature One End-->
@endsection
@section('script')
@endsection

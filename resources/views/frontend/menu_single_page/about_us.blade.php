@extends('frontend.layouts.homepage.main')
@section('style')
@endsection

@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ asset('upload') }}/course/1796961490281406.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ url('') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li class="active">About us</li>
                </ul>
                <h2>About us</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Delivering IT Start-->
    <section class="delivering-it delivering-it-two">
        <div class="container">
            <div class="delivering-it__bottom">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <!--Delivering IT Single-->
                        <div class="delivering-it__single">
                            <div class="delivering-it__img">
                                <img src="{{ url('frontend') }}/images/resources/delivering-it-img-1.jpg" alt="">
                            </div>
                            <div class="delivering-it__content">
                                <h5 class="delivering-it__content-title">Perfect solution every business demands
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <!--Delivering IT Single-->
                        <div class="delivering-it__single">
                            <div class="delivering-it__img">
                                <img src="{{ url('frontend') }}/images/resources/delivering-it-img-2.jpg" alt="">
                            </div>
                            <div class="delivering-it__content">
                                <h5 class="delivering-it__content-title">Helping businesses around the world</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <!--Delivering IT Single-->
                        <div class="delivering-it__single">
                            <div class="delivering-it__img">
                                <img src="{{ url('frontend') }}/images/resources/delivering-it-img-3.jpg" alt="">
                            </div>
                            <div class="delivering-it__content">
                                <h5 class="delivering-it__content-title">What is holding back the IT solution.</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Delivering IT End-->

    <!--Business From Start-->
    <section class="business-from">
        <div class="business-from-bg-box">
            <div class="business-from-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url({{ url('frontend') }}/images/backgrounds/business-from-bg.jpg);"></div>
        </div>
        <div class="container">
            <div class="business-from__inner text-center">
                <p class="business-from__sub-title">Business from great idea to</p>
                <h2 class="business-from__title">launching</h2>
                <div class="business-from__btn-box">
                    <a href="contact.html" class="business-from__btn thm-btn">Contact us now</a>
                </div>
            </div>
        </div>
    </section>
    <!--Business From End-->

    <!--Notech More Start-->
    <section class="notech-more">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="notech-more__left">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">Stay protected</span>
                                <div class="section-title-shape">
                                    <img src="{{ url('frontend') }}/images/shapes/section-title-shape.png" alt="">
                                </div>
                            </div>
                            <h2 class="section-title__title">Notech is more than tech company</h2>
                        </div>
                        <p class="notech-more__text">Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur.</p>
                        <ul class="list-unstyled notech-more__points">
                            <li>
                                <div class="icon">
                                    <span class="icon-technology"></span>
                                </div>
                                <h3 class="notech-more__title">Data innovations</h3>
                                <p class="notech-more__text-2">Nullam mollis elit quis dus is lacinia not efficitur.
                                </p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-stock-market"></span>
                                </div>
                                <h3 class="notech-more__title">Business solutions</h3>
                                <p class="notech-more__text-2">Nullam mollis elit quis dus is lacinia not efficitur.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="notech-more__right">
                        <div class="notech-more__img wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <img src="{{ url('frontend') }}/images/resources/notech-more-img-1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Notech More End-->

    <!--Counter One Start-->
    <section class="counter-one about-page__counter">
        <div class="counter-one__bg"
            style="background-image: url({{ url('frontend') }}/images/backgrounds/funfact-bg-1-1.png);">
        </div><!-- /.counter-one__bg -->
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <ul class="list-unstyled counter-one__list">
                        <li class="counter-one__single wow fadeInUp" data-wow-delay="100ms">
                            <div class="counter-one__icon">
                                <span class="icon-work"></span>
                            </div>
                            <h3 class="odometer" data-count="5">00</h3>
                            <span class="counter-one__plus">+</span>
                            <p class="counter-one__title">Years of experience</p>
                            <p class="counter-one__text">Lorem ipsum is simply free text used by refring.</p>
                        </li>
                        <li class="counter-one__single wow fadeInUp" data-wow-delay="200ms">
                            <div class="counter-one__icon">
                                <span class="icon-technical-support"></span>
                            </div>
                            <h3 class="odometer" data-count="10">00</h3>
                            <p class="counter-one__title">IT problems solved</p>
                            <p class="counter-one__text">Lorem ipsum is simply free text used by refring.</p>
                        </li>
                        <li class="counter-one__single wow fadeInUp" data-wow-delay="300ms">
                            <div class="counter-one__icon">
                                <span class="icon-like"></span>
                            </div>
                            <h3 class="odometer" data-count="9">00</h3>
                            <p class="counter-one__title">Satisfied clients</p>
                            <p class="counter-one__text">Lorem ipsum is simply free text used by refring.</p>
                        </li>
                        <li class="counter-one__single wow fadeInUp" data-wow-delay="300ms">
                            <div class="counter-one__icon">
                                <span class="icon-user"></span>
                            </div>
                            <h3 class="odometer" data-count="6">00</h3>
                            <span class="counter-one__plus">+</span>
                            <p class="counter-one__title">Pro team members</p>
                            <p class="counter-one__text">Lorem ipsum is simply free text used by refring.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Counter One End-->

    <!--Team One Start-->
    <section class="team-one about-page-team">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Meet the team</span>
                    <div class="section-title-shape">
                        <img src="{{ url('frontend') }}/images/shapes/section-title-shape.png" alt="">
                    </div>
                </div>
                <h2 class="section-title__title">Team members</h2>
            </div>
            <div class="row">
                @foreach ($getExperts as $team)
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <!--Team One Single-->
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="{{ url('upload/expert/' . $team->expert_image) }}" alt="">
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__content-box">
                                <div class="team-one__content">
                                    <div class="team-one-shape">
                                        <img src="{{ url('upload/team/' . $team->image) }}" alt="">
                                    </div>
                                    <h4 class="team-one__name"><a
                                            href="{{ url('team-detail/' . $team->id) }}">{{ $team->name }}</a></h4>
                                    <p class="team-one__title">{{ $team->designation }} ( {{ $team->experience }} )
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--Team One End-->
@endsection
@section('script')
@endsection

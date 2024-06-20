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
                    <li class="active">Our team</li>
                </ul>
                <h2>Our team</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--We Help Start-->
    <section class="we-help">
        <div class="container">
            <div class="we-help__inner">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="we-help__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">Who we are</span>
                                    <div class="section-title-shape">
                                        <img src="{{ url('frontend') }}/images/shapes/section-title-shape.png"
                                            alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">We help your every business need</h2>
                            </div>
                            <p class="we-help__text-1">When you first launch your business, your main goal is to establish
                                your brand and start growing. Unfortunately, this doesn’t happen overnight. Growth is an
                                ongoing process that requires hard work, patience and dedication. There’s no special step or
                                secret way to surpass other businesses in the industry or achieve immediate success.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="we-help__right">
                            <div class="we-help__img wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                                <img src="{{ url('frontend') }}/images/resources/we-help__img.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--We Help End-->

    <!--Team Page Start-->
    <section class="team-page">
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
    <!--Team Page End-->
@endsection
@section('script')
@endsection

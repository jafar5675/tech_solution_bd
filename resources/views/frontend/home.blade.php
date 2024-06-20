@extends('frontend.layouts.homepage.main')

@section('style')
@endsection

@section('content')
    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    <section class="main-slider">
        <div class="swiper-container thm-swiper__slider"
            data-swiper-options='{"slidesPerView": 1, "loop": true,
            "effect": "fade",
            "pagination": {
            "el": "#main-slider-pagination",
            "type": "bullets",
            "clickable": true
            },
            "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
            },
            "autoplay": {
            "delay": 5000
            }}'>
            <div class="swiper-wrapper">
                @foreach ($getSlider as $slider)
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url({{ asset('upload/slider/' . $slider->slider_image) }})"></div>

                        <div class="main-slider__shape-1">
                            <img src="{{ asset('frontend') }}/images/shapes/main-slider-shape-1.png" alt="">
                        </div>
                        <div class="main-slider__shape-2">
                            <img src="{{ asset('frontend') }}/images/shapes/main-slider-shape-2.png" alt="">
                        </div>
                        <div class="main-slider__shape-3">
                            <img src="{{ asset('frontend') }}/images/shapes/main-slider-shape-3.png" alt="">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <p>{{ $slider->big_title }}&</p>
                                        <h2>{{ $slider->title }}</h2>
                                        <div class="main-slider__btn-video-box">
                                            <div class="main-slider__btn-box">
                                                <a href="{{ url('about') }}" class="thm-btn main-slider__btn">Discover
                                                    more</a>
                                            </div>
                                            <div class="main-slider__video-link">
                                                <a href="https://www.youtube.com/watch?v=JnPFhoNm3LI&list=PLttLxaylpYAp_DzBCo_s8RjEzBgGLPkWf&index=2"
                                                    class="video-popup">
                                                    <div class="main-slider__video-icon">
                                                        <span class="fa fa-play"></span>
                                                        <i class="ripple"></i>
                                                    </div>
                                                </a>
                                                <h3 class="main-slider__video-text">Watch <br>Introduction</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-pagination" id="main-slider-pagination"></div>
        </div>
    </section>

    <section class="get-solutions">
        <div class="container">
            <div class="get-solutions__inner">
                <p class="get-solutions__text">Stop wasting time and money on technology. <a href="about.html">Explore
                        notech</a> and get best solutions.</p>
            </div>
        </div>
    </section>

    @include('frontend.course.main')

    <section class="get-to-know">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="get-to-know__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="get-to-know__img-box">
                            <div class="get-to-know__img">
                                <img src="{{ asset('frontend') }}/images/resources/aiub-sir.jpg" alt="">
                            </div>
                            <div class="get-to-know__small-img">
                                <img src="{{ asset('frontend') }}/images/resources/aiub-sir-small-img.jpg" alt="">
                            </div>
                            <div class="get-to-know__client-box">
                                <h3 class="odometer" data-count="9">00</h3>
                                <span class="get-to-know__plus">+</span>
                                <p class="get-to-know__client-text">worldwide clients</p>
                            </div>
                            <div class="get-to-know-shape-1"><img
                                    src="{{ asset('frontend') }}/images/shapes/get-to-know-shape-1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="get-to-know__right">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">Get to know us</span>
                                <div class="section-title-shape">
                                    <img src="{{ asset('frontend') }}/images/shapes/section-title-shape.png"
                                        alt="">
                                </div>
                            </div>
                            <h2 class="section-title__title">Easy solutions for your IT problems</h2>
                        </div>
                        <p class="get-to-know__text">Techsolutions bd is one of the leading IT companies in
                            Bangladesh. We provide Secure, Scalable, On-Demand Application System and Data Solutions
                            to help customers improving their business performance.</p>
                        <ul class="list-unstyled get-to-know__points">
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>Donec scelerisque egestas purus eget fringilla</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>Mauris imperdiet non ligula et lobortis.</p>
                                </div>
                            </li>
                        </ul>
                        <div class="get-to-know__it-solutions">
                            <div class="get-to-know__it-solutions-icon">
                                <span class="icon-data-analytics"></span>
                            </div>
                            <div class="get-to-know__it-solutions-text-box">
                                <p class="get-to-know__it-solutions-text">Stop worrying, we take care of your
                                    technology problems.</p>
                            </div>
                        </div>
                        <a href="{{ url('about') }}" class="get-to-know__btn thm-btn">Discover more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.service.main')

    <section class="business-from">
        <div class="business-from-bg-box">
            <div class="business-from-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url({{ asset('frontend') }}/images/backgrounds/business-from-bg.jpg);">
            </div>
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

    <section class="testimonial-one">
        <div class="testimonial-one__inner">
            <div class="testimonial-one-shape float-bob-x">
                <img src="{{ asset('frontend') }}/images/shapes/testimonial-one-shape.png" alt="">
            </div>
            <div class="container">
                <div class="testimonial-one__inner-content">
                    <div class="owl-carousel owl-theme thm-owl__carousel testimonial-one__carousel"
                        data-owl-options='{
                    "loop": true,
                    "autoplay": true,
                    "margin": 30,
                    "nav": false,
                    "dots": true,
                    "smartSpeed": 500,
                    "autoplayTimeout": 10000,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "responsive": {
                        "0": {
                            "items": 1
                        },
                        "768": {
                            "items": 1
                        },
                        "992": {
                            "items": 1
                        },
                        "1200": {
                            "items": 1
                        }
                    }
                }'>
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__top-content">
                                <div class="testimonial-one__img">
                                    <img src="{{ asset('frontend') }}/images/testimonial/testimonial-1-1.jpg"
                                        alt="">
                                </div>
                                <div class="testimonial-one__content">
                                    <p class="testimonial-one__text">This is due to their excellent service,
                                        competitive pricing and customer support. It’s throughly refresing to get
                                        such a personal touch. Duis aute lorem ipsum is simply free text irure dolor
                                        in reprehenderit in esse nulla pariatur.</p>
                                    <div class="testimonial-one__bottom-content">
                                        <div class="testimonial-one__client-info">
                                            <h5 class="testimonial-one__client-name">Aleesha brown</h5>
                                            <p class="testimonial-one__client-company">Client of notech company</p>
                                        </div>
                                        <div class="testimonial-one__quote">
                                            <img src="{{ asset('frontend') }}/images/testimonial/testimonial-1-quote.png"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__top-content">
                                <div class="testimonial-one__img">
                                    <img src="{{ asset('frontend') }}/images/testimonial/testimonial-1-2.jpg"
                                        alt="">
                                </div>
                                <div class="testimonial-one__content">
                                    <p class="testimonial-one__text">This is due to their excellent service,
                                        competitive pricing and customer support. It’s throughly refresing to get
                                        such a personal touch. Duis aute lorem ipsum is simply free text irure dolor
                                        in reprehenderit in esse nulla pariatur.</p>
                                    <div class="testimonial-one__bottom-content">
                                        <div class="testimonial-one__client-info">
                                            <h5 class="testimonial-one__client-name">Kavin coper</h5>
                                            <p class="testimonial-one__client-company">Client of notech company</p>
                                        </div>
                                        <div class="testimonial-one__quote">
                                            <img src="{{ asset('frontend') }}/images/testimonial/testimonial-1-quote.png"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__top-content">
                                <div class="testimonial-one__img">
                                    <img src="{{ asset('frontend') }}/images/testimonial/testimonial-1-3.jpg"
                                        alt="">
                                </div>
                                <div class="testimonial-one__content">
                                    <p class="testimonial-one__text">This is due to their excellent service,
                                        competitive pricing and customer support. It’s throughly refresing to get
                                        such a personal touch. Duis aute lorem ipsum is simply free text irure dolor
                                        in reprehenderit in esse nulla pariatur.</p>
                                    <div class="testimonial-one__bottom-content">
                                        <div class="testimonial-one__client-info">
                                            <h5 class="testimonial-one__client-name">John smith</h5>
                                            <p class="testimonial-one__client-company">Client of notech company</p>
                                        </div>
                                        <div class="testimonial-one__quote">
                                            <img src="{{ asset('frontend') }}/images/testimonial/testimonial-1-quote.png"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.project.main')

    <section class="tech-services">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="tech-services__left">
                        <div class="tech-services__img-box wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <div class="tech-services__img">
                                <img src="{{ asset('frontend') }}/images/resources/tech-services-img-1.jpg"
                                    alt="">
                            </div>
                            <div class="tech-services__img-content">
                                <p class="tech-services__img-text">At mi mauris <br> vestibulum <br> eu tellus <br>
                                    tristique <br> sapien</p>
                                <div class="tech-services__learn-more">
                                    <a href="about.html">Learn more<i class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="tech-services__right">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">Stay protected</span>
                                <div class="section-title-shape">
                                    <img src="{{ asset('frontend') }}/images/shapes/section-title-shape.png"
                                        alt="">
                                </div>
                            </div>
                            <h2 class="section-title__title">Tech services for your business ideas</h2>
                        </div>
                        <p class="tech-services__text">Donec suscipit ante ipsum. Donec convallis quam at tortor
                            hendrerit, ut elementum augue suscipit. Morbi tincidunt risus vel neque convallis
                            pretium non nec justo.</p>
                        <ul class="list-unstyled tech-services__points">
                            <li>
                                <div class="icon">
                                    <span class="icon-tick"></span>
                                </div>
                                <div class="content">
                                    <h4>We deliver perfect solutions</h4>
                                    <p>Lorem Ipsum nibh vel velit auctor aliqu aenean sollic.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-tick"></span>
                                </div>
                                <div class="content">
                                    <h4>We work with global brands</h4>
                                    <p>Lorem Ipsum nibh vel velit auctor aliqu aenean sollic.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="counter-one">
        <div class="counter-one__bg"
            style="background-image: url({{ asset('frontend') }}/images/backgrounds/funfact-bg-1-1.png);">
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

    <section class="trusted-source">
        <div class="container">
            <div class="trusted-source__inner wow fadeInUp" data-wow-delay="300ms">
                <div class="trusted-source__left">
                    <h3 class="trusted-source__content">Trusted source in IT <br> services</h3>
                    <div class="trusted-source__icon">
                        <img src="{{ asset('frontend') }}/images/icon/trusted-source-icon.png" alt="">
                    </div>
                </div>
                <div class="trusted-source__right">
                    <div class="trusted-source__contact-info">
                        <p>Have any question?</p>
                        <a href="tel:980009850"><span>Free</span> 01738-717829</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="helping">
        <div class="helping-wrapper">
            <div class="helping__left">
                <div class="helping__left-bg"
                    style="background-image: url({{ asset('frontend') }}/images/backgrounds/helping-left-bg.jpg);">
                </div>
            </div>
            <div class="helping__right">
                <div class="helping-shape-1  wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <img src="{{ asset('frontend') }}/images/shapes/helping-shape-1.png" alt="">
                </div>
                <div class="helping__right-content">
                    <div class="section-title text-left">
                        <div class="section-title__tagline-box">
                            <span class="section-title__tagline">Technology solution</span>
                            <div class="section-title-shape">
                                <img src="{{ asset('frontend') }}/images/shapes/section-title-shape.png" alt="">
                            </div>
                        </div>
                        <h2 class="section-title__title">Helping businesses around the world</h2>
                    </div>
                    <p class="helping__text">Lorem ipsum is simply free text dolor sit am adipi we help you ensure
                        everyone.</p>
                    <ul class="list-unstyled helping__points">
                        <li>
                            <div class="icon">
                                <span class="icon-data-protection"></span>
                            </div>
                            <h3 class="helping__title">Data protection</h3>
                            <p class="helping__text-2">Lorem ipsum dolor sit amet consectetur notted.</p>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-backup-copy"></span>
                            </div>
                            <h3 class="helping__title">Optimize IT system</h3>
                            <p class="helping__text-2">Lorem ipsum dolor sit amet consectetur notted.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="brand-one">
        <div class="container">
            <h4 class="brand-one__title">The business partners</h4>
            <div class="thm-swiper__slider swiper-container"
                data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
            "0": {
                "spaceBetween": 30,
                "slidesPerView": 2
            },
            "375": {
                "spaceBetween": 30,
                "slidesPerView": 2
            },
            "575": {
                "spaceBetween": 30,
                "slidesPerView": 3
            },
            "767": {
                "spaceBetween": 50,
                "slidesPerView": 4
            },
            "991": {
                "spaceBetween": 50,
                "slidesPerView": 5
            },
            "1199": {
                "spaceBetween": 100,
                "slidesPerView": 5
            }
        }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend') }}/images/brand/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend') }}/images/brand/brand-1-2.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend') }}/images/brand/brand-1-3.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend') }}/images/brand/brand-1-4.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend') }}/images/brand/brand-1-5.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend') }}/images/brand/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend') }}/images/brand/brand-1-2.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend') }}/images/brand/brand-1-3.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend') }}/images/brand/brand-1-4.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend') }}/images/brand/brand-1-5.png" alt="">
                    </div><!-- /.swiper-slide -->
                </div>
            </div>
        </div>
    </section>

@section('script')
@endsection
@endsection

@extends('frontend.layouts.homepage.main')
@section('style')
@endsection

@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ url('') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li class="active">Team Details</li>
                </ul>
                <h2>Team Details</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Team Details Start-->
    <section class="team-details">
        <div class="container">
            <div class="team-details__top">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="team-details__top-left">
                            <div class="team-details__top-img">
                                <img src="{{ asset('upload/expert/' . $getTeamDetail->expert_image) }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="team-details__top-right">
                            <div class="team-details__top-content">
                                <h3 class="team-details__top-name">{{ $getTeamDetail->name }}</h3>
                                <p class="team-details__top-title">{{ $getTeamDetail->designation }}</p>
                                <div class="team-details__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                                <p class="team-details__top-text-1">{{ $getTeamDetail->message }}
                                </p>
                                <p class="team-details__top-text-2">{!! $getTeamDetail->project_experience !!} </p>
                                <p class="team-details__top-text-3">{!! $getTeamDetail->project_experience !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-details__bottom">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="team-details__bottom-left">
                            <h4 class="team-details__bottom-left-title">Personal experience</h4>
                            <p class="team-details__bottom-left-text">If you are going to use a passage of Lorem Ipsum, you
                                need to be sure there isn't anything embarrassing hidden.</p>
                            <div class="team-details__progress">
                                <div class="team-details__progress-single">
                                    <h4 class="team-details__progress-title">Software</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="90%">
                                            <div class="count-text">90%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-details__progress-single">
                                    <h4 class="team-details__progress-title">Development</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="46%">
                                            <div class="count-text">46%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-details__progress-single">
                                    <h4 class="team-details__progress-title">Technology</h4>
                                    <div class="bar marb-0">
                                        <div class="bar-inner count-bar" data-percent="60%">
                                            <div class="count-text">60%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="team-details__bottom-right">
                            <h4 class="team-details__bottom-right-title">Education & awards</h4>
                            <ul class="list-unstyled team-details__education-awards">
                                <li>
                                    <h4>Western university</h4>
                                    <p><span>1987 - 1992</span> - Quisq comdo <br> simply free.</p>
                                </li>
                                <li>
                                    <h4>Columbia university</h4>
                                    <p><span>1992 - 1996</span> - Quisq comdo <br> simply free.</p>
                                </li>
                            </ul>
                            <ul class="list-unstyled team-details__education-awards-bottom">
                                <li><span>2006</span> - Cras eget lorem sed elit finibus viverra.</li>
                                <li><span>2010</span> - Phasellus tristique lorem et nulla tincidunt faucibus.</li>
                                <li><span>2018</span> - Nam a urna eu ex viverra iaculis vel eget ante.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Team Details End-->

    <!--Message One Start-->
    <section class="message-one">
        <div class="message-one-bg" style="background-image: url(assets/images/backgrounds/message-one-bg.jpg);"></div>
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Send us email</span>
                    <div class="section-title-shape">
                        <img src="assets/images/shapes/section-title-shape.png" alt="">
                    </div>
                </div>
                <h2 class="section-title__title">Feel free to write</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="message-one__form">
                        <form action="https://layerdrops.com/notechhtml/main-html/assets/inc/sendemail.php"
                            class="comment-one__form contact-form-validated" novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Your name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="email" placeholder="Email address" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Phone number" name="Phone">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Subject" name="Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="comment-form__input-box text-message-box">
                                        <textarea name="message" placeholder="Write comment"></textarea>
                                    </div>
                                    <div class="comment-form__btn-box">
                                        <button type="submit" class="thm-btn comment-form__btn">Send a message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Message One End-->

    <!--Brand One Start-->
    <section class="brand-one brand-five">
        <div class="container">
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
                        <img src="assets/images/brand/brand-5-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-5-2.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-5-3.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-5-4.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-5-5.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-5-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-5-2.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-5-3.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-5-4.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-5-5.png" alt="">
                    </div><!-- /.swiper-slide -->
                </div>
            </div>
        </div>
    </section>
    <!--Brand One End-->
@endsection
@section('script')
@endsection

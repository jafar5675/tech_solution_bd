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
                    <li><a href="index.html">Home</a></li>
                    <li><span>/</span></li>
                    <li class="active">Contact</li>
                </ul>
                <h2>Contact us</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Contact Details Start-->
    <section class="contact-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="contact-details__img">
                        <img src="{{ url('frontend') }}/images/resources/tech-services-img-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="contact-details__right">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">Contact with us</span>
                                <div class="section-title-shape">
                                    <img src="{{ url('frontend') }}/images/shapes/section-title-shape.png" alt="">
                                </div>
                            </div>
                            <h2 class="section-title__title">Get in touch with us</h2>
                        </div>
                        <p class="contact-details__text"></p>
                        <ul class="list-unstyled contact-details__info">
                            <li>
                                <div class="icon">
                                    <span class="icon-telephone"></span>
                                </div>
                                <div class="text">
                                    <p>Have any question?</p>
                                    <a href="tel:01738-717829"><span>Free</span> 01738-717829</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-email"></span>
                                </div>
                                <div class="text">
                                    <p>Write email</p>
                                    <a href="mailto:info@techsolutions-bd.com">info@techsolutions-bd.com</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-pin"></span>
                                </div>
                                <div class="text">
                                    <p>Visit anytime</p>
                                    <span>Address: 241, Senpara parbata,Mirpur 10, Dhaka, Bangladesh</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Details End-->

    <!--Contact Page Start-->
    <section class="contact-page">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Send us email</span>
                    <div class="section-title-shape">
                        <img src="{{ url('frontend') }}/images/shapes/section-title-shape.png" alt="">
                    </div>
                </div>
                <h2 class="section-title__title">Feel free to write</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="contact-page__form">
                        <form action="https://layerdrops.com/notechhtml/main-html/{{ url('frontend') }}/inc/sendemail.php"
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
    <!--Contact Page End-->

    <!--Google Map Start-->
    <section class="google-map-two">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
            class="google-map__two-box" allowfullscreen></iframe>

    </section>
    <!--Google Map End-->
@endsection
@section('script')
@endsection

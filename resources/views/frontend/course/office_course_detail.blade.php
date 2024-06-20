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
                    <li class="active">Courses</li>
                </ul>
                <h2>Our Course Details</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Project Details Start-->
    <section class="project-details">
        <div class="container">
            <div class="project-details__top">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="project-details__img-box">
                            <img src="assets/images/resources/feature-1-5.jpg" alt="">
                            <div class="project-details__details-box">
                                <ul class="list-unstyled project-details__details">
                                    <li>
                                        <div class="project-details__details-content">
                                            <span class="project-details__details-title">Course Name:</span>
                                            <p class="project-details__details-name">Microsoft Office Specialist</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="project-details__details-content">
                                            <span class="project-details__details-title">Total Class :</span>
                                            <p class="project-details__details-name">15</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="project-details__details-content">
                                            <span class="project-details__details-title">Total Students:</span>
                                            <p class="project-details__details-name">15</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="project-details__details-content">
                                            <span class="project-details__details-title">Contact:</span>
                                            <p class="project-details__details-name"> <a href="#">01738-717829</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="project-details__content-one">
                            <h3 class="project-details__content-one-title">Course Description</h3>

                            <h6><strong>( 1 )</strong> Microsoft Word</h6>
                            <h6><strong>( 2 )</strong> Microsoft Excel</h6>
                            <h6><strong>( 3 )</strong> Microsoft Power Point</h6>
                            <h6><strong>( 4 )</strong> Microsoft Access</h6>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="project-details__content-three">
                            <h3 class="project-details__content-three-title"> Review</h3>
                            <p class="project-details__content-three-text">I want to say in the beginning is that I am not a
                                student of computer science but I have completed graduation by studying chemistry.I didn't
                                know much about programming. Skill Development for Mobile Game &amp; Application through the
                                project I got the opportunity to do Aiub Sir's class.Alhamdulillah Aiub sir the classes were
                                so sincere and as a sir he was very friendly. Aiub Sir kept me updated on all the aspects of
                                programming which helped me a lot in shaping my career. Sir’s classes are very important for
                                me and my career. I wish best of luck and may Allah bless him for pouring some of his
                                knowledge upon me.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Project Details End-->

    <!--Similar project Start-->
    <section class="similar-project">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">More completed work</span>
                    <div class="section-title-shape">
                        <img src="assets/images/shapes/section-title-shape.png" alt="">
                    </div>
                </div>
                <h2 class="section-title__title">Similar Courses</h2>
            </div>
            <div class="row">
                @foreach ($getCourse as $course)
                    <div class="col-xl-4 col-lg-4">
                        <!--Project Page Two Single-->
                        <div class="project-two__single">
                            <div class="project-two__img">
                                <img src="{{ asset('upload/course/' . $course->image) }}" alt="">
                            </div>
                            <div class="project-two__content">
                                <p class="project-two__sub-title">{{ $course->name }}</p>
                                <h3 class="project-two__title"><a
                                        href="{{ url('different-courses/' . $course->name) }}">{{ $course->type }}</a></h3>
                                <div class="project-two__arrow">
                                    <a href="{{ url('different-courses/' . $course->name) }}"><i
                                            class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--Similar project End-->
@endsection

@section('script')
@endsection

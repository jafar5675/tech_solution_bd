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
                    <li><a href="index.html">Home</a></li>
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
                                            <p class="project-details__details-name">{{ $getCourseSingle->name }}</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="project-details__details-content">
                                            <span class="project-details__details-title">Total Class :</span>
                                            <p class="project-details__details-name">25</p>
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

                            <h6>Introduction </h6>
                            <hr>
                            <p class="project-details__content-one-text"> <strong>( 1 )</strong> Introduction </p>

                            <p class="project-details__content-one-text"> <strong>( 2 )</strong> What is Flutter ?</p>

                            <p class="project-details__content-one-text"> <strong>( 3 )</strong> Why should learn Flutter ?
                            </p>

                            <p class="project-details__content-one-text"> <strong>( 4 )</strong> Future of the Flutter .</p>

                            <br> <br>
                            <h6>Setup and Installation</h6>
                            <hr>
                            <p class="project-details__content-one-text"> <strong>( 1 )</strong> Install Flutter SDK </p>

                            <p class="project-details__content-one-text"> <strong>( 2 )</strong> Install IDE (Android
                                Studio/VS Code) </p>

                            <p class="project-details__content-one-text"> <strong>( 3 )</strong> Install Android
                                Emulator(Memu/Build in Emulator/Vysor)</p>

                            <p class="project-details__content-one-text"> <strong>( 4 )</strong> Git set up and Instalation
                            </p>

                            <br><br>
                            <h6>Dart Programming </h6>
                            <hr>
                            <p class="project-details__content-one-text"> <strong>( 1 )</strong> Variable </p>

                            <p class="project-details__content-one-text"> <strong>( 2 )</strong> Data types</p>

                            <p class="project-details__content-one-text"> <strong>( 3 )</strong> Operator</p>

                            <p class="project-details__content-one-text"> <strong>( 4 )</strong> Functions</p>

                            <p class="project-details__content-one-text"> <strong>( 5 )</strong> Controll Statement</p>

                            <p class="project-details__content-one-text"> <strong>( 6 )</strong> Loops </p>

                            <p class="project-details__content-one-text"> <strong>( 7 )</strong> Lists</p>

                            <p class="project-details__content-one-text"> <strong>( 8 )</strong> Maps</p>

                            <p class="project-details__content-one-text"> <strong>( 9 )</strong> Enums</p>

                            <p class="project-details__content-one-text"> <strong>( 10 )</strong> Exception Handling</p>

                            <p class="project-details__content-one-text"> <strong>( 11 )</strong> Future, Async and Await
                            </p>

                            <br><br>
                            <h6>Dart OOP </h6>
                            <hr>
                            <p class="project-details__content-one-text"> <strong>( 1 )</strong> Class and Objects </p>

                            <p class="project-details__content-one-text"> <strong>( 2 )</strong> Constructor </p>

                            <p class="project-details__content-one-text"> <strong>( 3 )</strong> Inheritance </p>

                            <p class="project-details__content-one-text"> <strong>( 4 )</strong> Abstraction</p>

                            <p class="project-details__content-one-text"> <strong>( 5 )</strong> Encapsulation</p>

                            <p class="project-details__content-one-text"> <strong>( 6 )</strong> Polymorphism</p>

                            <br><br>
                            <h6>Flutter UI Design </h6>
                            <hr>
                            <p class="project-details__content-one-text"> <strong>( 1 )</strong> Introduction to Flutter
                                Framework </p>

                            <p class="project-details__content-one-text"> <strong>( 2 )</strong> Widgets – Stateless and
                                Stateful </p>

                            <p class="project-details__content-one-text"> <strong>( 3 )</strong> Widget tree, Widget types
                                and Element tree </p>

                            <p class="project-details__content-one-text"> <strong>( 4 )</strong> Theme and Styling</p>

                            <p class="project-details__content-one-text"> <strong>( 5 )</strong> Layout Widgets</p>

                            <p class="project-details__content-one-text"> <strong>( 6 )</strong> Standard and Material
                                Widgets</p>

                            <p class="project-details__content-one-text"> <strong>( 7 )</strong> Alert Dialog</p>

                            <p class="project-details__content-one-text"> <strong>( 8 )</strong> Responsive Layout Design
                            </p>

                            <p class="project-details__content-one-text"> <strong>( 9 )</strong> List View</p>

                            <p class="project-details__content-one-text"> <strong>( 10 )</strong> Grid View and Custom
                                Scrollable Widgets</p>

                            <br><br>
                            <h6>Flutter User Inputs </h6>
                            <hr>
                            <p class="project-details__content-one-text"> <strong>( 1 )</strong> TextField </p>

                            <p class="project-details__content-one-text"> <strong>( 2 )</strong> TextForm Field </p>

                            <p class="project-details__content-one-text"> <strong>( 3 )</strong> Flutter Buttons </p>

                            <p class="project-details__content-one-text"> <strong>( 4 )</strong> Flutter Dropdown List</p>

                            <p class="project-details__content-one-text"> <strong>( 5 )</strong> Flutter Dimissible Widget
                            </p>

                            <p class="project-details__content-one-text"> <strong>( 6 )</strong> Flutter Gesture Dectector
                            </p>

                            <br><br>
                            <h6>Flutter Animations and Design </h6>
                            <hr>
                            <p class="project-details__content-one-text"> <strong>( 1 )</strong> Flutter Hero Animations
                            </p>

                            <p class="project-details__content-one-text"> <strong>( 2 )</strong> Implicit and Explicit
                                Animations </p>

                            <p class="project-details__content-one-text"> <strong>( 3 )</strong> Stagered Animation </p>

                            <p class="project-details__content-one-text"> <strong>( 4 )</strong> Named Routing</p>

                            <p class="project-details__content-one-text"> <strong>( 5 )</strong> Navigation Widgets</p>

                            <p class="project-details__content-one-text"> <strong>( 6 )</strong> Argument Passing</p>

                            <br><br>
                            <h6>State Management </h6>
                            <hr>
                            <p class="project-details__content-one-text"> <strong>( 1 )</strong> Stateful Widget and it’s
                                lifecycle </p>

                            <p class="project-details__content-one-text"> <strong>( 2 )</strong> Global Keys </p>

                            <p class="project-details__content-one-text"> <strong>( 3 )</strong> Provider Package </p>

                            <p class="project-details__content-one-text"> <strong>( 4 )</strong> Change Notifier, Change
                                Notifier Provider and Consumer</p>

                            <br><br>
                            <h6>Local Persistence </h6>
                            <hr>
                            <p class="project-details__content-one-text"> <strong>( 1 )</strong> Shared Preferences </p>

                            <p class="project-details__content-one-text"> <strong>( 2 )</strong> SQFLite Database for Mobile
                            </p>

                            <br><br>
                            <h6>Flutter Networking </h6>
                            <hr>
                            <p class="project-details__content-one-text"> <strong>( 1 )</strong> Http Package </p>

                            <p class="project-details__content-one-text"> <strong>( 2 )</strong> JSON Serialization </p>

                            <p class="project-details__content-one-text"> <strong>( 3 )</strong> Exception Handling </p>

                            <br><br>
                            <h6>Flutter Camera and Storage </h6>
                            <hr>
                            <p class="project-details__content-one-text"> <strong>( 1 )</strong> Camera and Storage </p>

                            <br><br>
                            <h6>UI Design Project </h6>
                            <hr>
                            <p class="project-details__content-one-text"> <strong>( 1 )</strong> 5 + UI Design with Flutter
                            </p>

                            <br><br>
                            <h6>Firebase </h6>
                            <hr>
                            <p class="project-details__content-one-text"> <strong>( 1 )</strong> Cloud Firestore </p>

                            <p class="project-details__content-one-text"> <strong>( 2 )</strong> Firebase Sign up and Sign
                                In Authentication </p>

                            <p class="project-details__content-one-text"> <strong>( 3 )</strong> Firebase Firestore Database
                            </p>

                            <p class="project-details__content-one-text"> <strong>( 4 )</strong> Firebase Storage </p>

                            <p class="project-details__content-one-text"> <strong>( 5 )</strong> Crud Operation </p>

                            <p class="project-details__content-one-text"> <strong>( 6 )</strong> Push Notifications </p>

                            <h6>API Integration </h6>
                            <hr>
                            <p class="project-details__content-one-text"> <strong>( 1 )</strong> API Integration and HTTP
                                Request Handling </p>

                            <p class="project-details__content-one-text"> <strong>( 2 )</strong> API Integration Project
                                using Demo API (E-commerce or others) </p>

                            <h6>Project </h6>
                            <hr>
                            <p class="project-details__content-one-text"> <strong>( 1 )</strong> E-Commerce app from Scratch
                            </p>

                            <p class="project-details__content-one-text"> <strong>( 2 )</strong> Blog App </p>

                            <p class="project-details__content-one-text"> <strong>( 3 )</strong> Build and Prepare to
                                Upload </p>

                            <h6>How to earn with Flutter </h6>
                            <hr>
                            <p class="project-details__content-one-text"> <strong>( 1 )</strong> Find work from Fiverr or
                                Upwork </p>

                            <p class="project-details__content-one-text"> <strong>( 2 )</strong> Start your own Business
                            </p>

                            <p class="project-details__content-one-text"> <strong>( 3 )</strong> Earn from your apps </p>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="project-details__content-three">
                            <h3 class="project-details__content-three-title"> Review</h3>
                            <p class="project-details__content-three-text">I want to say in the beginning is that I am not
                                a student of computer science but I have completed graduation by studying chemistry.I didn't
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

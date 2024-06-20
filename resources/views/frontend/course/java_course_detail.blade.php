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
                                            <p class="project-details__details-name">Java Spring Boot with Angular</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="project-details__details-content">
                                            <span class="project-details__details-title">Total Class :</span>
                                            <p class="project-details__details-name">30</p>
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

                            <h6>JAVA – Basic to Advance</h6>
                            <hr>
                            <p class="project-details__content-one-text"> <strong>( 1 )</strong> Overview, Environment
                                Setup, Features of java, JDK, JRE, JVM- Java Memory Model, What is JIT, Hello Java
                                programming, explain total program in detail, Java comment,Garbage Collection etc</p>

                            <p class="project-details__content-one-text"> <strong>( 2 )</strong> Java variables, Java Data
                                types, Java Control Statement,-is else, while, do-while, for, switch, break continue,
                                scanner</p>

                            <p class="project-details__content-one-text"> <strong>( 3 )</strong> Java Programming
                                –Factorial, even odd, Armstrong Number, Prime Number, Palindrom, arthimatic operation
                                program, etc</p>

                            <p class="project-details__content-one-text"> <strong>( 4 )</strong> Java –OOPs concept, Naming
                                Convention, object and class, Constructor, static keyword, this keyword, Java inheritance
                            </p>

                            <p class="project-details__content-one-text"> <strong>( 5 )</strong> Java Polymorphism- Method
                                Overloading, Method Overriding, Super Keyword, final keyword, etc</p>

                            <p class="project-details__content-one-text"> <strong>( 6 )</strong> Java Abstraction- Abstract
                                Class, Interface, difference between Abstract and Interface, Java Encapsulation- Package,
                                Access modifiers, examples of encapsulation,etc</p>

                            <p class="project-details__content-one-text"> <strong>( 7 )</strong> Java OOPs concept examples,
                                Java Array, Java Recursion, Call by value,strictfp keyword, etc</p>

                            <p class="project-details__content-one-text"> <strong>( 8 )</strong> Java Exception Handling-
                                Try catch, nested try, Finally block, Throw keyword, Throws Keyword, difference between
                                them, final, finally and finalize different, etc</p>

                            <p class="project-details__content-one-text"> <strong>( 9 )</strong> Java Multithreading-
                                Overview, Advantage, life cycle, Creating Thread, run(),sleep(),start(),join() methods,
                                currentThread() method, Naming Thread, Priority thread,etc</p>

                            <p class="project-details__content-one-text"> <strong>( 10 )</strong> JavaCollection- Overview
                                about collection Framework, Java ArrayList, LinkedList, difference, List Interface, HashSet
                                , LinkedHashSet , TreeSet ,etc</p>

                            <p class="project-details__content-one-text"> <strong>( 11 )</strong> JavaCollection-Java Map
                                Interface, HashMap, LinkedHashMap, TreeMap, HashTable, Vector, Comparison and summary,etc
                            </p>

                            <p class="project-details__content-one-text"> <strong>( 12 )</strong> Java JDBC- Introduction,
                                Drivers, Connectivity with mySQL,Statemnets, Resultset,etc </p>

                            <p class="project-details__content-one-text"> <strong>( 13 )</strong> JAVA 8 Features-
                                Functional interfaces, Lambda Expression, ForEach Method, Method References, Optional
                                classes </p>

                            <p class="project-details__content-one-text"> <strong>( 14 )</strong> JAVA 8 Steaming Api- </p>

                            <p class="project-details__content-one-text"> <strong>( 15 )</strong> Design Pattern – Singleton
                                Design Pattern, Factory pattern, Proxy Pattern, Bridge Pattern </p>
                            <br> <br>
                            <h6>J2EE – Spring, Spring Boot</h6>
                            <hr>
                            <p class="project-details__content-one-text"> <strong>( 1 )</strong> Introduction to spring,
                                Setting up of Spring framework, Download JARs, Advantages, Spring Modules, how to Create
                                Application in eclipse, etc </p>

                            <p class="project-details__content-one-text"> <strong>( 2 )</strong> Configure XML files, Spring
                                Bean Factory, Spring Application Context, IOC Container, Spring DI, Constructor Injection,
                                Setter Mathod Injection, etc </p>

                            <p class="project-details__content-one-text"> <strong>( 3 )</strong> Spring AOP, Implementation
                                of Spring AOP,Annotations, Spring ORM Introduction,etc</p>

                            <p class="project-details__content-one-text"> <strong>( 4 )</strong> SpringMVC – Introduction,
                                Implementation of Spring MVC, Multiple View Page, Multiple Controller,etc</p>

                            <p class="project-details__content-one-text"> <strong>( 5 )</strong> Spring JDBC – JDBC Template
                                Example, Prepared statement, Resultset extractor, Same </p>

                            <p class="project-details__content-one-text"> <strong>( 6 )</strong> Spring Boot- Introduction,
                                Spring Boot Features, Spring Maven Project, SB Project Wizard, Spring Initialize, Spring
                                Boot CLI, Spring Boot Example </p>

                            <p class="project-details__content-one-text"> <strong>( 7 )</strong> SB Annotations, Spring Boot
                                DM, Spring Boot Properties, Spring Boot Starters, Spring Boot Actuator, Spring Boot JDBC
                            </p>

                            <br><br>
                            <h6>Basic UI</h6>
                            <hr>
                            <p class="project-details__content-one-text"> <strong>( 1 )</strong> Html5 :- Basic Tags, Table
                                tags,Elements, Attributes, formatting tags, Table tags, Image tag-(scr, alt), anchor tags,
                                Form tags(all input type, textarea, select option,etc) , List Tags, etc </p>

                            <p class="project-details__content-one-text"> <strong>( 2 )</strong> CSS3 -Overview, How to
                                insert css, types of css, CSS with help of id or class, CSS for font, text, image, link,
                                table ,etc</p>

                            <p class="project-details__content-one-text"> <strong>( 3 )</strong> JavaScript – Overview,
                                Types of JavaScript, syntax, placement, Variable, operation, innerhtml, innerText, basic
                                form validation</p>

                            <p class="project-details__content-one-text"> <strong>( 4 )</strong> Javascript – Object,
                                functions, events, and small small , OOPs Concept, Collection Concept</p>

                            <br><br>
                            <h6>AngularJs </h6>
                            <hr>
                            <p class="project-details__content-one-text"> <strong>( 1 )</strong> What is AngularJS,
                                Environment Setup, AngularJS MVC, AngularJS First App, Basic Directives(ng-app, ng-model,
                                ng-bind,ng-init) </p>

                            <p class="project-details__content-one-text"> <strong>( 2 )</strong> AngularJS Expressions,
                                AngularJS Directives like ng-repeat, AngularJS Controllers, AngularJS Modules- Application
                                Model and Controller Model, AngularJS Scopes </p>

                            <p class="project-details__content-one-text"> <strong>( 3 )</strong> AngularJS Filters,
                                AngularJS Tables, AngularJS Select, AngularJS DOM-(ng-show,ng-hide, ng-click,ng-disable),
                                AngularJS Forms(ng-click, $error,$invalid,$dirty attributes) </p>

                            <p class="project-details__content-one-text"> <strong>( 4 )</strong> AngularJS Validation,
                                AngularJS AJAX-($http control), AngularJS Dependancy Injection, AngularJS Services and many
                                Examples</p>

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

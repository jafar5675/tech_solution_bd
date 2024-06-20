@extends('frontend.layouts.homepage.main')
@section('style')
@endsection

@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ asset('upload/course/1796961490281406.jpg') }})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ url('') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li class="active">Courses</li>
                </ul>
                <h2>Our Courses</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->
    <!--Feature One Start-->
    <section class="feature-one feature-one--service-two-page">
        <div class="container">
            <div class="row">
                @foreach ($getCourse as $course)
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <!--Feature One Single-->
                        <div class="feature-one__single">
                            <div class="feature-one__img">
                                <img src="{{ asset('upload/course/' . $course->image) }}" alt="">
                                <div class="feature-one__title-box">
                                    <h3 class="feature-one__title"><a
                                            href="{{ url('different-courses/' . $course->name) }}">{{ $course->name }}</a>
                                    </h3>
                                </div>
                                <div class="feature-one__hover-content">
                                    <div class="feature-one__icon">
                                        <span class="icon-coding"></span>
                                    </div>
                                    <h3 class="feature-one__hover-title"><a
                                            href="{{ url('different-courses/' . $course->name) }}">{{ $course->type }}</a>
                                    </h3>
                                    <p class="feature-one__hover-text">{!! $course->about_course !!}</p>
                                    <div class="feature-one__learn-more">
                                        <a href="{{ url('course-detail/' . $course->id) }}">Learn more<i
                                                class="fa fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--Feature One End-->
@endsection
@section('script')
@endsection

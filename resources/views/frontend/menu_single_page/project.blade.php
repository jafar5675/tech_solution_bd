@extends('frontend.layouts.homepage.main')
@section('style')
@endsection

@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ asset('upload/project/1797140327601142.jpg') }})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ url('') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li class="active">Projects</li>
                </ul>
                <h2>Projects Carousel</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Project Page One Start-->
    <section class="project-page-one project-page-one--carousel">
        <div class="container">
            <div class="thm-owl__carousel owl-theme owl-carousel carousel--have-shadow carousel-dot-style-1"
                data-owl-options='{
                "loop": true,
                "autoplay": true,
                "margin": 0,
                "items": 1,
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
                        "items": 2,
                        "margin": 30
                    },
                    "992": {
                        "items": 3,
                        "margin": 30
                    }
                }
            }'>
                @foreach ($getProject as $project)
                    <div class="item">
                        <!--Project One Single-->
                        <div class="project-one__single">
                            <div class="project-one__img">
                                <img src="{{ asset('upload/project/' . $project->image) }}" alt="">
                                <a href="{{ url('project-detail/' . $project->id) }}">
                                    <img src="{{ asset('frontend') }}/images/icon/pricing-icon-1.png" alt=""
                                        height="70px" width="40px">
                                </a>
                            </div>
                            <div class="project-one__content">
                                <span class="project-one__sub-title">{{ $project->project_name }}</span>
                                <h3 class="project-one__title"><a
                                        href="{{ url('project-detail/' . $project->id) }}">{{ $project->short_title }}</a>
                                </h3>
                                <p class="project-one__text">{{ $project->short_description }}
                                </p>
                                <a href="{{ url('project-detail/' . $project->id) }}" class="thm-btn project-one__btn">View
                                    our project</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--Project Page One End-->
@endsection
@section('script')
@endsection

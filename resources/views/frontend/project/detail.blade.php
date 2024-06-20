@extends('frontend.layouts.homepage.main')
@section('style')
@endsection

@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ url('upload/project/' . $getProjectDetail->image) }})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ url('') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li class="active">Projects</li>
                </ul>
                <h2>Our Project Details</h2>
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
                            <img src="{{ url('upload/project/' . $getProjectDetail->image) }}" alt="" height="666"
                                width="301">
                            <div class="project-details__details-box">
                                <ul class="list-unstyled project-details__details">
                                    <li>
                                        <div class="project-details__details-content">
                                            <span class="project-details__details-title">Clients:</span>
                                            <p class="project-details__details-name">{{ $getProjectDetail->client }}</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="project-details__details-content">
                                            <span class="project-details__details-title">Category:</span>
                                            <p class="project-details__details-name">{{ $getProjectDetail->category }}</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="project-details__details-content">
                                            <span class="project-details__details-title">Services:</span>
                                            <p class="project-details__details-name">{{ $getProjectDetail->service }}</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="project-details__details-content">
                                            <span class="project-details__details-title">Web:</span>
                                            <p class="project-details__details-name"> <a
                                                    href="{{ url('') }}">{{ $getProjectDetail->web }}</a>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="project-details__content-one">
                            <h3 class="project-details__content-one-title">Deployment service</h3>
                            <p class="project-details__content-one-text">{!! $getProjectDetail->deployment !!}</p>
                        </div>
                        <div class="project-details__content-two">
                            <h3 class="project-details__content-two-title">The challenge of project</h3>
                            <p class="project-details__content-two-text">{{ $getProjectDetail->challenge }}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-5">
                        <div class="project-details__points-img">
                            <img src="{{ url('upload/project/' . $getProjectDetail->image) }}" alt=""
                                height="200">
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <ul class="list-unstyled project-details__points">
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>Lorem Ipsum generators on the Internet tend uses a dictionary.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>The majority have alteration in some form of over 200 Latin words.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>There are many variations of passages of available slightly.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>We are providing across ome form our customer base.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="project-details__content-three">
                            <h3 class="project-details__content-three-title">The result of project</h3>
                            <p class="project-details__content-three-text">{{ $getProjectDetail->result }}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="projectc-details__pagination-box">
                            <ul class="projectc-details__pagination list-unstyled clearfix">
                                <li class="next">
                                    <div class="icon">
                                        <a href="#" aria-label="Previous"><i
                                                class="fa fa-long-arrow-alt-right"></i></a>
                                    </div>
                                    <div class="content">
                                        <span>Previous post</span>
                                        <p>Cyber security</p>
                                    </div>
                                </li>
                                <li class="count"><a href="#"></a></li>
                                <li class="count"><a href="#"></a></li>
                                <li class="count"><a href="#"></a></li>
                                <li class="count"><a href="#"></a></li>
                                <li class="previous">
                                    <div class="content">
                                        <span>Next post</span>
                                        <p>Tech solutions</p>
                                    </div>
                                    <div class="icon">
                                        <a href="#" aria-label="Previous"><i
                                                class="fa fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </li>
                            </ul>
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
                <h2 class="section-title__title">Similar projects</h2>
            </div>
            <div class="row">
                @foreach ($getProject as $project)
                    <div class="col-xl-4 col-lg-4">
                        <!--Project Page Two Single-->
                        <div class="project-two__single">
                            <div class="project-two__img">
                                <img src="{{ asset('upload/project/' . $project->image) }}" alt="">
                            </div>
                            <div class="project-two__content">
                                <p class="project-two__sub-title">{{ $project->project_name }}</p>
                                <h3 class="project-two__title"><a
                                        href="{{ url('project-detail/' . $project->id) }}">{{ $project->short_title }}</a>
                                </h3>
                                <div class="project-two__arrow">
                                    <a href="{{ url('project-detail/' . $project->id) }}"><i
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

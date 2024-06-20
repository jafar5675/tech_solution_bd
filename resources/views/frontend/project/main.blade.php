<section class="project-one">
    <div class="project-one__inner">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Recently completed work</span>
                    <div class="section-title-shape">
                        <img src="{{ asset('frontend') }}/images/shapes/section-title-shape.png" alt="">
                    </div>
                </div>
                <h2 class="section-title__title">Our latest projects</h2>
            </div>
            <div class="row">
                @foreach ($getProject as $project)
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <!--Project One Single-->
                        <div class="project-one__single">
                            <div class="project-one__img">
                                <img src="{{ asset('upload/project/' . $project->image) }}" alt=""
                                    height="223px" width="373px;">
                            </div>
                            <div class="project-one__content">
                                <span class="project-one__sub-title">{{ $project->name }}</span>
                                <h3 class="project-one__title"><a
                                        href="{{ url('project-detail/' . $project->id) }}">{{ $project->type }}</a>
                                </h3>
                                <p class="project-one__text">{{ $project->short_title }}</p>
                                <a href="{{ url('project-detail/' . $project->id) }}"
                                    class="thm-btn project-one__btn">View our
                                    project</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

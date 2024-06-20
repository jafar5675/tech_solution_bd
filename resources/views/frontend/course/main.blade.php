<section class="feature-one">
    <div class="container">
        <div class="row">
            @foreach ($getCourse as $course)
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <!--Feature One Single-->
                    <div class="feature-one__single">
                        <div class="feature-one__img">
                            <img src="{{ asset('upload/course/' . $course->image) }}" alt="">
                            <div class="feature-one__title-box">
                                <h3 class="feature-one__title"><a href="about.html">{{ $course->name }}</a></h3>
                            </div>
                            <div class="feature-one__hover-content">
                                <div class="feature-one__icon">
                                    <span class="icon-system"></span>
                                </div>
                                <h3 class="feature-one__hover-title"><a href="about.html">{{ $course->type }}</a>
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

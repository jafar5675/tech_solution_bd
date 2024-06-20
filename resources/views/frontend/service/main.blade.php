<section class="services-one" style="background-image: url({{ asset('frontend') }}/images/shapes/service-bg-1-1.png);">
    <div class="service-one__shape-1"></div><!-- /.service-one__shape-1 -->
    <div class="service-one__shape-2"></div><!-- /.service-one__shape-2 -->
    <div class="container">
        <div class="services-one__top">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="services-one__top-left">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">What we’re offering</span>
                                <div class="section-title-shape">
                                    <img src="{{ asset('frontend') }}/images/shapes/section-title-shape.png"
                                        alt="">
                                </div>
                            </div>
                            <h2 class="section-title__title">Services we’re providing to our customers</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="services-one__top-right">
                        <p class="services-one__top-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. quis nostrud
                            exercitation ullamco laboris.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-one__bottom">
            <ul class="list-unstyled services-one__list">
                @foreach ($getService as $service)
                    <li class="services-one__single">
                        <div class="services-one__content">
                            <div class="services-one__icon">
                                <span class="icon-content"></span>
                            </div>
                            <h3 class="services-one__title"><a
                                    href="{{ url('service-detail/' . $service->name) }}">{{ $service->name }} <br>
                                    {{ $service->last_name }}</a></h3>
                            <p class="services-one__text">{!! $service->about_service !!}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>

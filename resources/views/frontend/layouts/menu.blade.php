<div class="main-menu__main-menu-box main-menu__main-menu-box--two">
    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
    <ul class="main-menu__list">
        <li class="@if (Request::segment(1) == '') current @endif">
            <a href="{{ url('') }}">Home</a>
        </li>
        <li class="@if (Request::segment(1) == 'about') current @endif">
            <a href="{{ url('about') }}">About Us</a>
        </li>
        <li class="dropdown @if (Request::segment(1) == 'services') current @endif">
            <a href="{{ url('services') }}">Services</a>
        </li>
        <li class="@if (Request::segment(1) == 'project') current @endif">
            <a href="{{ url('/project') }}">Projects</a>
        </li>
        <li class="@if (Request::segment(1) == 'team') current @endif">
            <a href="{{ url('team') }}">Our Team</a>
        </li>
        <li class="@if (Request::segment(1) == 'our_courses') current @endif">
            <a href="{{ url('our_courses') }}">Our Courses</a>
        </li>
        <li class="@if (Request::segment(1) == 'contact') current @endif">
            <a href="{{ url('contact') }}">Contact</a>
        </li>
    </ul>
</div>

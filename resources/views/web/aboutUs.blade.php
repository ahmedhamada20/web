@extends('web.layouts.master')
@section('content')
    <!-- Page Title -->
    <section class="page-title centred">
        <div class="pattern-layer" style="background-image: url({{asset('assets/images/shape/shape-87.png')}});"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>@lang('home.About')</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{route('home')}}">@lang('home.home')</a></li>
                    <li>@lang('home.About')</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->
    <!-- about-style-nine -->
    <section class="about-style-nine">
        <div class="auto-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box">
                        <figure class="image clearfix js-tilt"><img src="{{ isset(get_setting()['page_aboutsus_photo']) ? asset(get_setting()['page_aboutsus_photo']) : '' }}" alt=""></figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_20">
                        <div class="content-box">
                            <div class="sec-title style-two">
                                <h5>@lang('home.About')</h5>
                                <h2>

                                    {{ isset( get_setting()['page_abouts_us_home']) ? json_decode(get_setting()['page_abouts_us_home'], true)[app()->getLocale()] : '' }}

                                </h2>
                                <div class="divider" style="background-image: url({{asset('assets/images/icons/divider-1.png')}});"></div>
                            </div>
                            <div class="text">
                                <p>
                                    {{ isset( get_setting()['page_abouts_us_home_notes']) ? json_decode(get_setting()['page_abouts_us_home_notes'], true)[app()->getLocale()] : '' }}

                                </p>

                            </div>
                            <div class="sec-title style-two">
                                <h5>@lang('home.strategy')</h5>
                                <h2>
                                    {{ isset( get_setting()['page_abouts_us_home_strategy']) ? json_decode(get_setting()['page_abouts_us_home_strategy'], true)[app()->getLocale()] : '' }}

                                </h2>
                                <div class="divider" style="background-image: url({{asset('assets/images/icons/divider-1.png')}});"></div>
                            </div>
                            <div class="text">
                                <p>
                                    {{ isset( get_setting()['page_abouts_us_home_strategy_notes']) ? json_decode(get_setting()['page_abouts_us_home_strategy_notes'], true)[app()->getLocale()] : '' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-style-nine end -->


    <!-- works-style-two -->
    <section class="works-style-two centred bg-color-1">
        <div class="pattern-layer" style="background-image: url({{asset('assets/images/shape/shape-13.png')}});"></div>
        <div class="auto-container">
            <div class="sec-title style-two">
                <h5>@lang('home.how_we_work')</h5>
                <h2>@lang('home.Simple_and_smooth_working_mechanism')</h2>
                <div class="divider" style="background-image: url({{asset('assets/images/icons/divider-1.png')}});"></div>
            </div>
            <div class="row clearfix">
                @php
                    $icons = ['flaticon-cloud-network', 'flaticon-computer', 'flaticon-circuit'];
                @endphp
                @foreach(get_work() as $index => $row)
                    <div class="col-lg-4 col-md-6 col-sm-12 works-block">
                        <div class="works-block-two">
                            <div class="inner-box wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="text">
                                    <h3>{{$row->name()}}</h3>

                                </div>
                                <div class="count-box">
                                    <span class="count-text">0{{$index+1}}</span>
                                    <span class="dot-1"></span>
                                    <span class="dot-2"></span>
                                </div>
                                <div class="icon-box">
                                    <div class="icon-bg" style="background-image: url({{asset('storage/' . $row?->photo?->filename)}});"></div>
                                    <i class="{{ $icons[$index % count($icons)] }}"></i>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- works-style-two end -->



    <!-- skills-section -->
    <section class="skills-section about-page">
        <div class="pattern-layer" style="background-image: url({{asset('assets/images/shape/shape-9.png')}});"></div>
        <div class="anim-icon">
            <div class="icon icon-1 rotate-me" style="background-image: url({{asset('assets/images/shape/anim-icon-2.png')}});"></div>
        </div>
        <div class="auto-container">
            <div class="sec-title centred">
                <h5>@lang('home.Eyebright_features')</h5>
                <div class="divider" style="background-image: url({{asset('assets/images/icons/divider-1.png')}});"></div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box" data-wow-duration="1500ms">
                        <figure class="image js-tilt"><img src="{{asset('assets/images/resource/skills-1.png')}}" alt=""></figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_2">
                        <div class="content-box">
                            <div class="text">
                                <p>
                                    @foreach(get_services() as $index => $row)
                                        <strong>{{$index + 1}}-	{{$row->name()}}</strong>

                                    @endforeach


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- skills-section end -->
@endsection

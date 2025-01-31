@extends('web.layouts.master')
@section('content')
    <!-- banner-section -->
    <section class="banner-style-eight">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url({{asset('assets/images/shape/shape-70.png);')}}"></div>
            <div class="pattern-2" style="background-image: url({{asset('assets/images/shape/shape-71.png);')}}"></div>
        </div>
        <div class="anim-icon">
            <div class="icon icon-1 rotate-me" style="background-image: url({{asset('assets/images/icons/anim-icon-1.png')}});"></div>
            <div class="icon icon-2 float-bob-x" style="background-image: url({{asset('assets/images/icons/anim-icon-2.png')}});"></div>
            <div class="icon icon-3 rotate-me" style="background-image: url({{asset('assets/images/icons/anim-icon-3.png')}});"></div>
            <div class="icon icon-4 float-bob-y" style="background-image: url({{asset('assets/images/icons/anim-icon-4.png')}});"></div>
            <div class="icon icon-5"></div>
            <div class="icon icon-6 rotate-me" style="background-image: url({{asset('assets/images/icons/anim-icon-5.png')}});"></div>
        </div>
        <div class="auto-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                    <div class="content-box">

                        <h2>{{get_sliders()->name()}}</h2>
                        <div class="btn-box">
                            <a href="{{get_sliders()->link}}" class="theme-btn btn-eleven">@lang('home.More')</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 image-column">
                    <div class="image-box">
                        <figure class="image js-tilt"><img src="{{ asset('storage/' . get_sliders()->photo?->filename) }}" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->


    <!-- service-style-eight -->
    <section class="service-style-eight centred">
        <div class="auto-container">
            <div class="sec-title style-two">
                <h5>@lang('home.choose_Ebright')</h5>
                <h2>@lang('home.Integrated_services_with_high_efficiency')</h2>
                <div class="divider" style="background-image: url({{asset('assets/images/icons/divider-1.png')}});"></div>
            </div>
            <div class="row clearfix">
                @foreach(get_choose_ebright() as  $index => $row)
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-eight wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="pattern-layer">
                                    <div class="pattern-1" style="background-image: url({{asset('assets/images/shape/shape-75.png')}});"></div>
                                    <div class="pattern-2" style="background-image: url({{asset('assets/images/shape/shape-76.png')}});"></div>
                                </div>
                                <div class="icon-box">
                                    <div class="shape" style="background-image: url({{ asset('assets/images/shape/shape-' . (72 + $index) . '.png') }});"></div>
                                    <figure class="icon"><img src="{{ asset('storage/' . $row?->photo?->filename) }}" alt=""></figure>
                                </div>
                                <div class="text">
                                    <h3><a href="#">{{$row->name()}}</a></h3>
                                    <p>
                                        {{$row->notes()}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- service-style-eight end -->


    <!-- funfact-style-two -->
    <section class="funfact-style-two centred">
        <div class="auto-container">
            <div class="inner-container">
                <div class="pattern-layer" style="background-image: url({{asset('assets/images/shape/shape-77.png')}});"></div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 counter-block">
                        <div class="counter-block-three">
                            <div class="inner-box">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="{{get_setting()['completed_projects']}}">0</span>
                                </div>
                                <h4>@lang('home.completed_projects')</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 counter-block">
                        <div class="counter-block-three">
                            <div class="inner-box">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="{{get_setting()['effective_projects']}}">0</span>
                                </div>
                                <h4>@lang('home.effective_projects')</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 counter-block">
                        <div class="counter-block-three">
                            <div class="inner-box">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="{{get_setting()['average_years_of_experience']}}">0</span>
                                </div>
                                <h4>@lang('home.average_years_of_experience')</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- funfact-style-two end -->


    <!-- about-style-eight -->
    <section class="about-style-eight">
        <div class="auto-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box">
                        <figure class="image js-tilt"><img src="{{ isset(get_setting()['abouts_us_home_photo']) ? asset(get_setting()['abouts_us_home_photo']) : '' }}" alt=""></figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_18">
                        <div class="content-box">
                            <div class="sec-title style-two">
                                <h5>@lang('home.about_Eyebright')</h5>
                                <h2>
                                    {{ isset( get_setting()['abouts_us_home']) ? json_decode(get_setting()['abouts_us_home'], true)[app()->getLocale()] : '' }}

                                </h2>
                                <div class="divider" style="background-image: url({{asset('assets/images/icons/divider-1.png')}});"></div>
                            </div>
                            <div class="text">
                                <p>
                                    {{ isset( get_setting()['abouts_us_home_notes']) ? json_decode(get_setting()['abouts_us_home_notes'], true)[app()->getLocale()] : '' }}
                                </p>
                            </div>
                            <div class="inner-box">
                                <div class="single-item">
                                    <div class="icon-box"><i class="fal fa-check-circle"></i></div>
                                    <p>
                                        {{ isset( get_setting()['abouts_us_feature1']) ? json_decode(get_setting()['abouts_us_feature1'], true)[app()->getLocale()] : '' }}

                                    </p>
                                </div>
                                <div class="single-item">
                                    <div class="icon-box"><i class="fal fa-check-circle"></i></div>
                                    <p>
                                        {{ isset( get_setting()['abouts_us_feature2']) ? json_decode(get_setting()['abouts_us_feature2'], true)[app()->getLocale()] : '' }}
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-style-eight end -->


    <!-- benefits-style-two -->
    <section class="benefits-style-two">
        <div class="pattern-layer" style="background-image: url({{asset('assets/images/shape/shape-78.png')}});"></div>
        <div class="auto-container">
            <div class="sec-title style-two centred">
                <h5>مميزات أيبرايت</h5>
                <h2>مميزات تقنية احترافية</h2>
                <div class="divider" style="background-image: url({{asset('assets/images/icons/divider-1.png')}});"></div>
            </div>
            <div class="row clearfix">
                @foreach(get_services() as $index => $row)
                    <div class="col-lg-3 col-md-6 col-sm-12 benefits-block">
                        <div class="benefits-block-one wow fadeInLeft animated" data-wow-delay="600ms" data-wow-duration="1500m">
                            <div class="arrow-shape" style="background-image: url({{ asset('assets/images/icons/arrow-' . (2 + $index) . '.png') }});"></div>
                            <div class="inner-box">
                                <figure class="icon-box"><img src="{{ asset('storage/' . $row?->photo?->filename) }}" alt=""></figure>
                                <span>0{{$index+1}}</span>
                                <p>
                                    {{$row->name()}}
                                </p>

                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
    <!-- benefits-style-two end -->


    <!-- testimonial-style-six -->
    <section class="testimonial-style-six">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-85.png);"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title style-two">
                            <h5>مقولات نعتمدها ونعمل بها</h5>
                            <!--                                <h2>مقولات نعتمدها ونعمل بها</h2>-->
                            <div class="divider" style="background-image: url(assets/images/icons/divider-1.png);"></div>
                        </div>
                        <div class="single-item-carousel owl-carousel owl-theme owl-dots-none">
                            <div class="testimonial-content">
                                <div class="inner">
                                    <div class="light-icon"><i class="flaticon-quotes"></i></div>
                                    <figure class="author-thumb">
                                        <div class="shape" style="background-image: url(assets/images/shape/shape-67.png);"></div>
                                        <img src="assets/images/resource/testimonial-9.png" alt="">
                                    </figure>
                                    <ul class="rating clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <p>
                                        اشك أن شأن الإنترنت في وقتنا هذا شأن عظيم، وخدماته الكثيرة في الاتصال والتواصل لا تخفى على جميع المبحرين والمرتادين
                                    </p>
                                </div>
                                <div class="author-info">
                                    <h3>الاسم يكتب هنا</h3>
                                    <span class="designation">الوظيفة تكتب هنا</span>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <div class="inner">
                                    <div class="light-icon"><i class="flaticon-quotes"></i></div>
                                    <figure class="author-thumb">
                                        <div class="shape" style="background-image: url(assets/images/shape/shape-67.png);"></div>
                                        <img src="assets/images/resource/testimonial-9.png" alt="">
                                    </figure>
                                    <ul class="rating clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <p>
                                        اشك أن شأن الإنترنت في وقتنا هذا شأن عظيم، وخدماته الكثيرة في الاتصال والتواصل لا تخفى على جميع المبحرين والمرتادين
                                    </p>
                                </div>
                                <div class="author-info">
                                    <h3>الاسم يكتب هنا</h3>
                                    <span class="designation">الوظيفة تكتب هنا</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box">
                        <figure class="image js-tilt"><img src="assets/images/resource/illestration-3.png" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-style-six end -->


    <!-- contact-style-three -->
    <section class="contact-style-three">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image-box">
                            <figure class="image js-tilt"><img src="assets/images/resource/illestration-4.png" alt=""></figure>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_19">
                            <div class="content-box centred">
                                <div class="sec-title style-two">
                                    <h5>للاستفسار ومعرفة جديد أيبرايت</h5>
                                    <!--                                        <h2>آخر مستجدات الشركة</h2>-->
                                    <div class="divider" style="background-image: url(assets/images/icons/divider-1.png);"></div>
                                </div>
                                <div class="form-inner">
                                    <form action="index-8.html" method="post" class="default-form">
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <input type="text" name="full-name" placeholder="الاسم" required="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="number" min="0" name="mobile-number" placeholder="رقم الهاتف" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <textarea name="message" placeholder="الرسالة"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 column">
                                                <div class="form-group message-btn">
                                                    <button type="submit" class="theme-btn btn-eleven">إرسال الآن</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-style-three end -->
@endsection

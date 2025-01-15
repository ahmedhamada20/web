@extends('web.layouts.master')
@section('content')
    <!-- Page Title -->
    <section class="page-title centred">
        <div class="pattern-layer" style="background-image: url({{asset('assets/images/shape/shape-87.png')}});"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>@lang('home.About')</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{route('home')}}">الرئيسية</a></li>
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
                        <figure class="image clearfix js-tilt"><img src="{{asset('assets/images/resource/about-7.png')}}" alt=""></figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_20">
                        <div class="content-box">
                            <div class="sec-title style-two">
                                <h5>من نحن</h5>
                                <h2>منشأة سعودية متكاملة تضم قطاعين رائدة في مجالات تكنولوجيا الموارد البشرية والدهانات المضيئة. نهدف إلى تقديم حلول مبتكرة تلبي احتياجات عملائنا في كل قطاع.</h2>
                                <div class="divider" style="background-image: url({{asset('assets/images/icons/divider-1.png')}});"></div>
                            </div>
                            <div class="text">
                                <p>
                                    أسسنا آيبرايت بأعلى مستويات الدقة والإتقان والمرونة لنقف بجانبك حتى تحصل على الحلول التقنية المناسبة لمشروعك واحتياجاتك.
                                    وتحظى شركتنا بثقة جهات رسمية متعددة في المملكة العربية السعودية في مجال الخدمات التقنية والمشاريع الجديدة مستدامة التطوير،  وذلك بعد نجاحنا في تقديم مجموعة واسعة من الخدمات التقنية المتقدمة في عدة جهات حكومية وشركات كبرى في مختلف المجالات.
                                </p>
                                <strong>
                                    سنكون إحدى الشركات الأقوى التي تتقدم المسيرة التقنية في المملكة العربية السعودية إلى أعالي القمم في ظل تحفيز ودعم قائدنا الملهِم ذو النظرة البعيدة لمستقبل التقنية السعودية الواعد عالمياً
                                </strong>
                            </div>
                            <div class="sec-title style-two">
                                <h5>استراتيجيتنا</h5>
                                <h2>إنصات. تثقيف. تأسيس. رؤية. تحقيق الأفضل.</h2>
                                <div class="divider" style="background-image: url({{asset('assets/images/icons/divider-1.png')}});"></div>
                            </div>
                            <div class="text">
                                <p>
                                    ننصت دائماً إلى عملائنا لتحليل رؤيتهم ووجهات أنظارهم و تثقيفهم حول اساسيات التواجد في عالم التقنية ، لتأسيس أقوى و أهم و أحدث الأعمال وتحقيق الأفضل بطريقتهم الخاصة
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
                <h5>كيف نعمل</h5>
                <h2>آلية عمل سلسلة وبسيطة</h2>
                <div class="divider" style="background-image: url({{asset('assets/images/icons/divider-1.png')}});"></div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 works-block">
                    <div class="works-block-two">
                        <div class="inner-box wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="text">
                                <h3>فحص المتطلبات</h3>

                            </div>
                            <div class="count-box">
                                <span class="count-text">01</span>
                                <span class="dot-1"></span>
                                <span class="dot-2"></span>
                            </div>
                            <div class="icon-box">
                                <div class="icon-bg" style="background-image: url({{asset('assets/images/icons/icon-bg-1.png')}});"></div>
                                <i class="flaticon-cloud-network"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 works-block">
                    <div class="works-block-two">
                        <div class="inner-box wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="text">
                                <h3>جمع المعلومات</h3>

                            </div>
                            <div class="count-box">
                                <span class="count-text">02</span>
                                <span class="dot-1"></span>
                                <span class="dot-2"></span>
                            </div>
                            <div class="icon-box">
                                <div class="icon-bg" style="background-image: url({{asset('assets/images/icons/icon-bg-2.png')}});"></div>
                                <i class="flaticon-computer"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 works-block">
                    <div class="works-block-two">
                        <div class="inner-box wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="text">
                                <h3>البدء بالتنفيذ</h3>

                            </div>
                            <div class="count-box">
                                <span class="count-text">03</span>
                                <span class="dot-1"></span>
                                <span class="dot-2"></span>
                            </div>
                            <div class="icon-box">
                                <div class="icon-bg" style="background-image: url({{asset('assets/images/icons/icon-bg-3.png')}});"></div>
                                <i class="flaticon-circuit"></i>
                            </div>
                        </div>
                    </div>
                </div>
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
                <h5>مميزات آيبرايت</h5>
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
                                    <strong>1-	وجود الخبرات الاستشارية و الإدارية والتقنية والبرمجية والتسويقية والتصميمية التي تساهم في نجاح مشروعك </strong>
                                    <strong> 2-	الإلمام بمجال العمل بشكل عالي الجودة وينعكس ذلك على آلية عملنا وجودة خدماتنا.</strong>
                                    <strong> 3-	تحري الدقة القصوى في متطلبات ورغبات العميل في تنفيذ المشروع</strong>
                                    <strong> 4-	مرونة وسرعة الاستجابة للتعديلات حسب متطلبات العميل</strong>
                                    <strong>5-	التسهيلات المالية بطريقة الدفعات الموزعة</strong>

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

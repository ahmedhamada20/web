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

                        <h2>نضيء حياتك بالتقنية</h2>
                        <div class="btn-box">
                            <a href="about.html" class="theme-btn btn-eleven">المزيد</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 image-column">
                    <div class="image-box">
                        <figure class="image js-tilt"><img src="{{asset('assets/images/banner/banner-18.png')}}" alt=""></figure>
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
                <h5>لماذا تختار أيبرايت</h5>
                <h2>خدمات متكاملة بكفاءة عالية</h2>
                <div class="divider" style="background-image: url({{asset('assets/images/icons/divider-1.png')}});"></div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-eight wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="pattern-layer">
                                <div class="pattern-1" style="background-image: url({{asset('assets/images/shape/shape-75.png')}});"></div>
                                <div class="pattern-2" style="background-image: url({{asset('assets/images/shape/shape-76.png')}});"></div>
                            </div>
                            <div class="icon-box">
                                <div class="shape" style="background-image: url({{asset('assets/images/shape/shape-72.png')}});"></div>
                                <figure class="icon"><img src="{{asset('assets/images/icons/icon-27.png')}}" alt=""></figure>
                            </div>
                            <div class="text">
                                <h3><a href="#">خبرة موثوقة</a></h3>
                                <p>سنوات من الابتكار في تكنولوجيا الموارد البشرية والدهانات</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-eight wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="pattern-layer">
                                <div class="pattern-1" style="background-image: url({{asset('assets/images/shape/shape-75.png')}});"></div>
                                <div class="pattern-2" style="background-image: url({{asset('assets/images/shape/shape-76.png')}});"></div>
                            </div>
                            <div class="icon-box">
                                <div class="shape" style="background-image: url({{asset('assets/images/shape/shape-73.png')}});"></div>
                                <figure class="icon"><img src="{{asset('assets/images/icons/icon-28.png')}}" alt=""></figure>
                            </div>
                            <div class="text">
                                <h3><a href="#">فريق متميز</a></h3>
                                <p>متخصصون في كل قطاع لضمان جودة خدماتنا</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-eight wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="pattern-layer">
                                <div class="pattern-1" style="background-image: url({{asset('assets/images/shape/shape-75.png')}});"></div>
                                <div class="pattern-2" style="background-image: url({{asset('assets/images/shape/shape-76.png')}});"></div>
                            </div>
                            <div class="icon-box">
                                <div class="shape" style="background-image: url({{asset('assets/images/shape/shape-74.png')}});"></div>
                                <figure class="icon"><img src="assets/images/icons/icon-29.png" alt=""></figure>
                            </div>
                            <div class="text">
                                <h3><a href="#">شغف بالتطوير</a></h3>
                                <p>مستمرون في البحث والتطوير لتقديم أفضل الحلول</p>
                            </div>
                        </div>
                    </div>
                </div>
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
                                    <span class="count-text" data-speed="1500" data-stop="45">0</span>
                                </div>
                                <h4>المشاريع المنجزة</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 counter-block">
                        <div class="counter-block-three">
                            <div class="inner-box">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="15">0</span>
                                </div>
                                <h4>المشاريع الفعالة</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 counter-block">
                        <div class="counter-block-three">
                            <div class="inner-box">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="5">0</span>
                                </div>
                                <h4>معدل سنين الخبرة</h4>
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
                        <figure class="image js-tilt"><img src="{{asset('assets/images/resource/about-6.png')}}" alt=""></figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_18">
                        <div class="content-box">
                            <div class="sec-title style-two">
                                <h5>عن أيبرايت</h5>
                                <h2>منشأة سعودية متكاملة تضم قطاعين رائدة في مجالات تكنولوجيا الموارد البشرية والدهانات المضيئة. نهدف إلى تقديم حلول مبتكرة تلبي احتياجات عملائنا في كل قطاع.</h2>
                                <div class="divider" style="background-image: url({{asset('assets/images/icons/divider-1.png')}});"></div>
                            </div>
                            <div class="text">
                                <p>
                                    أسسنا آيبرايت بأعلى مستويات الدقة والإتقان والمرونة لنقف بجانبك حتى تحصل على الحلول التقنية المناسبة لمشروعك واحتياجاتك.
                                </p>
                            </div>
                            <div class="inner-box">
                                <div class="single-item">
                                    <div class="icon-box"><i class="fal fa-check-circle"></i></div>
                                    <p>وتحظى شركتنا بثقة جهات رسمية متعددة في المملكة العربية السعودية في مجال الخدمات التقنية والمشاريع الجديدة مستدامة التطوير،  وذلك بعد نجاحنا في تقديم مجموعة واسعة من الخدمات التقنية المتقدمة في عدة جهات حكومية وشركات كبرى في مختلف المجالات.</p>
                                </div>
                                <div class="single-item">
                                    <div class="icon-box"><i class="fal fa-check-circle"></i></div>
                                    <p>سنكون إحدى الشركات الأقوى التي تتقدم المسيرة التقنية في المملكة العربية السعودية إلى أعالي القمم في ظل تحفيز ودعم قائدنا الملهِم ذو النظرة البعيدة لمستقبل التقنية السعودية الواعد عالمياً </p>

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
                <div class="col-lg-3 col-md-6 col-sm-12 benefits-block">
                    <div class="benefits-block-one wow fadeInLeft animated" data-wow-delay="600ms" data-wow-duration="1500m">
                        <div class="arrow-shape" style="background-image: url({{asset('assets/images/icons/arrow-2.png')}});"></div>
                        <div class="inner-box">
                            <figure class="icon-box"><img src="{{asset('assets/images/icons/icon-30.png')}}" alt=""></figure>
                            <span>01</span>
                            <p>وجود الخبرات الاستشارية و الإدارية والتقنية والبرمجية والتسويقية والتصميمية التي تساهم في نجاح مشروعك</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 benefits-block">
                    <div class="benefits-block-one wow fadeInLeft animated" data-wow-delay="400ms" data-wow-duration="1500m">
                        <div class="arrow-shape" style="background-image: url({{asset('assets/images/icons/arrow-3.png')}});"></div>
                        <div class="inner-box">
                            <figure class="icon-box"><img src="{{asset('assets/images/icons/icon-31.png')}}" alt=""></figure>
                            <span>02</span>
                            <p>الإلمام بمجال العمل بشكل عالي الجودة وينعكس ذلك على آلية عملنا وجودة خدماتنا.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 benefits-block">
                    <div class="benefits-block-one wow fadeInLeft animated" data-wow-delay="200ms" data-wow-duration="1500m">
                        <div class="arrow-shape" style="background-image: url(assets/images/icons/arrow-4.png);"></div>
                        <div class="inner-box">
                            <figure class="icon-box"><img src="assets/images/icons/icon-32.png" alt=""></figure>
                            <span>03</span>
                            <p>تحري الدقة القصوى في متطلبات ورغبات العميل في تنفيذ المشروع</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 benefits-block">
                    <div class="benefits-block-one wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500m">
                        <div class="arrow-shape" style="background-image: url(assets/images/icons/arrow-5.png);"></div>
                        <div class="inner-box">
                            <figure class="icon-box"><img src="assets/images/icons/icon-33.png" alt=""></figure>
                            <span>04</span>
                            <p>مرونة وسرعة الاستجابة للتعديلات حسب متطلبات العميل</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 benefits-block">
                    <div class="benefits-block-one wow fadeInLeft animated" data-wow-delay="400ms" data-wow-duration="1500m">
                        <div class="arrow-shape" style="background-image: url(assets/images/icons/arrow-3.png);"></div>
                        <div class="inner-box">
                            <figure class="icon-box"><img src="assets/images/icons/icon-31.png" alt=""></figure>
                            <span>05</span>
                            <p>التسهيلات المالية بطريقة الدفعات الموزعة</p>

                        </div>
                    </div>
                </div>
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

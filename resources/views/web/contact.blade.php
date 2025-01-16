@extends('web.layouts.master')
@section('content')
    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="{{route('home')}}"><img src="{{asset('assets/images/logo-4.png')}}" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <div class="contact-info">
                <h4>معلومات التواصل</h4>
                <ul>
                    <li>المملكة العربية السعودية , جدة , العزيزية , مركز أوتاد التجاري</li>
                    <li><a href="tel:0508688071">0508688071</a></li>
                    <li><a href="mailto:info@ibright-sa.com">info@ibright-sa.com</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->


    <!-- Page Title -->
    <section class="page-title centred">
        <div class="pattern-layer" style="background-image: url({{asset('assets/images/shape/shape-87.png')}});"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>تواصل معنا</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">الرئيسية</a></li>
                    <li>تواصل معنا</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- contact-style-two -->
    <section class="contact-style-two sec-pad centred">
        <div class="pattern-layer" style="background-image: url({{asset('assets/images/shape/shape-68.png')}});"></div>
        <div class="auto-container">
            <div class="sec-title style-two">
                <h5>أرسل لنا رسالة</h5>
                <h2>ندعوك للتواصل معنا لمعرفة المزيد عن خدماتنا وكيف يمكننا مساعدتك في تحقيق أهدافك </h2>
                <div class="divider" style="background-image: url({{asset('assets/images/icons/divider-1.png')}});"></div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-10 col-md-12 col-sm-12 offset-lg-1 inner-column">
                    <div class="form-inner">
                        <form method="post" action="sendemail.php" id="contact-form" class="default-form">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <i class="far fa-user"></i>
                                    <input type="text" name="username" placeholder="الاسم كاملا" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <i class="far fa-envelope"></i>
                                    <input type="email" name="email" placeholder="البريد الإلكتروني" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <i class="fas fa-phone"></i>
                                    <input type="text" name="phone" required="" placeholder="الهاتف المحمول">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <i class="far fa-user"></i>
                                    <input type="text" name="subject" required="" placeholder="الموضوع">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="الرسالة"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button class="theme-btn btn-seven" type="submit" name="submit-form">إرسال الرسالة</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-style-two end -->
@endsection

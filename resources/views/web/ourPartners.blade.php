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
                <h1>شركاء النجاح</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{route('home')}}">الرئيسية</a></li>
                    <li>شركاء النجاح</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- contact-style-two -->
    <section class="contact-style-two contact-style-two-gray-bg sec-pad centred">
        <div class="pattern-layer" style="background-image: url({{asset('assets/images/shape/shape-68.png')}});"></div>
        <div class="auto-container">
            <div class="row">

                @foreach(get_partners() as $row)
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="box">
                            <strong>
                                {{$row->name()}}
                            </strong>
                            <img src="{{ asset('storage/' . $row?->photo?->filename) }}" alt="">
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </section>
    <!-- contact-style-two end -->
@endsection

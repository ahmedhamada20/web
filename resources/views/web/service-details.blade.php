@extends('web.layouts.master')
@section('content')
    <!-- Page Title -->
    <section class="page-title centred">
        <div class="pattern-layer" style="background-image: url({{asset('assets/images/shape/shape-87.png')}});"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>الأنظمة والخدمات العامة</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{route('home')}}">الرئيسية</a></li>
                    <li><a href="#">خدماتنا</a></li>
                    <li>{{$row->name()}}</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- service-details -->
    <section class="service-details">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="service-sidebar">
                        <div class="category-widget">
                            <ul class="category-list clearfix">
                                @foreach($row->details as $index => $details)
                                    <li>
                                        <a href="#" onclick="event.preventDefault(); showContent({{ $index }})">
                                            <p>{{ $details->name() }}</p>
                                            <i class="fas fa-long-arrow-alt-right"></i>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>

                        </div>

                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    @foreach($row->details as $index => $details)
                        <div id="content-{{ $index }}" class="content-side {{ $index == 0 ? 'active' : '' }}">
                            <div class="service-details-content">
                                <div class="content-one">
                                    <figure class="image-box">
                                        <img src="{{ asset('assets/images/service/service-1.jpg') }}" alt="">
                                    </figure>
                                    <div class="text">
                                        <h2>{{ $details->title() }}</h2>
                                        <p>{{ $details->description() }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>
    <!-- service-details end -->


    <!-- contact-style-four -->
    <section class="contact-style-four">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url({{asset('assets/images/shape/shape-91.png')}});"></div>
            <div class="pattern-2" style="background-image: url({{asset('assets/images/shape/shape-92.png')}});"></div>
        </div>
        <div class="auto-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_10">
                        <div class="content-box">
                            <div class="sec-title style-two">
                                <h5>تواصل معنا</h5>
                                <h2>نحن نحب أن نستمع إليك في أي وقت</h2>
                                <div class="divider" style="background-image: url({{asset('assets/images/icons/divider-1.png')}});"></div>
                            </div>
                            <form action="contact.html" method="post" class="default-form">
                                <div class="form-group">
                                    <i class="far fa-user"></i>
                                    <input type="text" name="name" placeholder="الاسم كاملا" required="">
                                </div>
                                <div class="form-group">
                                    <i class="far fa-envelope"></i>
                                    <input type="email" name="email" placeholder="البريد الإلكتروني" required="">
                                </div>
                                <div class="form-group">
                                    <i class="far fa-user"></i>
                                    <input type="text" name="subject" placeholder="الموضوع" required="">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" placeholder="الرسالة"></textarea>
                                </div>
                                <div class="form-group message-btn">
                                    <button type="submit" class="theme-btn btn-nine">إرسال رسالتك الآن</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box">
                        <figure class="image js-tilt"><img src="{{asset('assets/images/resource/illestration-5.png')}}" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-style-four end -->
@endsection
@section('js')
    <script>
        function showContent(index) {
            let contents = document.querySelectorAll(".content-side");
            contents.forEach(content => {
                content.style.display = "none";
                content.classList.remove("active");
            });

            let selectedContent = document.getElementById("content-" + index);
            if (selectedContent) {
                selectedContent.style.display = "block";
                selectedContent.classList.add("active");
            }
        }

        document.addEventListener("DOMContentLoaded", function () {
            showContent(0);
        });
    </script>
@endsection

<!-- main-footer -->
<footer class="main-footer footer-style-three">
    <div class="footer-top-two">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url{{asset('(assets/images/shape/shape-21.png')}});"></div>
            <div class="pattern-2" style="background-image: url({{asset('assets/images/shape/shape-22.png')}});"></div>
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget logo-widget">
                        <figure class="footer-logo"><a href="{{route('home')}}"><img src="{{asset('assets/images/logo-4.png')}}" alt=""></a></figure>
                        <div class="text">
                            <p>
                                {{ isset( get_setting()['him']) ? json_decode(get_setting()['him'], true)[app()->getLocale()] : '' }}
                            </p>
                        </div>
                        <ul class="social-links clearfix">
                            <li><a href="{{get_setting()['facebook']}}" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{get_setting()['twitter']}}" target="_blank"><i
                                        class="fab fa-twitter"></i></a></li>
                            <li><a href="{{get_setting()['instagram']}}" target="_blank"><i
                                        class="fab fa-instagram"></i></a></li>
                            <li><a href="{{get_setting()['Whatsapp']}}"
                                   target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget gallery-widget">
                        <div class="widget-title">
                            <h3>آخر أعمالنا</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="image-list clearfix">
                                <li>
                                    <figure class="image"><a href="{{asset('assets/images/resource/footer-1.jpg')}}" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/resource/footer-1.jpg" alt=""></a></figure>
                                </li>
                                <li>
                                    <figure class="image"><a href="{{asset('assets/images/resource/footer-2.jpg')}}" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/resource/footer-2.jpg" alt=""></a></figure>
                                </li>
                                <li>
                                    <figure class="image"><a href="{{asset('assets/images/resource/footer-3.jpg')}}" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/resource/footer-3.jpg" alt=""></a></figure>
                                </li>
                                <li>
                                    <figure class="image"><a href="{{asset('assets/images/resource/footer-4.jpg')}}" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/resource/footer-4.jpg" alt=""></a></figure>
                                </li>
                                <li>
                                    <figure class="image"><a href="{{asset('assets/images/resource/footer-5.jpg')}}" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/resource/footer-5.jpg" alt=""></a></figure>
                                </li>
                                <li>
                                    <figure class="image"><a href="{{asset('assets/images/resource/footer-6.jpg')}}" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/resource/footer-6.jpg" alt=""></a></figure>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget ml-40">
                        <div class="widget-title">
                            <h3>@lang('home.Services')</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                @foreach(get_packages() as $row)
                                    <li><a href="{{route('serviceDetails',$row->id)}}">{{$row->name()}}</a></li>

                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget contact-widget">
                        <div class="widget-title">
                            <h3>Contact Us</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="info-list clearfix">
                                <li>
                                    <h4>@lang('home.address')</h4>
                                    <p>
                                        {{ get_setting()['address'] ?? '' }}
                                    </p>
                                </li>
                                <li>
                                    <h4>@lang('home.phone')</h4>
                                    <p><a href="tel:{{ get_setting()['phone'] ?? '' }}">{{ get_setting()['phone'] ?? '' }}</a></p>
                                </li>
                                <li>
                                    <h4>@lang('home.email')</h4>
                                    <p><a href="mailto:{{ get_setting()['email'] ?? '' }}">{{ get_setting()['email'] ?? '' }}</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <!-- scroll to top -->
        <button class="scroll-top style-one scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <div class="auto-container">
            <div class="bottom-inner clearfix">
                <div class="copyright pull-left">
                    <p> &copy; <a href="{{route('home')}}">جميع الحقوق محفوظة لدى</a> IBright.</p>
                </div>
                <ul class="footer-nav pull-right clearfix">
                    <li><a href="#">سياسة الخصوصية</a></li>
                    <li><a href="#">الشروط والأحكام</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- main-footer end -->


<!-- scroll to top -->
<button class="scroll-top style-two scroll-to-target" data-target="html">
    <i class="fas fa-angle-up"></i>
</button>

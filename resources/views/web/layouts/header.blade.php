<!-- main header -->
<header class="main-header header-style-eight">
    <!-- header-top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="top-inner clearfix">
                <div class="text pull-left">
                </div>
                <div class="right-column pull-right">
                    <ul class="social-links clearfix">
                        <li><a href="https://www.facebook.com/IBright-ksa-104729301979467/" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://twitter.com/iBrightksa?t=hUIk0NWii0U1VleA7M43Vw&s=09" target="_blank"><i
                                    class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/ibrightksa/?utm_medium=copy_link" target="_blank"><i
                                    class="fab fa-instagram"></i></a></li>
                        <li><a href="https://api.whatsapp.com/send/?phone=966582326172&text&app_absent=0"
                               target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                    </ul>
                    <div class="phone-box">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-lower -->
    <div class="header-lower">
        <div class="auto-container">
            <div class="outer-box clearfix">
                <div class="logo-box pull-left">
                    <figure class="logo"><a href="{{route('home')}}"><img src="{{asset('assets/images/logo-3.png')}}" alt="" style="width: 144px !important;padding-left: 10px !important; " ></a></figure>
                </div>
                <div class="menu-area pull-right clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li>
                                    <a href="{{route('home')}}">{{__('home.home')}}</a>
                                </li>
                                <li>
                                    <a href="{{route('aboutUs')}}">@lang('home.About')</a>
                                </li>
                                <li class="dropdown">
                                    <a href="service-ltr.html">@lang('home.Services')</a>
                                    <ul>
                                        <li><a href="service-details-ltr.html">General systems and services</a></li>
                                        <li><a href="service-details-ltr-2.html">General systems and services</a></li>
                                        <li><a href="service-details-ltr-3.html">building and developing Services for
                                                systems, applications and websites</a></li>
                                        <li><a href="service-details-ltr-4.html">Dawam Platform - Human Resources
                                                Systems Sector</a></li>
                                        <li><a href="service-details-ltr-5.html">Luminous Paints Company</a></li>
                                        <li><a href="service-details-ltr-6.html">Smart lighting poles</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{route('ourPartners')}}">@lang('home.Partners')</a>
                                </li>
                                <li>
                                    <a href="{{route('ourClients')}}">@lang('home.Clients')</a>
                                </li>
                                <li>
                                    <a href="{{route('contact')}}">@lang('home.Contact')</a>
                                </li>
                                <li>
                                    <a href="{{ LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale() == 'ar' ? 'en' : 'ar') }}">
                                        {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'English' : 'العربية' }}
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </nav>
                    <div class="nav-right-content">
                        <div class="search-box-outer">
                            <div class="dropdown">
                                <button class="search-box-btn" type="button" id="dropdownMenu3" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"><i class="fas fa-search"></i>
                                </button>
                                <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu3">
                                    <div class="form-container">
                                        <form method="post" action="blog.html">
                                            <div class="form-group">
                                                <input type="search" name="search-field" value=""
                                                       placeholder="Search...." required="">
                                                <button type="submit" class="search-btn"><span
                                                        class="fas fa-search"></span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-box">
                            <a href="{{route('contact')}}" class="theme-btn">@lang('home.Get_In_Touch')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box clearfix">
                <figure class="sticky-logo pull-left">
                    <a href="{{route('home')}}"><img src="{{asset('assets/images/logo.png')}}" alt="" style="width: 203px;"></a>
                </figure>
                <div class="menu-area pull-right clearfix">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->

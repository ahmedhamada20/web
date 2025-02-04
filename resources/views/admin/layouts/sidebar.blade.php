<!-- ========== LeftSidebar Start ========== -->
<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="mdi mdi-close"></i>
    </button>

    <div class="left-side-logo d-block d-lg-none">
        <div class="text-center">

            <a href="{{route('admin')}}" class="logo"><img src="{{asset('assets/images/logo.png')}}" height="20" alt="logo"></a>
        </div>
    </div>

    <div class="sidebar-inner slimscrollleft">

        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">لوحه التحكم</li>

                <li>
                    <a href="{{route('admin')}}" class="waves-effect">
                        <i class="dripicons-home"></i>
                        <span> الصفحه الرئسية <span class="badge badge-success badge-pill float-right"></span></span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.setting')}}" class="waves-effect"><i class="dripicons-arrow-thin-right"></i><span> الاعدادات الرئسيه </span></a>
                </li>

                <li>
                    <a href="{{route('sliders.index')}}" class="waves-effect"><i class="dripicons-arrow-thin-right"></i><span> سلدير </span></a>
                </li>
                <li>
                    <a href="{{route('choose_ebright.index')}}" class="waves-effect"><i class="dripicons-arrow-thin-right"></i><span> لماذا تختار أيبرايت</span></a>
                </li>

                <li>
                    <a href="{{route('service.index')}}" class="waves-effect"><i class="dripicons-arrow-thin-right"></i><span>مميزات أيبرايت</span></a>
                </li>
                <li>
                    <a href="{{route('work.index')}}" class="waves-effect"><i class="dripicons-arrow-thin-right"></i><span>كيف نعمل</span></a>
                </li>

                <li>
                    <a href="{{route('package.index')}}" class="waves-effect"><i class="dripicons-arrow-thin-right"></i><span>خدمات</span></a>
                </li>
                <li>
                    <a href="{{route('our-partners.index')}}" class="waves-effect"><i class="dripicons-arrow-thin-right"></i><span>شركاء النجاح</span></a>
                </li>
                <li>
                    <a href="{{route('our-clients.index')}}" class="waves-effect"><i class="dripicons-arrow-thin-right"></i><span>عملاؤنا</span></a>
                </li>
{{--                <li class="has_sub">--}}
{{--                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-archive"></i> <span> Advanced UI </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>--}}
{{--                    <ul class="list-unstyled">--}}
{{--                        <li><a href="advanced-alertify.html">Alertify</a></li>--}}
{{--                        <li><a href="advanced-rating.html">Rating</a></li>--}}
{{--                        <li><a href="advanced-nestable.html">Nestable</a></li>--}}
{{--                        <li><a href="advanced-rangeslider.html">Range Slider</a></li>--}}
{{--                        <li><a href="advanced-sweet-alert.html">Sweet-Alert</a></li>--}}
{{--                        <li><a href="advanced-lightbox.html">Lightbox</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class="has_sub">--}}
{{--                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-rocket"></i> <span> Icons </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>--}}
{{--                    <ul class="list-unstyled">--}}
{{--                        <li><a href="icons-material.html">Material Design</a></li>--}}
{{--                        <li><a href="icons-ion.html">Ion Icons</a></li>--}}
{{--                        <li><a href="icons-fontawesome.html">Font Awesome</a></li>--}}
{{--                        <li><a href="icons-themify.html">Themify Icons</a></li>--}}
{{--                        <li><a href="icons-dripicons.html">Dripicons</a></li>--}}
{{--                        <li><a href="icons-typicons.html">Typicons Icons</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li>--}}
{{--                    <a href="calendar.html" class="waves-effect"><i class="dripicons-calendar"></i><span> Calendar </span></a>--}}
{{--                </li>--}}

{{--                <li class="has_sub">--}}
{{--                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i><span> Forms </span> <span class="badge badge-warning badge-pill float-right">8</span></a>--}}
{{--                    <ul class="list-unstyled">--}}
{{--                        <li><a href="form-elements.html">Form Elements</a></li>--}}
{{--                        <li><a href="form-validation.html">Form Validation</a></li>--}}
{{--                        <li><a href="form-advanced.html">Form Advanced</a></li>--}}
{{--                        <li><a href="form-editors.html">Form Editors</a></li>--}}
{{--                        <li><a href="form-uploads.html">Form File Upload</a></li>--}}
{{--                        <li><a href="form-mask.html">Form Mask</a></li>--}}
{{--                        <li><a href="form-summernote.html">Summernote</a></li>--}}
{{--                        <li><a href="form-xeditable.html">Form Xeditable</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class="has_sub">--}}
{{--                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-graph-bar"></i><span> Charts </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>--}}
{{--                    <ul class="list-unstyled">--}}
{{--                        <li><a href="charts-morris.html">Morris Chart</a></li>--}}
{{--                        <li><a href="charts-chartist.html">Chartist Chart</a></li>--}}
{{--                        <li><a href="charts-chartjs.html">Chartjs Chart</a></li>--}}
{{--                        <li><a href="charts-flot.html">Flot Chart</a></li>--}}
{{--                        <li><a href="charts-c3.html">C3 Chart</a></li>--}}
{{--                        <li><a href="charts-other.html">Jquery Knob Chart</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class="has_sub">--}}
{{--                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-view-thumb"></i><span> Tables </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>--}}
{{--                    <ul class="list-unstyled">--}}
{{--                        <li><a href="tables-basic.html">Basic Tables</a></li>--}}
{{--                        <li><a href="tables-datatable.html">Data Table</a></li>--}}
{{--                        <li><a href="tables-responsive.html">Responsive Table</a></li>--}}
{{--                        <li><a href="tables-editable.html">Editable Table</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class="menu-title">Extra</li>--}}

{{--                <li class="has_sub">--}}
{{--                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-location"></i><span> Maps </span> <span class="badge badge-danger badge-pill float-right">2</span></a>--}}
{{--                    <ul class="list-unstyled">--}}
{{--                        <li><a href="maps-google.html"> Google Map</a></li>--}}
{{--                        <li><a href="maps-vector.html"> Vector Map</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class="has_sub">--}}
{{--                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-copy"></i><span> Pages </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>--}}
{{--                    <ul class="list-unstyled">--}}
{{--                        <li><a href="pages-blank.html">Blank Page</a></li>--}}
{{--                        <li><a href="pages-login.html">Login</a></li>--}}
{{--                        <li><a href="pages-register.html">Register</a></li>--}}
{{--                        <li><a href="pages-recoverpw.html">Recover Password</a></li>--}}
{{--                        <li><a href="pages-lock-screen.html">Lock Screen</a></li>--}}
{{--                        <li><a href="pages-404.html">Error 404</a></li>--}}
{{--                        <li><a href="pages-500.html">Error 500</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class="has_sub">--}}
{{--                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-medical"></i><span> Extras </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>--}}
{{--                    <ul class="list-unstyled">--}}
{{--                        <li><a href="extras-pricing.html">Pricing</a></li>--}}
{{--                        <li><a href="extras-invoice.html">Invoice</a></li>--}}
{{--                        <li><a href="extras-timeline.html">Timeline</a></li>--}}
{{--                        <li><a href="extras-faqs.html">FAQs</a></li>--}}
{{--                        <li><a href="extras-maintenance.html">Maintenance</a></li>--}}
{{--                        <li><a href="extras-comingsoon.html">Coming Soon</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
<!-- Left Sidebar End -->

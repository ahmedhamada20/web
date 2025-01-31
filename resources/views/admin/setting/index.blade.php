@extends('admin.layouts.master')
@section('css')
@endsection
@section('content')
    <!-- Start page title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title m-0">الاعدادات الرئسيه</h4>
                    </div>
                    <div class="col-md-4">
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end page-title-box -->
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col">
            <div class="card">
                <form action="{{route('admin.setting_updated')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <label>اسم الموقع بالعربي</label>
                                <input type="text" name="website_name[ar]"
                                       value="{{ isset( $setting['website_name']) ? json_decode($setting['website_name'], true)['ar'] : '' }}"
                                       class="form-control" placeholder="اسم الموقع بالعربي"/>
                            </div>

                            <div class="col">
                                <label>اسم الموقع بالانجليزي</label>
                                <input type="text" name="website_name[en]"
                                       value="{{ isset( $setting['website_name']) ? json_decode($setting['website_name'], true)['en'] : '' }}"
                                       class="form-control" placeholder="اسم الموقع بالانجليزي"/>
                            </div>

                            <div class="col">
                                <label class="control-label">رقم الجوال</label>
                                <input type="number" name="phone" value="{{ $setting['phone'] ?? '' }}"
                                       class="form-control"
                                       placeholder="رقم الجوال"/>
                            </div>
                        </div>

                        <br>


                        <div class="row">
                            <div class="col">
                                <label class="control-label">البريد الالكتروني</label>
                                <input type="email" name="email" value="{{ $setting['email'] ?? '' }}"
                                       class="form-control"
                                       placeholder="البريد الالكتروني"/>
                            </div>

                            <div class="col">
                                <label class="control-label">رقم الواتس اب</label>
                                <input type="number" name="Whatsapp" value="{{ $setting['Whatsapp'] ?? '' }}"
                                       class="form-control"
                                       placeholder="رقم الواتس اب"/>
                            </div>

                            <div class="col">
                                <label class="control-label">العنوان</label>
                                <input type="text" name="address" value="{{ $setting['address'] ?? '' }}"
                                       class="form-control"
                                       placeholder="العنوان"/>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>facebook</label>

                                <input type="url" name="facebook" value="{{ $setting['facebook'] ?? '' }}"
                                       class="form-control"
                                       placeholder="Facebook"/>
                            </div>

                            <div class="col">
                                <label>Instagram</label>
                                <input type="url" name="instagram" value="{{ $setting['instagram'] ?? '' }}"
                                       class="form-control"
                                       placeholder="Instagram"/>
                            </div>

                            <div class="col">
                                <label>twitter</label>
                                <input type="url" name="twitter" value="{{ $setting['twitter'] ?? '' }}"
                                       class="form-control"
                                       placeholder="Twitter"/>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>نبذه عنا قصيره بالعربي</label>
                                <textarea class="form-control" name="him[ar]" rows="5">

                                    {{ isset( $setting['him']) ? json_decode($setting['him'], true)['ar'] : '' }}
                                </textarea>
                            </div>


                            <div class="col">
                                <label>نبذه عنا قصيره بالانجليزي</label>
                                <textarea class="form-control" name="him[en]" rows="5">
                                    {{ isset( $setting['him']) ? json_decode($setting['him'], true)['en'] : '' }}
                                </textarea>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>المشاريع المنجزة</label>
                                <input type="number" class="form-control"
                                       value="{{ $setting['completed_projects'] ?? '' }}" name="completed_projects">
                            </div>


                            <div class="col">
                                <label>المشاريع المنجزة</label>
                                <input type="number" class="form-control"
                                       value="{{ $setting['effective_projects'] ?? '' }}" name="effective_projects">
                            </div>
                            <div class="col">
                                <label>معدل سنين الخبرة</label>
                                <input type="number" class="form-control"
                                       value="{{ $setting['average_years_of_experience'] ?? '' }}"
                                       name="average_years_of_experience">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col">
                                <label>من نحن بالعربي</label>
                                <input type="text" name="abouts_us_home[ar]"
                                       value="{{ isset( $setting['abouts_us_home']) ? json_decode($setting['abouts_us_home'], true)['ar'] : '' }}"
                                       class="form-control" placeholder="من نحن بالعربي"/>
                            </div>


                            <div class="col">
                                <label>من نحن بالانجليزي</label>
                                <input type="text" name="abouts_us_home[en]"
                                       value="{{ isset( $setting['abouts_us_home']) ? json_decode($setting['abouts_us_home'], true)['en'] : '' }}"
                                       class="form-control" placeholder="من نحن بالانجليزي"/>
                            </div>
                        </div>


                        <br>

                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <label>من نحن الاساسيه بالعربي</label>
                                                <input type="text" name="page_abouts_us_home[ar]"
                                                       value="{{ isset( $setting['page_abouts_us_home']) ? json_decode($setting['page_abouts_us_home'], true)['ar'] : '' }}"class="form-control">
                                            </div>

                                            <div class="col">
                                                <label>من نحن الاساسيه بالانجليزي</label>
                                                <input type="text" name="page_abouts_us_home[en]"
                                                       value="{{ isset( $setting['page_abouts_us_home']) ? json_decode($setting['page_abouts_us_home'], true)['en'] : '' }}"class="form-control">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col">
                                                <label>وصف من نحن الاساسيه بالعربي</label>
                                                <input type="text" name="page_abouts_us_home_notes[ar]"
                                                       value="{{ isset( $setting['page_abouts_us_home_notes']) ? json_decode($setting['page_abouts_us_home_notes'], true)['ar'] : '' }}" class="form-control">
                                            </div>

                                            <div class="col">
                                                <label>وصف من نحن الاساسيه بالانجليزي </label>
                                                <input type="text" name="page_abouts_us_home_notes[en]"
                                                       value="{{ isset( $setting['page_abouts_us_home_notes']) ? json_decode($setting['page_abouts_us_home_notes'], true)['en'] : '' }}" class="form-control">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col">
                                                <label>استراتيجيتنا من نحن الاساسيه بالعربي</label>
                                                <input type="text" name="page_abouts_us_home_strategy[ar]"
                                                       value="{{ isset( $setting['page_abouts_us_home_strategy']) ? json_decode($setting['page_abouts_us_home_strategy'], true)['ar'] : '' }}" class="form-control">
                                            </div>

                                            <div class="col">
                                                <label>استراتيجيتنا من نحن الاساسيه بالانجليزي </label>
                                                <input type="text" name="page_abouts_us_home_strategy[en]"
                                                       value="{{ isset( $setting['page_abouts_us_home_strategy']) ? json_decode($setting['page_abouts_us_home_strategy'], true)['en'] : '' }}" class="form-control">
                                            </div>
                                        </div>

                                        <br>

                                        <div class="row">
                                            <div class="col">
                                                <label>وصف استراتيجيتنا من نحن الاساسيه بالعربي</label>
                                                <input type="text" name="page_abouts_us_home_strategy_notes[ar]"
                                                       value="{{ isset( $setting['page_abouts_us_home_strategy_notes']) ? json_decode($setting['page_abouts_us_home_strategy_notes'], true)['ar'] : '' }}" class="form-control">
                                            </div>

                                            <div class="col">
                                                <label>وصف استراتيجيتنا من نحن الاساسيه بالانجليزي </label>
                                                <input type="text" name="page_abouts_us_home_strategy_notes[en]"
                                                       value="{{ isset( $setting['page_abouts_us_home_strategy_notes']) ? json_decode($setting['page_abouts_us_home_strategy_notes'], true)['en'] : '' }}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <br>


                        <div class="row">
                            <div class="col">
                                <label>وصف من نحن بالعربي </label>
                                <input type="text" name="abouts_us_home_notes[ar]"
                                       value="{{ isset( $setting['abouts_us_home_notes']) ? json_decode($setting['abouts_us_home_notes'], true)['ar'] : '' }}"
                                       class="form-control" placeholder="من نحن بالعربي"/>
                            </div>


                            <div class="col">
                                <label>وصف من نحن بالانجليزي </label>
                                <input type="text" name="abouts_us_home_notes[en]"
                                       value="{{ isset( $setting['abouts_us_home_notes']) ? json_decode($setting['abouts_us_home_notes'], true)['en'] : '' }}"
                                       class="form-control" placeholder="من نحن بالانجليزي"/>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label> ميزه من نحن 1 بالعربي </label>
                                <input type="text" name="abouts_us_feature1[ar]"
                                       value="{{ isset( $setting['abouts_us_feature1']) ? json_decode($setting['abouts_us_feature1'], true)['ar'] : '' }}"
                                       class="form-control" placeholder="ميزه من نحن 1 "/>
                            </div>


                            <div class="col">
                                <label>ميزه من نحن 1 بالانجليزي </label>
                                <input type="text" name="abouts_us_feature1[en]"
                                       value="{{ isset( $setting['abouts_us_feature1']) ? json_decode($setting['abouts_us_feature1'], true)['en'] : '' }}"
                                       class="form-control" placeholder="ميزه من نحن 1  بالانجليزي "/>
                            </div>
                        </div>

                        <br>


                        <div class="row">
                            <div class="col">
                                <label> ميزه من نحن 2 بالعربي </label>
                                <input type="text" name="abouts_us_feature2[ar]"
                                       value="{{ isset( $setting['abouts_us_feature2']) ? json_decode($setting['abouts_us_feature2'], true)['ar'] : '' }}"
                                       class="form-control" placeholder="ميزه من نحن 2 "/>
                            </div>


                            <div class="col">
                                <label>ميزه من نحن 2 بالانجليزي </label>
                                <input type="text" name="abouts_us_feature2[en]"
                                       value="{{ isset( $setting['abouts_us_feature2']) ? json_decode($setting['abouts_us_feature2'], true)['en'] : '' }}"
                                       class="form-control" placeholder="ميزه من نحن 2  بالانجليزي "/>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label>الصوره الاساسيه</label>
                                <img src="{{ isset($setting['logo_image']) ? asset($setting['logo_image']) : '' }}"
                                     width="50px"
                                     height="50px" alt="">
                                <input type="file" name="images[logo_image]" id="input-file-now-custom-1"
                                       data-default-file="{{ isset($setting['logo_image']) ? asset($setting['logo_image']) : '' }}"
                                       class="dropify"/>

                                @error('logo_image')
                                <small class="form-control-feedback"> {{ $message }} </small>
                                @enderror
                            </div>


                            <div class="col">
                                <label>الصوره الفرعيه</label>
                                <img
                                    src="{{ isset($setting['logo_image_navbar']) ? asset($setting['logo_image_navbar']) : '' }}"
                                    width="50px"
                                    height="50px" alt="">
                                <input type="file" name="images[logo_image_navbar]" id="input-file-now-custom-1"
                                       data-default-file="{{ isset($setting['logo_image_navbar']) ? asset($setting['logo_image_navbar']) : '' }}"
                                       class="dropify"/>

                                @error('logo_image_navbar')
                                <small class="form-control-feedback"> {{ $message }} </small>
                                @enderror
                            </div>


                            <div class="col">
                                <label>الصوره من نحن الصفحه الرئسية</label>
                                <img
                                    src="{{ isset($setting['abouts_us_home_photo']) ? asset($setting['abouts_us_home_photo']) : '' }}"
                                    width="50px"
                                    height="50px" alt="">
                                <input type="file" name="images[abouts_us_home_photo]" id="input-file-now-custom-1"
                                       data-default-file="{{ isset($setting['abouts_us_home_photo']) ? asset($setting['abouts_us_home_photo']) : '' }}"
                                       class="dropify"/>

                                @error('abouts_us_home_photo')
                                <small class="form-control-feedback"> {{ $message }} </small>
                                @enderror
                            </div>


                            <div class="col">
                                <label>الصوره مقولات</label>
                                <img src="{{ isset($setting['quotes_photo']) ? asset($setting['quotes_photo']) : '' }}"
                                     width="50px"
                                     height="50px" alt="">
                                <input type="file" name="images[quotes_photo]" id="input-file-now-custom-1"
                                       data-default-file="{{ isset($setting['quotes_photo']) ? asset($setting['quotes_photo']) : '' }}"
                                       class="dropify"/>

                                @error('quotes_photo')
                                <small class="form-control-feedback"> {{ $message }} </small>
                                @enderror
                            </div>


                            <div class="col">
                                <label>الصوره التواصل</label>
                                <img
                                    src="{{ isset($setting['contact_photo']) ? asset($setting['contact_photo']) : '' }}"
                                    width="50px"
                                    height="50px" alt="">
                                <input type="file" name="images[contact_photo]" id="input-file-now-custom-1"
                                       data-default-file="{{ isset($setting['contact_photo']) ? asset($setting['contact_photo']) : '' }}"
                                       class="dropify"/>

                                @error('contact_photo')
                                <small class="form-control-feedback"> {{ $message }} </small>
                                @enderror
                            </div>


                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label>صوره من نحن الاساسيه</label>
                                <img
                                    src="{{ isset($setting['page_aboutsus_photo']) ? asset($setting['page_aboutsus_photo']) : '' }}"
                                    width="50px"
                                    height="50px" alt="">
                                <input type="file" name="images[page_aboutsus_photo]" id="input-file-now-custom-1"
                                       data-default-file="{{ isset($setting['page_aboutsus_photo']) ? asset($setting['page_aboutsus_photo']) : '' }}"
                                       class="dropify"/>

                                @error('contact_photo')
                                <small class="form-control-feedback"> {{ $message }} </small>
                                @enderror
                            </div>
                        </div>





                        <br>

                        <div class="row">
                            <div class="col">
                                <button class="btn btn-success">تحديث</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
